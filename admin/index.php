<?php
function adminer_object() {
	
	class AdminerEshop extends Adminer {
		
		function name() {
			return 'eShop';
		}
		
		function credentials() {
			return array('localhost', 'web', '');
		}
		
		function database() {
			return 'eshop';
		}
		
		function login($login, $password) {
			return true;
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
