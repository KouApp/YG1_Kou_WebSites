<?php
session_start();

unset($_SESSION['eposta']);
session_destroy();
header("Location: /login.php");
?>

