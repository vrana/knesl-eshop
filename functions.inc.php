<?php

/** @return PDO */
function db() {
	static $db;
	if (!$db) {
		try {
			$db = new PDO("mysql:dbname=eshop", "web", "", array(
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8",
			));
		} catch (Exception $ex) {
			header("HTTP/1.1 503 Service Unavailable");
			htmlHead("Unable to connect to database");
			exit;
		}
	}
	return $db;
}

/**
* @param string passed to sprintf()
* @param ... arguments will be quoted
* @return PDOStatement
*/
function query($sql /*, ... */) {
	$args = func_get_args();
	array_shift($args);
	foreach ($args as $key => $val) {
		if (is_array($val)) {
			$args[$key] = array_map(array(db(), 'quote'), $args);
		} elseif (!ctype_digit($val)) {
			$args[$key] = db()->quote($val);
		}
	}
	$sql = vsprintf($sql, $args);
	return db()->query($sql);
}

function pageNotFound() {
	header("HTTP/1.1 404 Not Found");
	htmlHead("Page Not Found");
}

function redirect($path) {
	header("Location: " . href($path));
	exit;
}

function href($path) {
	return substr(dirname(".$_SERVER[PHP_SELF]"), 1) . "/$path";
}

function rsrc($file) {
	return href("static/$file");
}

function htmlHead($title) {
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
	<p>Username: <b><?=h($_SESSION["username"])?></b></p>
<? } ?>

<h1><?=h($title)?></h1>

<?php
}

/** htmlspecialchars($s, ENT_QUOTES) */
function h($s) {
	return htmlspecialchars($s, ENT_QUOTES);
}
