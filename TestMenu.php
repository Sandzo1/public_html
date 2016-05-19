<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AutoCentrum</title>
    <link rel="stylesheet" type="text/css" href="CSS/Test1.css">



</head>
<body>
    <header>
        </header>
       <nav>
           <span class="nav-btn"></span>
           <ul class="nav">
               <li><a href="#">Forside</a></li>
               <li><a href="#">Biler</a></li>
               <li><a href="#">Nyheder</a></li>
               <li><a href="#">Kontakt</a></li>
           </ul>
       </nav>
<!-- ---------MENU RESPONSIVE----------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
        $('span.nav-btn').click(function (){
            $('ul.nav').slideToggle();
        })

        $(window).resize(function (){
            if($(window).width() > 667 ) {
                $('ul.nav').removeAttribute('style');
                $('nav.nav-btn').remove('nav-btn');
            }
        });
    </script>
<!-- ---------MENU RESPONSIVE----------- -->

</body>
</html>
<?php

