--TEST--
Validate order
--FILE--
<?php
include dirname(__FILE__) . "/../model.inc.php";

$products = array(
	1 => array("amount" => 10, "visible" => 1),
	2 => array("amount" => 10, "visible" => 0),
);

var_dump(!validateOrder($products, array(1 => 2)));
var_dump(!validateOrder($products, array(2 => 2)));
var_dump(!validateOrder($products, array(1 => 20)));
var_dump(!validateOrder($products, array(2 => 20)));
?>
--EXPECTF--
bool(true)
bool(false)
bool(false)
bool(false)
