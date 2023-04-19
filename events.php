<?php include "check-login.php"; ?>
<script> src="calendar.js"</script>
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
        
        <div  class="eventContainer"><?php include("eventlistgetter.php"); ?></div>
        
        <div class="wrapper">
            <div id="calendar"></div>
            <div id="calendar_data"></div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>