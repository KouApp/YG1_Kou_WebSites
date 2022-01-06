<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Başvuru Seçim</title>
    <link rel="stylesheet" href="css/appSelect.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <div id="navigation">
        <script src = "menu.js"></script>
    </div>
    <div class="container">
        <div class="appselect-header">
            BAŞVURU TÜRÜ
        </div>
        <div class="appselect-content">
            <input id="dgsButton" type="submit" value="Dikey Geçiş" onclick="location.href='1.html';">
            <input id="ygbButton" type="submit" value="Yatay Geçiş" onclick="location.href='userYGB.php';">
            <input id="yazButton" type="submit" value="Yaz Okulu" onclick="location.href='userYAZ.php';">
            <input id="capButton" type="submit" value="Çift Anadal" onclick="location.href='userCAP.php';">
            <input id="intButton" type="submit" value="İntibak İşlemi" onclick="location.href='intibak.php';">
        </div>
    </div>
</body>

</html>