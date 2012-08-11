<?php
$row = query("SELECT * FROM categories WHERE url = %s", $_GET["url"])->fetch();
if (!$row) {
	pageNotFound();
}
$products = query("SELECT id, name, about, price FROM products WHERE categories_id = %d AND visible = 1", $row["id"]);

htmlHead($row["name"]);
foreach ($products as $product) {
	echo "<h3>" . h($product["name"]) . "</h3>\n";
	echo "<p>" . h($product["about"]) . "</p>\n";
	if ($product["price"] !== null) {
		echo "<p><b>$product[price]</b></p>\n";
	}
}
