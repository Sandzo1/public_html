<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>PingPong</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css"/>
     
    </head>
    <body>
    <?php include 'includes/nav.html';?>
     <div id="wrapper">
         <?php include 'includes/header.html';?>

         <canvas id="myCanvas" width="200" height="300"  tabindex="0" style="border:1px solid #d3d3d3;">
             
         </canvas>
<!--            <button onclick="clearInterval(myVar)">Stop time</button>-->

<script>
   var myVar = setInterval(drawPaddles ,30);
   var firkanter = [] ;
   var collors = ["red","green"];
   var paddle1 = {x: 60, y:5};
   var paddle2 = {x: 60, y:280};
   var ball = {x: 100, y:150, direction:"down"};
   
//   for(i= 0; i< 2; i++) 
//   {
//      firkanter[i] = firkant= {x: i*10,y: i*10 ,navn:"fk"+i*10};
//   }

   var c = document.getElementById("myCanvas");
   c.addEventListener('keydown', doKeyDown1, true);
   c.addEventListener('keydown', doKeyDown2, true);
   var ctx = c.getContext("2d"); 

   c.focus();
   
   function drawPaddles()
   {
       for(i= 0; i< 2; i++)
       {
           ctx.clearRect(0, 0, c.width, c.height);
           ctx.fillStyle = collors[i];
           
           ctx.fillRect(paddle1.x,paddle1.y,75,15);
           ctx.fillRect(paddle2.x,paddle2.y,75,15);
           
           
           //Bold
           ctx.fillStyle = "#FF1C0A";
           ctx.beginPath();
           ctx.arc(ball.x, ball.y, 10, 0, Math.PI*2, true); 
           ctx.fill();
           // End Bold
 
           moveBall();
       }
       
   }
   function moveBall()
   {
       ctx.beginPath();
       
       if (ball.y == paddle2.y-10)
       {
           ball.direction = "up";
       }
       
       if(ball.y == paddle1.y+24)
       {
           ball.direction = "down";
       }
       
       if (ball.direction == "up" )
       {
            ball.y--;
       }
       else if (ball.direction == "down")
       {
            ball.y++;
       }
       
   }
//function myTimer() 
//   {   
//      // refresh the canvas
//      ctx.clearRect(0, 0, c.width, c.height);
//
//      for(i= 0; i< 2; i++) 
//      {
//        firkanter[i].x++;  
//        firkanter[i].y++;  
//        ctx.fillStyle = collors[i];
//        ctx.fillRect(firkanter[i].x,firkanter[i].y,50,10);
//        if(firkanter[i].x > c.width)
//        {  firkanter[i].x = 0;}
//        if(firkanter[i].y > c.height)
//        {  firkanter[i].y = 0;}
//      }      
//   }    
   function doKeyDown1(e)
   {
       if (e.keyCode == 65 && paddle1.x != 0) //A
       {
           paddle1.x = paddle1.x - 3;                            
       }
       if (e.keyCode == 68 && paddle1.x < c.width - 75) //D
       {
           paddle1.x = paddle1.x + 3;                            
       }
   }
   function doKeyDown2(e)
   {
       if (e.keyCode == 37 && paddle2.x != 0) //<-
       {
           paddle2.x = paddle2.x - 3;                            
       }
       if (e.keyCode == 39 && paddle2.x < c.width - 75) //->
       {
           paddle2.x = paddle2.x + 3;                            
       }
   }
</script>
         
         <footer>
           
                <?php include'includes/footer.html';?>
             
            </footer>
     </div>
    </body>
</html>
