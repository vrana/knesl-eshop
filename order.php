<?php
$error = "";
if ($_POST) {
	if (!checkCSRF()) {
		$error = "<p>Invalid CSRF token.</p>\n";
	} elseif (!$_SESSION["basket"]) {
		$error = "<p>Basket is empty.</p>\n";
	} else {
		query("START TRANSACTION");
		
		$products = array();
		foreach (query("SELECT id, amount, price FROM products WHERE id IN (%s) AND visible = 1 LOCK IN SHARE MODE", array_keys($_SESSION["basket"])) as $row) {
			$products[$row["id"]] = $row;
		}
		foreach ($_SESSION["basket"] as $id => $amount) {
			if (!array_key_exists($id, $products) || ($products[$id]["amount"] !== null && $products[$id]["amount"] < $amount)) {
				$error = "<p>Not enough supply.</p>\n";
				break;
			}
		}
		
		if (!$error) {
			query(
				"INSERT INTO orders (name, address, payment_method, variable_number, users_id) VALUES (%s, %s, %s, %s, %s)",
				$_POST["name"],
				$_POST["address"],
				$_POST["payment_method"],
				rand(),
				$_SESSION["userid"]);
			$orders_id = db()->lastInsertId();
			if (!$orders_id) {
				$error = "<p>Unable to save order.</p>";
			}
			
			foreach ($_SESSION["basket"] as $id => $amount) {
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
			
			if (!$error) {
				query("COMMIT");
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

htmlHead("Order");
echo $error;
?>
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="name" maxlength="100" value="<?=h($_POST["name"])?>" size="30">
<tr><th>Address<td><textarea name="address" rows="3" cols="30"><?=h($_POST["address"])?></textarea>
<tr><th>Payment<td><select name="payment_method"><?=optionlist($payment_methods, $_POST["payment_method"])?>
</table>
<p>
<input type="hidden" name="csrf" value="<?=$_SESSION["csrf"]?>">
<input type="submit" value="Order">
</p>
</form>
