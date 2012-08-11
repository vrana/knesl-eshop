<?php
$row = query("SELECT * FROM categories WHERE url = %s", $_GET["url"])->fetch();
if (!$row) {
	pageNotFound();
}

$error = "";
if ($_POST) {
	$error = buyProduct();
	if (!$error) {
		redirect("cat/$row[url]/", "Item inserted to <a href='" . href('basket/') . "'>basket</a>.");
	}
}

$products = query("SELECT id, name, about, price FROM products WHERE categories_id = %d AND visible = 1", $row["id"]);

htmlHead($row["name"], $row["url"]);
echo $error;

foreach ($products as $product) {
	echo "<h3>" . h($product["name"]) . "</h3>\n";
	echo "<p>" . h($product["about"]) . "</p>\n";
	?>
<form action="" method="post" onsubmit="return !buySubmit('<?=href('buy/')?>', this);">
<p>
<b><?=$product["price"]?></b>
<input type="hidden" name="csrf" value="<?=$_SESSION["csrf"]?>">
<input type="hidden" name="id" value="<?=$product["id"]?>">
<input name="amount" value="1" size="3">
<input type="submit" name="button" value="Buy">
</p>
</form>
<?php
}
