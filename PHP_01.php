<!DOCTYPE html>

 <html>
 <head>
 <meta charset = "utf-8">
 <title>Gange tabellen</title>


 </head>
 <body>
     <?php
      
     for($col=1; $col<10; $col++)
        {
         for($row=1; $row<10; $row++)
         {
          echo '  ';
          echo '<-'.$row*$col.'->';
         }
          echo '<hr>';
        }
        
        function foo(&$a,&$b)
        {
            $result = ($a+$b) / 2;
            echo $result;
        }
        $a = 50;
        $b = 10;
        foo($a,$b);

       
        
     ?>
     <br>
     <input type="number" id="n1" >
            
            
 </body>
 </html>