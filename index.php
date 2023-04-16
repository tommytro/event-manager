<?php include("check-login.php"); ?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(function(){
        $.ajaxSetup({
            cache: false
        });

        var spinner = "<img src='http://i.imgur.com/pKopwXp.gif' alt='loading...' />";
        var url = "logged_in_homepage.php";

        $("#loadbasic").click(function(){
            $("#result").html(spinner).load(url);
        });
    });

</script>

<html>
    <link rel="stylesheet" href="homepage.css">
    
    <head>
        <title>Event Manager Project</title>
        <link rel="icon" type"image/x-icon" href="favicon.ico"/>   
        <?php include("logo.php"); ?>       
    </head>

    <body>
    <div class="excontainer">
    <button id="loadbasic">basic load</button>
    <div id="result"></div>
 
    </div>
        <div class="eventContainer"> 
            <a class="signup-button" href="login.php">Signup / Login</a>
        </div> 
        
        <div id="footer">
            <?php include("footer.php"); ?>
        </div>
    </body>

</html>



