<?php
$error = "";
if ($_POST) {
	if ($_POST["password"] == "") {
		$error .= "<p>Passwords is empty.</p>\n";
	}
	if ($_POST["password"] != $_POST["password2"]) {
		$error .= "<p>Passwords don't match.</p>\n";
	}
	if ($_POST["captcha"] != "2") {
		$error .= "<p>Invalid CAPTCH.</p>\n";
	}
	if (!$error) {
		$ok = query("INSERT INTO users (username, password) VALUES (%s, %s)", $_POST["username"], $_POST["password"]);
		if (!$ok) {
			$error = "<p>Username already taken.</p>\n";
		} else {
			redirect('', "Registration successful.");
		}
	}
}

htmlHead("Registration");
echo $error;
?>
<form action="" method="post">
<table cellspacing="0">
<tr><th>Username<td><input name="username" maxlength="200" value="<?=h($_POST["username"])?>">
<tr><th>Password<td><input type="password" name="password" value="<?=h($_POST["password"])?>">
<tr><th>Confirm password<td><input type="password" name="password2" value="<?=h($_POST["password2"])?>">
<tr><th>1 + 1<td><input name="captcha" value="<?=h($_POST["captcha"])?>">
</table>
<p><input type="submit" value="Register"></p>
</form>
