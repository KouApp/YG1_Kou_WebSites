<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Paneli</title>
    <link rel="stylesheet" href="css/userPanel.css">

</head>

<body>


    <a href="logout.php">Cıkıs Yap</a>
    <div class="user-info-container">
        <p id="studentName">
        <h1><?php echo $_SESSION['user_name']; ?>  <?php echo $_SESSION['user_surname']; ?></h1>
        </p>
        <p id="studentNo">
        <h3><b><?php echo $_SESSION['user']; ?></b></h3>
        </p>
    </div>

    <div class="container">
        <div class="user-header">
            GEÇMİŞ BAŞVURULAR
        </div>
        <div class="new-application">
            <a href="userYGB.php" type="button" id="newAppButton">Yeni Başvuru</a>
        </div>
    </div>
</body>

</html>