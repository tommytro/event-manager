<html>
    <link rel="stylesheet" href="homepage.css">
    
    <head>
        <title>Event Manager Project</title>
        <link rel="icon" type"image/x-icon" href="favicon.ico"/> 
        <form style="float: right" action="logged_in_homepage.php"> 
            <button  class="button" onclick="logged_in_homepage.php">Login</button>
        </form>   
        <?php include("logo.php"); ?>

        <div>
            <form style="float: right" action="loginhandler.php"> 
                <button  class="button" onclick="loginhandler.php">Login</button>
            </form>
        </div>
   
        
    </head>
    <body>
        <img src="homepage static.png" width="500" height="500" alt="Calendar Logo" id="homepagestatic">
        <div id="footer">
            <?php include("footer.php"); ?>
        </div>
        
    </body>
</html>