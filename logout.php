<?php
if (checkCSRF()) {
	unset($_SESSION["username"]);
	redirect('');
}

htmlHead("Logout");
echo "<p>Invalid CSRF token.</p>\n";
