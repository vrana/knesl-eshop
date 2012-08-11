<?php
$row = query("SELECT * FROM categories WHERE url = %s", $_GET["url"])->fetch();
if (!$row) {
	pageNotFound();
}

htmlHead($row["name"]);
