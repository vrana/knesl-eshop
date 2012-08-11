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
		
	}
	
	return new AdminerEshop;
}

include "./editor.php";
