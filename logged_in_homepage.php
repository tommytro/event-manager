<html>
    <link rel="stylesheet" href="homepage.css">
    <head>
        
        EVENT MANAGER
        <form style="float: right" action="logged_in_homepage.php"> 
            <style> 
                
            </style> 
            <button  class="button" onclick="logged_in_homepage.php">Login</button>
        </form>
        
    </head>
    <body style="background-color:rgb(214, 76, 76);">
        <main>
            website for managing events
        </main>
        <?php include("navbar.php"); ?>
        <?php include("calendar.html"); ?>
    </body>
</html>