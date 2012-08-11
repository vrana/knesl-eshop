<?php
$products = query("SELECT id, id FROM products WHERE id IN (%s) AND visible = 1", explode("-", $_GET["ids"]))->fetchAll(PDO::FETCH_KEY_PAIR);
echo json_encode(getOrdered($products));
