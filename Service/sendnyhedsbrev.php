<?php //


$db = mysqli_connect("mysql42.unoeuro.com", 
        "neutral_re_dk0", "bismillah", "neutral_rengoering_dk0_db")
        or die("Der skete en fejl");

$query = "SELECT * FROM mail";

$result = mysqli_query($db, $query);

while($row = myqli_fetch_array($result)){
    $name = $row['name'];
    $mobil = $row['mobil'];
    $mail = $row['mail'];
    
    $msg = "Hello World!";
    mail($mail, "phpemail", $msg, "julemanden.dk");
}


if($result){
    echo "Mailen er sendt!";
}

mysqli_close($db);