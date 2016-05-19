<!DOCTYPE html>
<html>
<head>
    <title>Se Video</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet" type="text/css" />
<!--    <link href="CSS/camera.css" rel="stylesheet" type="text/css"/>-->


<style>
#container {
    margin-left:0px;
    width: 500px;
    height: 375px;
    border: 10px #333 solid;
}
#videoElement {
    width: 500px;
    height: 375px;
    background-color: #666;
}
</style>
</head>
<body onload="array()">

<?php include 'includes/nav.html';?>
<div id="wrapper">
    <?php include 'includes/header.html';?>
        
        
        <h1>
            Array Concat
        </h1>
        <hr>
        <h4 id="t1"></h4>
        <h4 id="t2"></h4>
        <h2 id="demo"></h2>
        <hr>
        
        
        <h1>Rekursion</h1><hr>
        <input type="number" id="input_n">
        <input type="number" id="input_p"> <br><br>
        <input type="button" value="OK" onclick="calculateKNP()">
        <br><br>Result:<br>
        <p id="result"></p>
        <hr>
        
        <h1>API Kamera</h1>
        <div id="container">
            <video id="videoElement" autoplay="true">
     
    </video>
</div>
        
        
    </div>
    
    <script>
    function array()
    {
        var t1 = [3,7,2,11];
        var t2 = [5,7];
        var concat = t1.concat(t2);     // Concatenates (joins) t1 and t2
        document.getElementById("t1").innerHTML = "Array 1:" + " " + t1.valueOf();
        document.getElementById("t2").innerHTML = "Array 2:" + " " + t2.valueOf();
        document.getElementById("demo").innerHTML = "Concat:" + " " + concat.valueOf();
    }
    
    function calculateKNP()
    {
    var input_n = parseFloat(document.getElementById("input_n").value);
    var input_p = parseFloat(document.getElementById("input_p").value);
    var n = factorial(input_n);
    var p = factorial(input_p);
    var nMinusPFactorial = factorial(input_n - input_p);
    
    var result = n / (nMinusPFactorial * p);
    document.getElementById("result").innerHTML = result;

    }
    function factorial(num) {
    if (num < 0) {
        return -1;
    }
    // If the number is 0, its factorial is 1.
    else if (num == 0) {
        return 1;
    }
    // Otherwise, call this recursive procedure again.
    else {
        return (num * factorial(num - 1));
    }
}
//    Camera start
    
    var video = document.querySelector("#videoElement");
 
navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;
 
if (navigator.getUserMedia) {       
    navigator.getUserMedia({video: true}, handleVideo, videoError);
}
 
function handleVideo(stream) {
    video.src = window.URL.createObjectURL(stream);
}
 
function videoError(e) {
  document.write("Your webbrowser doesnt support Camera");
}
//    Camera End
    
    
    
    </script>
    
    
     <footer>
             <?php include'includes/footer.html';?>
        </footer>
</body>
</html>