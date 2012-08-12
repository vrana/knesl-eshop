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
		if ($val === null) {
			$args[$key] = 'NULL';
		} elseif (is_array($val)) {
			$args[$key] = implode(", ", array_map(array($db, 'quote'), $val));
		} elseif (!is_int($val) && !ctype_digit($val)) {
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

function redirect($path, $message = "") {
	if ($message) {
		$_SESSION["messages"][] = $message;
	}
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

function optionlist($options, $selected = null) {
	foreach ($options as $key => $val) {
		$attrs = ($key === $selected ? " selected" : "");
		echo "<option value='" . h($key) . "'$attrs>" . h($val) . "\n";
	}
}

include "./html.inc.php";

/** @return string error */
function buyProduct() {
	if (!checkCSRF()) {
		return "Invalid CSRF token.";
	} else if ($_POST["amount"] <= 0) {
		return "Invalid amount.";
	}
	$amount = query("SELECT amount FROM products WHERE id = %d AND visible = 1", $_POST["id"])->fetchColumn();
	if ($amount !== null && $_SESSION["basket"][$_POST["id"]] + $_POST["amount"] > $amount) {
		return "Not enough supply.";
	}
	$_SESSION["basket"][$_POST["id"]] += $_POST["amount"];
}

function getOrdered(array $products_ids) {
	if (!$products_ids) {
		return array();
	}
	return query("SELECT products_id, SUM(amount) FROM order_items WHERE products_id IN (%s) GROUP BY products_id", $products_ids)->fetchAll(PDO::FETCH_KEY_PAIR);
}

include "./constants.inc.php";
