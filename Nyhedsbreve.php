<!DOCTYPE html>
<html>
    <head>
        <title>Nyhedsbreve</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <?php include 'includes/nav.html';?>
    <div id="wrapper">
        <?php include 'includes/header.html';?>
            
        <div id="nyhedsTilmelding">
            <h3>Tilmelding til nyhedsbrevet </h3>
            
        
            <form action="/Service/Nyhedsbrev.php" autocomplete="on">

                <p>
                    <label for="email">Indtast din E-mail:
                        <input type="email" name="email" id="email" placeholder="navn@domain.com" required="" autofocus="" />
                    </label>
                    <input type="submit" class="btn" value="Tilmeld" />
                </p>
          

            </form>
        </div>
         <div id="nyhedbreve">
                
          <h1>Tidligere sendte nyhedsbreve</h1>
            <ul>
                <li>  <a href="PDF/NYHEDBREV 2016.pdf">2016</a></li>
                <li>  <a href="PDF/NYHEDBREV 2016.pdf">2015</a></li>
                <li>  <a href="PDF/NYHEDBREV 2016.pdf">2014</a></li>
                <li>  <a href="PDF/NYHEDBREV 2016.pdf">2013</a></li>
               
            </ul>
           </div>
         
        </div>
        <footer>
                <?php include'includes/footer.html';?>
            </footer>
    </body>
</html>
