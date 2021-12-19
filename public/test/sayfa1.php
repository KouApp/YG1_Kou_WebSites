<?php
session_start();
?>

<!doctype html>
<html>
<head>
    <title>Session Kullanımı</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    E-Posta Adresi :<input type="text" name="eposta">
    Sevdiğiniz Renk:<input type="text" name="renk">
    <input type="submit" name="submit" value="Submit">
</form>

<br>
<a href="sayfa2.php">2.Sayfaya Git </a><br>
<a href="sayfa3.php">3.Sayfaya Git </a>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['eposta']=$_POST['eposta'];

    $_SESSION['renk']=$_POST['renk'];

}
?>
</body>
</html>