<?php

function htmlHead($title) {
	$categories = array();
	foreach (query("SELECT * FROM categories") as $row) {
		$categories[$row["category_id"]][] = $row;
	}
	
	?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=h($title)?></title>
<link rel="stylesheet" type="text/css" href="<?=h(rsrc('default.css'))?>">
<script type="text/javascript" src="<?=h(rsrc('functions.js'))?>"></script>
<body>

<? if (!isset($_SESSION["username"])) { ?>
	<form action="<?=href('login/')?>" method="post">
	<p>
	<input name="username" value="<?=h($_POST["username"])?>">
	<input type="password" name="password">
	<input type="submit" value="Login">
	</p>
	</form>
<? } else { ?>
	<form action="<?=href('logout/')?>" method="post">
	<p>
	Username: <b><?=h($_SESSION["username"])?></b>
	<input type="submit" value="Logout">
	</p>
	</form>
<? } ?>

<h1><?=h($title)?></h1>

<?php
	printCategories($categories);
}

function printCategories($categories, $key = "") {
	if (!isset($categories[$key])) {
		return;
	}
	echo "<ul>\n";
	foreach ($categories[$key] as $row) {
		$attrs = ($_GET["url"] == $row["url"] ? " class='active-category'" : "");
		echo "<li><a href='" . href("cat/$row[url]/") . "'$attrs>" . h($row["name"]) . "</a>\n";
		printCategories($categories, $row["id"]);
	}
	echo "</ul>\n";
}