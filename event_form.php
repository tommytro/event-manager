<?php
    require_once "config.php";

    $eventname = $eventdesc = $eventdate = $creatorname = "";

    if($pdo === false){
        echo "error";
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $eventname = $_REQUEST['eventname'];
        $eventdesc = $_REQUEST['eventdesc'];
        $eventdate = $_REQUEST['eventdate'];
        $creatorname = $_SESSION["username"];

        $sql ="INSERT INTO events (EventName, CreatorUsername, EventDate, EventDesc) 
                    VALUES ('$eventname', '$creatorname', '$eventdate', '$eventdesc')";
            
        if($stmt = $pdo->prepare($sql)){
            if($stmt->execute()){

            }
        }else{
            echo "$eventname, $eventdesc, $eventdate, $creatorname";
            echo "Something went wrong. Please try again later.";
        }
        
        // Close connection
        unset($stmt);
    }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<!-- <script> 
    var check = 0;

    if(check == 1){
        alert("check"); 
        localStorage.removeItem("eventname");
        localStorage.removeItem("eventdate");
        localStorage.removeItem("eventdesc");
    }else if(check == 0){
        
        window.onbeforeunload = function() {
            localStorage.setItem("eventname", $('#eventname').val());
            localStorage.setItem("eventdesc", $('#desc').val());   
            localStorage.setItem("eventdate", $('#eventdate').val());
        }
    }

    window.onload = function() {
        
        var name = localStorage.getItem("eventname");
        if (name !== null) $('#eventname').val(name);

        var date = localStorage.getItem("eventdate");
        if (date !== null) $('#eventdate').val(date);

        var desc = localStorage.getItem("eventdesc");
        if (desc !== null) $('#desc').val(desc);
    }

    function clicker(){
        check = 1; 
        alert("here");
};   
</script> -->


<html>
    <form action="" method="post">
        <div class="eventContainer">
            <h1>Create Event</h1>
            <p>Please fill in this form to create a new event</p>
            <hr>
            <input type="text" placeholder="Event Name" name="eventname" id="eventname" maxlength="55" required>
            <input type="date" placeholder="Event Date" name="eventdate" id="eventdate" required>
            <input type="text" placeholder="Extra Details" name="eventdesc" id="desc">
            <hr>
                
            <button class="button-fancy" type="submit">Create Event</button>
        </div>
    </form>
</html>
    