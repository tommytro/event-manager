<?php 
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: logged_in_homepage.php");
        exit;
    }
?>

<html>
    <link rel="stylesheet" href="homepage.css">
    
    <head>
        <title>Event Manager Project</title>
        <link rel="icon" type"image/x-icon" href="favicon.ico"/>   
        <?php include("logo.php"); ?>       
    </head>

    <body>

        <div class="eventContainer"> 
            <a class="signup-button" href="login.php">Signup / Login</a>
        </div> 
        
        <div id="footer">
            <?php include("footer.php"); ?>
        </div>
    </body>

</html>

