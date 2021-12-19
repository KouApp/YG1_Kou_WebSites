<?php
session_start();

unset($_SESSION['eposta']);
session_destroy();

?>

<a href="login.php">Login Sayfaya Git </a>