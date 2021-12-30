<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yatay Geçiş Başvurusu</title>
    <link rel="stylesheet" href="css/userYGB.css">
</head>

<body>

<a href="logout.php">Cıkıs Yap</a>

<form action="denemevar.php" method="post">
<div class="container">
    <div class="ygb-header">
        YATAY GEÇİŞ BAŞVURUSU
    </div>
    <div class="row">
        <p>Başvuru Türü:</p>
        <input type="hidden" name="action" value="contact_agent">
        <select name="select" id="select" onChange="myNewFunction(this);">
            <option selected disabled>Seçim Yapınız</option>
            <option value="1">Eğitim Fakültesi</option>
            <option value="2">Fen Edebiyat Fakültesi</option>
            <option value="3">İktisadi ve İdari Bilimler Fakültesi</option>
            <option value="4">İletişim Fakültesi</option>
            <option value="5">Mühendislik Fakültesi</option>
        </select>
    </div>
    <div class="row">
        <p>okul:</p>
        <select name="select2" id="select2" onChange="myNewFunction2(this);">
        </select>
    </div>
    <div class="row">
        <p>okul:</p>
        <select name="select3" id="select3">
        </select>
    </div>
    <script type="text/javascript">
        function myNewFunction(sel) {

            addOpt(sel.options[sel.selectedIndex].text);

        }
        function addOpt(deg)
        {
            removeOptions(document.getElementById('select2'));
            for (var i=0; i < 5; i++) {
                var opt = document.createElement("option");
                document.getElementById("select2").options.add(opt);
                opt.text = deg +i;
                opt.value = deg +i;
            }

        }
        function myNewFunction2(sel) {

            addOpt2(sel.options[sel.selectedIndex].text);

        }
        function addOpt2(deg)
        {
            removeOptions(document.getElementById('select3'));
            for (var i=0; i < 5; i++) {
                var opt = document.createElement("option");
                document.getElementById("select3").options.add(opt);
                opt.text = deg;
                opt.value = deg;
            }

        }

        function removeOptions(selectElement) {
            var i, L = selectElement.options.length - 1;
            for(i = L; i >= 0; i--) {
                selectElement.remove(i);
            }
        }
        function removeOpt()
        {
            var silSelect=document.getElementById("select");
            silSelect.remove(silSelect.selectedIndex);
        }
        function optNumber()
        {
            alert(document.getElementById("konular").options.length);
        }
    </script>
    <input id="loginButton" type="submit" value="Giriş Yap">
</form>
</div>

</body>

</html>