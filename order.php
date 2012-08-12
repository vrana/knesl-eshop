<?php
$error = "";
if ($_POST) {
	$basket = $_SESSION["basket"];
	if (!checkCSRF()) {
		$error = "<p>Invalid CSRF token.</p>\n";
	} elseif (!$basket) {
		$error = "<p>Basket is empty.</p>\n";
	} else {
		if (preg_match('~^card-~', $_POST["payment_method"])) {
			if (!preg_match('~^\d{4} ?\d{4} ?\d{4} ?\d{4}$~', $_POST["card_number"])) {
				$error .= "<p>Invalid card number.</p>";
			}
			if (!preg_match('~^\d{3}$~', $_POST["card_cvc"])) {
				$error .= "<p>Invalid CVC code.</p>";
			}
		}
	}
	
	if (!$error) {
		query("START TRANSACTION");
		
		$products = array();
		foreach (query("SELECT id, name, amount, price, visible FROM products WHERE id IN (%s) AND visible = 1 FOR UPDATE", array_keys($basket)) as $row) {
			$products[$row["id"]] = $row;
		}
		$error = validateOrder($products, $basket);
		
		if (!$error) {
			$ok = query(
				"INSERT INTO orders (name, address, payment_method, variable_number, users_id) VALUES (%s, %s, %s, %s, %s)",
				$_POST["name"],
				$_POST["address"],
				$_POST["payment_method"],
				rand(),
				$_SESSION["userid"]);
			$orders_id = db()->lastInsertId();
			if (!$ok || !$orders_id) {
				$error = "<p>Unable to save order.</p>";
			} else {
				foreach ($basket as $id => $amount) {
					$ok = query("INSERT INTO order_items (orders_id, products_id, amount, price) VALUES (%d, %d, %d, %s)",
						$orders_id,
						$id,
						$amount,
						$products[$id]["price"]);
					if (!$ok) {
						$error = "<p>Unable to save item.</p>\n";
						break;
					}
				}
			}
			
			if (!$error) {
				query("COMMIT");
				$_SESSION["basket"] = array();
				
				$message = "";
				$sum = 0;
				foreach ($basket as $id => $amount) {
					$row = $products[$id];
					$price = $amount * $row["price"];
					$message .= $amount . "x $row[name] ($row[price]) = $price\n";
					$sum += $price;
				}
				$message .= "\nTotal: $sum\n";
				mail(
					ADMIN_EMAIL,
					"eShop - order #$orders_id",
					$message,
					"MIME-Version: 1.0" . PHP_EOL . "Content-Type: text/plain; charset=utf-8" . PHP_EOL . "Content-Transfer-Encoding: 8bit");
				
				redirect('', "Order successful.");
			}
		}
		query("ROLLBACK");
	}
}

$payment_methods = array(
	'cash-shop' => 'Cash at shop',
	'cash-mail' => 'Cash by mail',
	'account-shop' => 'To account at shop',
	'account-mail' => 'To account by mail',
	'card-shop' => 'Card at shop',
	'card-mail' => 'Card by mail',
);
$months = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
$years = range(date("Y"), date("Y") + 8);

htmlHead("Order");
echo $error;
?>
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="name" maxlength="100" value="<?=h($_POST["name"])?>" size="30">
<tr><th>Address<td><textarea name="address" rows="3" cols="30"><?=h($_POST["address"])?></textarea>
<tr><th>Payment<td><select name="payment_method" id="payment_method" onchange="paymentChange(this);"><?optionlist($payment_methods, $_POST["payment_method"])?>
<tr class="card-only"><th>Card number<td><input name="card_number" maxlength="19">

<tr class="card-only"><th>Card expiration<td>
<select name="card_month"><?optionlist(array_combine($months, $months), $_POST["card_month"])?></select>
<select name="card_year"><?optionlist(array_combine($years, $years), $_POST["card_year"])?></select>

<tr class="card-only"><th>CVC code<td><input name="card_cvc" maxlength="3">
</table>

<script type="text/javascript">
paymentChange(document.getElementById('payment_method'));
</script>

<p>
<input type="hidden" name="csrf" value="<?=$_SESSION["csrf"]?>">
<input type="submit" value="Order">
</p>
</form>
