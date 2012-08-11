<?php
$row = query("SELECT COUNT(*) FROM users WHERE username = %s AND password = SHA1(CONCAT(%s, salt))", $_POST["username"], $_POST["password"])->fetchColumn();
if ($row) {
	$_SESSION["username"] = $_POST["username"];
	redirect('');
}

htmlHead("Login");
echo "<p>Invalid username or password.</p>\n";
