<?php
session_start();

unset($_SESSION['eposta']);
session_destroy();
header("Location: http://127.0.0.1:8000/login.php");
?>

