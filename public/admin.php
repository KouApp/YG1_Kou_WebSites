<?php
session_start();


$users = json_decode($_SESSION['temp']);
$tcno = "TC no";
$dosyaadi = "Dosya ismi";

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
</head>

<body>

    <?php
    if (strlen($_SESSION['user']) == 0) {
        header("Location: /login.php");
    }
    ?>

    <div class="user-info-container">

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
            ADMİN SAYFASI
        </div>
        <form action="GETadmin2.php" method="post" enctype="multipart/form-data">
        <a>Başvuru türü : </a>
        <select name="select2" id="select2">
            <option selected disabled>Seçim Yapınız</option>
            <option value="cap">cap</option>
            <option value="intibak">İntibak</option>

        </select>
            <input type="submit" value="SECİN">
        </form>
        <form action="GETadmin.php" method="post" enctype="multipart/form-data">

                <a>TC No:</a>
                <input type="text" name="tc" placeholder="Öğrenci No"><br>

            <input type="submit" value="ONAYLA">
        </form>
        <table>
            <tbody>
            <tr>
                <th>TC no</th>
                <th>Durum</th>
                <th>Dosya adi</th>
            </tr>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td> <?= $user->$tcno; ?> </td>
                    <td> <?= $user->Kontrol; ?> </td>
                    <td> <?= $user->$dosyaadi; ?> </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>