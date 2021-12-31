<script>
    function FillSelectBox (elementName) {
        var select = document.getElementById(elementName);
        var obj = <?php echo $_SESSION['tempData']; ?>;
        obj = JSON.parse(obj);
        for (var i=0; i < obj.States.length; i++) {
            var option = document.createElement("option");
            option.id = i;
            option.value = obj[i].value;
            select.appendChild(option);
        }
    };
</script>
