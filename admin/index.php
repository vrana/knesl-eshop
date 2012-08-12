<?php
function adminer_object() {
	
	class AdminerEshop extends Adminer {
		
		function name() {
			return '<a href=".." id="h1">eShop</a>';
		}
		
		function credentials() {
			return array('localhost', 'web', '');
		}
		
		function database() {
			return 'eshop';
		}
		
		function login($login, $password) {
			$connection = connection();
			return (bool) $connection->result("SELECT COUNT(*) FROM " . idf_escape($this->database()) . ".users WHERE username = " . q($login) . " AND password = SHA1(CONCAT(" . q($password) . ", salt)) AND admin = 1");
		}
		
		function fieldName($field, $order = 0) {
			if ($field["field"] == "salt") {
				return "";
			}
			if ($field["field"] == "password" && $order) {
				return "";
			}
			if ($field["field"] == "created_at" && !$order) {
				return "";
			}
			$return = parent::fieldName($field, $order);
			if ($_GET["select"] == "products" && $field["field"] == "amount" && $order) {
				return "$return<th>ordered";
			}
			return $return;
		}
		
		function editVal($val, $field) {
			if ($field["field"] == "password") {
				return "";
			}
			return parent::editVal($val, $field);
		}
		
		function rowDescriptions($rows, $foreignKeys) {
			$return = parent::rowDescriptions($rows, $foreignKeys);
			if ($_GET["select"] == "products" && $rows) {
				$ordered = array();
				foreach ($rows as $row) {
					$ordered[$row["id"]] = "0";
				}
				$ordered = get_key_vals("SELECT products_id, SUM(amount) FROM order_items WHERE products_id IN (" . implode(", ", array_keys($ordered)) . ")") + $ordered;
				foreach ($return as $key => $row) {
					$return[$key]["amount"] = "$row[amount]<td id='ordered-$row[id]'>" . $ordered[$row["id"]];
				}
			}
			return $return;
		}
		
		function selectVal($val, $link, $field) {
			if ($_GET["select"] == "products" && $field["field"] == "amount") {
				return html_entity_decode($val, ENT_QUOTES);
			}
			return parent::selectVal($val, $link, $field);
		}
		
	}
	
	return new AdminerEshop;
}

include "./editor.php";
