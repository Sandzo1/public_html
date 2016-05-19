<?php

$email = $_GET['email'];

$db = mysqli_connect("mysql42.unoeuro.com", 
        "neutral_re_dk0", "bismillah", "neutral_rengoering_dk0_db")
        or die("Der skete en fejl");

        $query = "INSERT INTO Nyheder(email)
        VALUES ('$email')";

$result = mysqli_query($db, $query);

if($result) {
    
    print "Du vil nu modtage vores nyhedsbreve";
}
mysqli_close($db);     
?>
