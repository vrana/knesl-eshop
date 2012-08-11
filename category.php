<?php
$row = query("SELECT * FROM categories WHERE url = %s", $_GET["url"])->fetch();
if (!$row) {
	pageNotFound();
}

$error = "";
if ($_POST) {
	if (!checkCSRF()) {
		$error = "<p>Invalid CSRF token.</p>\n";
	} else if ($_POST["amount"] <= 0) {
		$error = "<p>Invalid amount.</p>\n";
	} else {
		$amount = query("SELECT amount FROM products WHERE id = %d", $_POST["id"])->fetchColumn();
		if ($amount !== null && $_SESSION["basket"][$_POST["id"]] + $_POST["amount"] > $amount) {
			$error = "<p>Not enough supply.</p>\n";
		} else {
			$_SESSION["basket"][$_POST["id"]] += $_POST["amount"];
			redirect("cat/$row[url]/", "Item inserted to basket.");
		}
	}
}

$products = query("SELECT id, name, about, price FROM products WHERE categories_id = %d AND visible = 1", $row["id"]);

htmlHead($row["name"], $row["url"]);
echo $error;

foreach ($products as $product) {
	echo "<h3>" . h($product["name"]) . "</h3>\n";
	echo "<p>" . h($product["about"]) . "</p>\n";
	?>
<form action="" method="post">
<p>
<b><?=$product["price"]?></b>
<input type="hidden" name="csrf" value="<?=$_SESSION["csrf"]?>">
<input type="hidden" name="id" value="<?=$product["id"]?>">
<input name="amount" value="1" size="3">
<input type="submit" value="Buy">
</p>
</form>
<?php
}
