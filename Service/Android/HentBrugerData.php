<?php
$con = mysqli_connect("mysql42.unoeuro.com", 
        "neutral_re_dk0", "bismillah", "neutral_rengoering_dk0_db")
        or die("Der skete en fejl");

$brugernavn = $_POST("brugernavn");
$adgangskode = $_POST("adgangskode");
$query = mysqli_prepare($con, "SELECT * FROM Bruger WHERE brugernavn = ? AND adgangskode = ?");
mysqli_stmt_bind_param("ss", $brugernavn, $adgangskode);
mysqli_stmt_execute($query);

mysqli_stmt_store_result($query);
mysqli_stmt_bind_result($query, $bruger_ID,$navn,$alder,$brugernavn,$adgangskode);

$bruger = array();
while (mysqli_stmt_fetch($query)){
    $bruger[navn] = $navn;
    $bruger[alder] = $alder;
    $bruger[brugernavn] = $brugernavn;
    $bruger[adgangskode] = $adgangskode;
}
echo json_encode($bruger);
mysqli_stmt_close($query);
mysqli_close($con);
?>

