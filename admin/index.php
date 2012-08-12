<?php
function adminer_object() {
	
	class AdminerEshop extends Adminer {
		var $product_ids = array();
		
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
			$db = idf_escape($this->database());
			$connection = connection();
			if (!$connection->result("SELECT COUNT(*) FROM $db.users WHERE username = " . q($login) . " AND password = SHA1(CONCAT(" . q($password) . ", salt)) AND admin = 1")) {
				return false;
			}
			if (preg_match('~^(\d+-)+$~', "$_GET[ordered]-")) {
				echo json_encode(get_key_vals("SELECT CONCAT('ordered-', products_id), SUM(amount) FROM $db.order_items WHERE products_id IN (" . str_replace("-", ",", $_GET["ordered"]) . ") GROUP BY products_id"));
				exit;
			}
			return true;
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
					$this->product_ids[] = $row["id"];
					$ordered[$row["id"]] = "0";
				}
				$ordered = get_key_vals("SELECT products_id, SUM(amount) FROM order_items WHERE products_id IN (" . implode(", ", array_keys($ordered)) . ") GROUP BY products_id") + $ordered;
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
		
		function navigation($missing) {
			if ($this->product_ids) {
				?>
<script type="text/javascript">
setInterval(function () {
	ajaxSetHtml('<?=js_escape(ME)?>ordered=<?=implode("-", $this->product_ids)?>');
}, 10000);
</script>
<?php
			}
			parent::navigation($missing);
		}
		
	}
	
	return new AdminerEshop;
}

include "./editor.php";
