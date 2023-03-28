<html>
    <link rel="stylesheet" href="homepage.css">
    <title>Event Manager Project</title>
    <link rel="icon" type"image/x-icon" href="favicon.ico"/> 
    <head>
        <form style="float: right" action="logout.php"> 
            <button  class="button" onclick="logout.php">Log Out</button>
        </form>    
        <?php include("logo.php"); ?>
   
        
    </head>
    <body">

        <?php include("navbar.php"); ?>
        <?php include("event_form.php"); ?>
        
        <!-- <?php include("calendar.html"); ?> -->
    </body>
</html>