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
			return parent::fieldName($field, $order);
		}
		
		function editVal($val, $field) {
			if ($field["field"] == "password") {
				return "";
			}
			return parent::editVal($val, $field);
		}
		
	}
	
	return new AdminerEshop;
}

include "./editor.php";
