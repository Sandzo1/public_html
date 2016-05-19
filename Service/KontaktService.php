<?php
$name = $_GET['navn'];
$email = $_GET['email'];
$mobil = $_GET['mobil'];


$db = mysqli_connect("mysql42.unoeuro.com", 
        "neutral_re_dk0", "bismillah", "neutral_rengoering_dk0_db")
        or die("Der skete en fejl");

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } 
    $query = "INSERT INTO mail(navn, mobil, email)
    VALUES ('$name', '$mobil', '$email')";

    $result = mysqli_query($db, $query);

if($result) {
    echo "Tak for interessen $name du vil nu blive kontaktet af en af vores medarbejdere paa $email eller $mobil";
}

mysqli_set_charset($db,"utf8"); 
mysqli_close($db);     
?>