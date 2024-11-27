<?php 

session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: login.php");
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);
exit;

?>