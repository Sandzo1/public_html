
       function start() {
    var button = document.getElementById("beregn");
    button.addEventListener("click", calculate, false);
}

function calculate() {
    var startKapital = parseFloat(document.getElementById("start").value);
    var rente = parseFloat(document.getElementById("rente").value);
    var year = parseFloat(document.getElementById("aar").value);

    var total = startKapital;

    var table = document.getElementById("table");


    for (var i = 0; i < year; i++) {
        var renteTotal = total * rente;
        total = total + renteTotal;
        var row = table.insertRow(i);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);

        var udskrivAar = i + 1;

        cell1.innerHTML = udskrivAar.toString();
        cell2.innerHTML = Math.round(total).toString();
//        "<br>"
    }
}