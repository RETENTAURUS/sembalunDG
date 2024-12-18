<?php
session_start();

// Destroy all session data
$_SESSION = array();
session_destroy();

// Unset the login cookies
if (isset($_COOKIE["cookie_username"]) && isset($_COOKIE["cookie_password"])) {
    setcookie("cookie_username", "", time() - 3600, "/");
    setcookie("cookie_password", "", time() - 3600, "/");
}

// Redirect to login page
header("Location: index.php");
exit();
?>
