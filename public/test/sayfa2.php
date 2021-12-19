
<?php
session_start();
?>

<!doctype html>
<html>
<head>
    <title>Session Kullanımı</title>
</head>
<body>

<?php if(isset($_SESSION["eposta"])&&isset($_SESSION["renk"]))
{
    ?>

    E-Posta Adresi: <?php echo $_SESSION['eposta']; ?><br>
    Sevdiğiniz Renk: <?php echo $_SESSION['renk']; }?><br>

<a href="sayfa1.php">1.Sayfaya Git </a>

</body>
</html>