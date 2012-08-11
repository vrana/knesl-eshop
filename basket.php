<?php
$error = "";
if ($_POST) {
	if (!checkCSRF()) {
		$error = "<p>Invalid CSRF token.</p>\n";
	} else {
		unset($_SESSION["basket"]);
		redirect("basket/", "Item removed from basket.");
	}
}

$products = null;
if ($_SESSION["basket"]) {
	$products = query("SELECT id, name FROM products WHERE id IN (%s) AND visible = 1", array_keys($_SESSION["basket"]));
}

htmlHead("Basket");
echo $error;

if (!$products) {
	echo "<p>No products in basket.</p>\n";
} else {
	echo "<table cellspacing='0'>\n";
	echo "<thead><tr><th>Name<th>Amount<th>&nbsp;\n";
	foreach ($products as $row) {
		echo "<tr><th>" . h($row["name"]) . "<td class='number'>" . $_SESSION["basket"][$row["id"]] . "<td>\n";
		?>
<form action="" method="post">
<div>
<input type="hidden" name="csrf" value="<?=$_SESSION["csrf"]?>">
<input type="hidden" name="id" value="<?=$row["id"]?>">
<input type="submit" value="Remove">
</div>
</form>
<?php
	}
	echo "</table>\n";
}
