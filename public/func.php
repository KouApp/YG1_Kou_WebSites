<?php
session_start();
?>


<html>

<body>
<h1 id="header"></h1>


<?php
$_SESSION['yenselect']=$_POST['select'];
$_SESSION['ogrno']=$_POST['ogrno'];
echo $_SESSION['yenselect'];
echo $_SESSION['ogrno'];
?>

</body>


</html>
