<?php
function adminer_object() {
	
	class AdminerEshop extends Adminer {
		private $product_ids = array();
		private $database = false;
		
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
			if ($field["field"] == "created_at" && $_GET["edit"]) {
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
		
		function dumpFormat() {
			return array('xml' => 'XML') + parent::dumpFormat();
		}

		function dumpData($table, $style, $query) {
			if ($_POST["format"] != "xml") {
				return parent::dumpData($table, $style, $query);
			}
			if (!$this->database) {
				$this->database = true;
				echo "<database name='" . h(DB) . "'>\n";
				register_shutdown_function(array($this, '_database'));
			}
			$rows = get_rows($query);
			$order_items = array();
			
			if ($table == "orders") {
				$orders_ids = array();
				foreach ($rows as $row) {
					$orders_ids[] = $row["id"];
				}
				if ($orders_ids) {
					$connection = connection();
					$result = $connection->query("
						SELECT order_items.orders_id, products.id, products.name, order_items.amount, order_items.price
						FROM order_items
						INNER JOIN products ON order_items.products_id = products.id
						WHERE order_items.orders_id IN (" . implode(", ", $orders_ids) . ")
					");
					while ($row = $result->fetch_assoc()) {
						$orders_id = $row["orders_id"];
						unset($row["orders_id"]);
						$order_items[$orders_id][] = $row;
					}
				}
			}
			
			foreach ($rows as $row) {
				echo "\t<table name='" . h($table) . "'>\n";
				foreach ($row as $key => $val) {
					echo "\t\t<column name='" . h($key) . "'>" . h($val) . "</column>\n";
				}
				if (array_key_exists($row["id"], $order_items)) {
					foreach ($order_items[$row["id"]] as $item) {
						echo "\t\t<table name='order_items'>\n";
						foreach ($item as $key => $val) {
							echo "\t\t\t<column name='" . h($key) . "'>" . h($val) . "</column>\n";
						}
						echo "\t\t</table>\n";
					}
				}
				echo "\t</table>\n";
			}
		}

		function _database() {
			echo "</database>\n";
		}
		
		function dumpHeaders($identifier, $multi_table = false) {
			if ($_POST["format"] != "xml") {
				return parent::dumpHeaders($identifier, $multi_table);
			}
			header("Content-Type: text/xml; charset=utf-8");
			return "xml";
		}
	}
	
	return new AdminerEshop;
}

include "./editor.php";
