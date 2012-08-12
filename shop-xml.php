<?php
$categories = array();
foreach (query("SELECT * FROM categories") as $row) {
	$categories[$row["id"]] = $row;
}

header("Content-Type: text/xml; charset=utf-8");
echo "<SHOP>\n";
foreach (query("SELECT * FROM products WHERE visible = 1 AND price IS NOT NULL") as $row) {
	echo "<SHOPITEM>\n";
	echo "<PRODUCT>" . h($row["name"]) . "</PRODUCT>";
	echo "<DESCRIPTION>" . h($row["about"]) . "</DESCRIPTION>";
	echo "<URL>" . href('cat/' . $categories[$row["categories_id"]]["url"] . "/#product-$row[id]") . "</URL>";
	echo "<DELIVERY_DATE>" . href($row["delivery_date"]) . "</DELIVERY_DATE>";
	echo "<PRICE_VAT>$row[price]</PRICE_VAT>";
	echo "<CATEGORYTEXT>" . h($categories[$row["categories_id"]]["name"]) . "</CATEGORYTEXT>";
	echo "</SHOPITEM>\n";
}
echo "</SHOP>\n";
