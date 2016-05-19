<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Opsparing til en ny bil</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css"/>
        <script src="JS/opsparing.js" type="text/javascript"></script>

          
         
        <script>
             window.addEventListener("load", start, false);
        </script>
         
      
    </head>
    <body>
    <?php include 'includes/nav.html';?>
    <div id="wrapper">
        <?php include 'includes/header.html';?>
         <h1>Lommeregner</h1>
         <form>
             <input type="text" name="num1" placeholder="Nummer 1"><br>
             <input type="text" name="num2" placeholder="Nummer 2"><br>
             <select name="operator">
                 <option>Plus</option>
                 <option>Minus</option>
                 <option>Gange</option>
                 <option>Dividere</option>
             </select><br><br>
             <input type="submit" name="submit" value="Udregn" class="btn">
             
           
             
         </form>
         <p>Resultat:</p>
           <hr>
         <?php
            if (isset($_GET['submit'])) {
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $operator = $_GET['operator'];
                $result = 0;
               
                switch ($operator)
                {
                    case "Plus": 
                    $result = $num1 + $num2;
                    echo "<h3><strong>$result</strong></h3>";
                    break;;
                        
                    case "Minus": 
                    echo $num1 - $num2;
                        break;
                    
                    case "Gange": 
                    echo $num1 * $num2;
                        break;
                    
                    case "Dividere": 
                    echo $num1 / $num2;
                        break;
                }
                
            }
         ?>
         
         <h2>Opsparing</h2>
         
         <div id="divOpsparing">
              <form action = "#">
             
                Start Kapital:<br>
                 <input type="text" id="start">
                     <br>
                 Rente:<br>
                 <input type="text" id="rente">
                  <br>
                År:<br>
                 <input type="text" id="aar">
                  <br>
                <br>
                <input id="beregn" type="button" value="Beregn" class="btn">
          
      </form>
         </div>
          

         <div id="divTabel">
              <table id="table">
                <th>År</th>
                 <th>Opsparet</th>
             </table>
         </div>
        
   
         
     </div>
        <footer>
                <?php include'includes/footer.html';?>
            </footer>
       
    </body>
</html>
