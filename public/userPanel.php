<?php
session_start();
?>
<?php $session_value = (isset($_SESSION['user_name'])) ? $_SESSION['user_name'] : ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Paneli</title>
    <link rel="stylesheet" href="css/userPanel.css">
    <link rel="stylesheet" href="css/yasin.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <div id="navigation">
        <script src = "menu.js"></script>
    </div>

    <?php
    if (strlen($_SESSION['user']) == 0) {
        header("Location: /login.php");
    }
    ?>

    <div class="user-info-container">
        <div class="user-info-img">
            <img src="data:image/png;base64,<?php echo $_SESSION['user_profilebase64']; ?>" alt="Red dot" />
        </div>
        <div class="user-info-text">
            <p id="studentName">
            <h1><?php echo $_SESSION['user_name']; ?> <?php echo $_SESSION['user_surname']; ?></h1>
            </p>
            <p id="studentNo">
            <h3><b><?php echo $_SESSION['user']; ?></b></h3>
            </p>
            <a href="logout.php">Çıkış Yap</a>
        </div>
    </div>

    <div class="container">
        <div class="user-header">
            GEÇMİŞ BAŞVURULAR
        </div>
        <div class="new-application">
            <a href="appSelect.php" type="button" id="newAppButton">Yeni Başvuru</a>
        </div>
    </div>
</body>

</html>