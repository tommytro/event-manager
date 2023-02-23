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
        <div>
            <ul>
                <li><a href="create_event.html" class="navbar">Create Event</a></li>
                <li><a href="friends.html" class="navbar">Friends</a></li>
                <li><a href="events.html" class="navbar">Events</a></li>
                <li><a href="statistics.html" class="navbar">Co-Planners</a></li>
            </ul>
        </div>
        <?php include("calendar.html"); ?>
    </body>
</html>