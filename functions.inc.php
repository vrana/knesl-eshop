<?php

/** @return PDO */
function db() {
	static $db;
	if ($db === null) {
		try {
			$db = new PDO("mysql:dbname=eshop", "web", "", array(
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8",
			));
		} catch (Exception $ex) {
			$db = false;
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
	$db = db();
	if (!$db) {
		return array();
	}
	$args = func_get_args();
	array_shift($args);
	foreach ($args as $key => $val) {
		if (is_array($val)) {
			$args[$key] = implode(", ", array_map(array($db, 'quote'), $args));
		} elseif (!ctype_digit($val)) {
			$args[$key] = $db->quote($val);
		}
	}
	$sql = vsprintf($sql, $args);
	return $db->query($sql);
}

function pageNotFound() {
	header("HTTP/1.1 404 Not Found");
	htmlHead("Page Not Found");
	exit;
}

function redirect($path) {
	header("Location: " . href($path));
	exit;
}

function checkCSRF() {
	if ($_POST["csrf"] !== $_SESSION["csrf"]) {
		return false;
	}
	return true;
}

function href($path) {
	return substr(dirname(".$_SERVER[PHP_SELF]"), 1) . "/$path";
}

function rsrc($file) {
	return href("static/$file");
}

/** htmlspecialchars($s, ENT_QUOTES) */
function h($s) {
	return htmlspecialchars($s, ENT_QUOTES);
}

include "./html.inc.php";
