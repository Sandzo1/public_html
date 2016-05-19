<!DOCTYPE html>

<html>
    <head>
        <title>Kontakt</title>
        <meta charset="UTF-8">
        <link href="CSS/style.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
       
        <style>
            #contactImg{
                margin-left: 33%;
                margin-top: -10%;
                max-width: 100%;
               
            }
           fieldset { 
               border:3px solid sienna ;
               max-width: 100%;
               height: 50%;
           }
             label{
            float: left;
            width: 120px;
        }

legend {
  padding: 0.2em 0.5em;
  border:2px solid sienna;
  color:sienna;
  font-size:100%;
/*  text-align:right;*/
  }
  
   input[type="submit"]{
            margin-left: 15%;
        }
        </style>
    </head>
    
    
    <body onload="getLocation()">
    <?php include 'includes/nav.html';?>
    <div id="wrapper">
        <?php include 'includes/header.html';?>

        <form action="/Service/KontaktService.php" method="post" accept-charset="UTF-8">
    <fieldset>
    <legend>Udfyld nedstående felter så kontakter vi dig</legend>
    
    <label for="navn">Navn:</label>
    <input type="text" name="navn" id="navn" autofocus="">
    <br>
    <label for="email">E-Mail:</label>
    <input type="email" name="email" id="email" placeholder="email@email.dk" required="" >
    <br>
    <label for="number">Mobil:</label>
    <input type="number" name="mobil" id="number">
        <br>
   
    <input type="submit" value="Kontakt mig" class="btn" style="margin-left:30%;">
    
    </fieldset>
        </form>
            
            
            <br><br>
            
    <fieldset>
    <legend>Ellers kom forbi, og se vores udvalg af biler på nedstående kort</legend>        
<div id="mapholder"></div>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    </fieldset>
            <br>   
       
<!--           Location End-->
        
            </div>
        <footer>
             <?php include'includes/footer.html';?>
        </footer>
        
         <script src="JS/geoLocation.js" type="text/javascript"></script>
    </body>
</html>
