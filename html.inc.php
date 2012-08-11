<?php

function htmlHead($title, $active_url = "") {
	if (!array_key_exists("csrf", $_SESSION)) {
		$_SESSION["csrf"] = md5(uniqid(rand(), true));
	}
	
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
	<input type="hidden" name="csrf" value="<?=$_SESSION["csrf"]?>">
	Username: <b><?=h($_SESSION["username"])?></b>
	<input type="submit" value="Logout">
	</p>
	</form>
<? } ?>

<h1><?=h($title)?></h1>

<?php
	if (array_key_exists("messages", $_SESSION)) {
		foreach ($_SESSION["messages"] as $message) {
			echo "<p>" . h($message) . "</p>\n";
		}
		$_SESSION["messages"] = array();
	}
	printCategories($categories, $active_url);
}

function printCategories($categories, $active_url, $key = "") {
	if (!array_key_exists($key, $categories)) {
		return;
	}
	echo "<ul>\n";
	foreach ($categories[$key] as $row) {
		$attrs = ($active_url == $row["url"] ? " class='active-category'" : "");
		echo "<li><a href='" . href("cat/$row[url]/") . "'$attrs>" . h($row["name"]) . "</a>\n";
		printCategories($categories, $active_url, $row["id"]);
	}
	echo "</ul>\n";
}
