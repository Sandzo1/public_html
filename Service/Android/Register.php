<?php 
$con = mysqli_connect("mysql42.unoeuro.com", 
        "neutral_re_dk0", "bismillah", "neutral_rengoering_dk0_db")
        or die("Der skete en fejl");
$navn = $_POST("navn");
$alder = $_POST("alder");
$brugernavn = $_POST("brugernavn");
$adgangskode = $_POST("adgangskode");


$query = mysqli_prepare($con, "INSERT INTO Bruger(navn,alder,brugernavn,adgangskode)VALUES(?,?,?,?)");
mysqli_stmt_bind_param($query, "siss",$navn,$alder,$brugernavn,$adgangskode );
mysqli_stmt_execute($query);
mysqli_stmt_close($con);
?>
