<?php
$row = query("SELECT id FROM users WHERE username = %s AND password = SHA1(CONCAT(%s, salt))", $_POST["username"], $_POST["password"])->fetchColumn();
if ($row) {
	session_regenerate_id();
	$_SESSION["userid"] = $row["id"];
	$_SESSION["username"] = $_POST["username"];
	redirect('');
}

htmlHead("Login");
echo "<p>Invalid username or password.</p>\n";
