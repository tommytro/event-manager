<?php include "check-login.php"; ?>
<html>
    <link rel="stylesheet" href="homepage.css">
    <title>Event Manager Project</title>
    <link rel="icon" type"image/x-icon" href="favicon.ico"/> 
    <head>
    <?php include("loginButton.php"); ?>      
    <?php include("logo.php"); ?>
    
    </head>
    <body>
        <?php include("navbar.php"); ?>
        
        <div  class="eventContainer"><?php include("eventslist.php"); ?></div>
        <?php include("footer.php"); ?>
    </body>
</html>