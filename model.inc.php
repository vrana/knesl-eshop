<?php

/**
* @param array ($id => array("amount" => $amount, "visible" => $visible))
* @param array ($id => $amount)
* @return string error
*/
function validateOrder($products, $basket) {
	foreach ($basket as $id => $amount) {
		if (!array_key_exists($id, $products) || ($products[$id]["amount"] !== null && $products[$id]["amount"] < $amount)) {
			return "Not enough supply.";
		}
		if (!$products[$id]["visible"]) {
			return "Product is not visible.";
		}
	}
}
