<?php include "check-login.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#searchBar').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: "searchEvent.php",
                type: "POST",
                data: $(this).serialize(),
                success: function(data){
                    $("#postData").html(data);
                },
                error: function(){
                    alert("Form submission failed!");
                }
            });
        });
    });
</script>

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
        <div class="eventContainer"> 
            <form id="searchBar">
                <input type="text" name="searchTerm" class="textbox-fancy">
                <input type="submit" name="submit" class="button-fancy" value="Search"/>
            </form>
            <div id="postData"></div>
            <!-- <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                Search for an Event:
                <input type="text" name="search" class="textbox-fancy" id="search">
            </form> -->
            <hr>
          
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>

 
