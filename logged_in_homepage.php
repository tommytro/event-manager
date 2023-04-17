<?php include "check-login.php"; ?>
<html>
    <link rel="stylesheet" href="homepage.css">
    <title>Event Manager Project</title>
    <link rel="icon" type"image/x-icon" href="favicon.ico"/> 
    <head>
        <form id="loginbuttonform" action="logout.php"> 
            <button  class="button-fancy" onclick="logout.php">Log Out</button>
        </form>   
    <?php include("logo.php"); ?>
    
    </head>
    <body>

        <?php include("navbar.php"); ?>
        <?php include("welcome.php"); ?>
        <?php include("footer.php"); ?>
    </body>
</html>

        
