<?php
function selam_ver($deg) {
    return $deg;
}
?>
<html>

<head>
    <title>
        How to change the text of
        a label using JavaScript ?
    </title>
</head>

<body style="text-align:center;">

<h1 style="color:green;">
    GeeksforGeeks
</h1>

<h4>
    Click on the button to change
    the text of a label
</h4>

<label id = "GFG">
    Welcome to GeeksforGeeks
</label>

<br>

<button onclick="myGeeks()">
    Click Here!
</button>

<script>
    function myGeeks() {
        document.getElementById('GFG').innerHTML
            = <?php echo selam_ver("awd") ?>;
    }
</script>
</body>

</html>