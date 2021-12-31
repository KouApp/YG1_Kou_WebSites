function addMenu(){
    document.getElementById("navigation").className = "navigation";
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", "menu.html", true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4) {
            var allText = rawFile.responseText;
            document.getElementById("navigation").innerHTML += allText;
        }
    }
    rawFile.send();
}
addMenu();