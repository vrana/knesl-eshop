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

$products = array();
foreach (query("SELECT id, name, about, price FROM products WHERE categories_id = %d AND visible = 1", $row["id"]) as $product) {
	$products[$product["id"]] = $product;
}
$ordered = getOrdered(array_keys($products));

htmlHead($row["name"], $row["url"]);
echo $error;

foreach ($products as $id => $product) {
	echo "<h3>" . h($product["name"]) . "</h3>\n";
	echo "<p>" . h($product["about"]) . "</p>\n";
	?>
<form action="" method="post" onsubmit="return !buySubmit('<?=href('buy/')?>', this);">
<p>
<b><?=$product["price"]?></b>
<input type="hidden" name="csrf" value="<?=$_SESSION["csrf"]?>">
<input type="hidden" name="id" value="<?=$id?>">
<input name="amount" value="1" size="3">
<input type="submit" name="button" value="Buy">
Already ordered: <span id="ordered-<?=$id?>"><?=($ordered[$id] ? $ordered[$id] : "0")?></span>
</p>
</form>
<?php
}

if ($products) {
	?>
	<script type="text/javascript">
	loadOrdered('<?=href("ordered/")?>?ids=<?=implode("-", array_keys($products))?>');
	</script>
<?php
}
