<?php

function htmlHead($title) {
	?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=h($title)?></title>
<link rel="stylesheet" type="text/css" href="<?=h(rsrc('default.css'))?>">
<script type="text/javascript" src="<?=h(rsrc('functions.js'))?>"></script>
<body>

<? if (!isset($_SESSION["username"])) { ?>
	<form action="<?=href('login/')?>" method="post">
	<p>
	<input name="username" value="<?=h($_POST["username"])?>">
	<input type="password" name="password">
	<input type="submit" value="Login">
	</p>
	</form>
<? } else { ?>
	<form action="<?=href('logout/')?>" method="post">
	<p>
	Username: <b><?=h($_SESSION["username"])?></b>
	<input type="submit" value="Logout">
	</p>
	</form>
<? } ?>

<h1><?=h($title)?></h1>

<?php
}
