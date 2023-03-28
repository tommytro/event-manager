<?php
require_once "config.php";

session_start();

$eventname = $eventdesc = $eventdate = $creatorname = "";

if($link === false){
    echo "error";
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $eventname = $_REQUEST['eventname'];
    $eventdesc = $_REQUEST['eventdesc'];
    $eventdate = $_REQUEST['eventdate'];
    $creatorname = $_SESSION["username"];

    $sql ="INSERT INTO events (EventName, CreatorUsername, EventDate, EventDesc) 
                VALUES ('$eventname', '$creatorname', '$eventdate', '$eventdesc')";
        
    if(mysqli_query($link, $sql)){
        
    }else{
        echo "$eventname, $eventdesc, $eventdate, $creatorname";
        echo "Something went wrong. Please try again later.";
    }
    
    // Close connection
    mysqli_close($link);
}


?>

<html>
    <div>
        <form action="" method="post">
            <div class="create_event_container">
                <h1>Create Event</h1>
                <p>Please fill in this form to create a new event</p>
                <hr>
                <input type="text" placeholder="Event Name" name="eventname" id="eventname" maxlength="55" required>
                <input type="date" placeholder="Event Date" name="eventdate" id="eventdate" required>
                <input type="text" placeholder="Extra Details" name="eventdesc" id="desc">
                <hr>
                <button type="submit">Create Event</button>
            </div>
        </form>
    </div>
</html>
    