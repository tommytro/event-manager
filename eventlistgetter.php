<?php
    if(isset($_POST['delete'])){
        require_once "config.php";
        $emp_id =$_POST['emp_id'];

        $sql = "DELETE FROM employee WHERE emp_id = $emp_id" ; 
        $pdo->exec($sql);
    }
?>
      
            
    <?php
    session_start();
    require_once "config.php";

    $sql = "SELECT EventID, EventName, CreatorUsername, EventDate, EventDesc FROM events WHERE CreatorUsername = '{$_SESSION["username"]}'";
    $result = $pdo->query($sql);

    if($result->rowCount() > 0 ){
        ?>
        <table>
            <thead id="leftJustify">
            <tr>
                <th>Event Name</th>
                <th>Event Date</th>
                <th>Details</th>
                <th>Event Creator</th>
            </tr>
        
            </thead>
            <tbody>  
        <?php
        foreach($result as $row){
        ?>   
            <tr>
                <td id="eventItems"><?php echo $row['EventName']?></td>
                <td id="eventItems"><?php echo $row['EventDate']?></td>
                <td id="eventItems"><?php echo $row['EventDesc']?></td>
                <td id="eventItems"><?php echo $row['CreatorUsername']?></td>
                <td><a class="button-fancy"href="deleteEvent.php?EventID=<?php echo $row['EventID']?>">Delete</a></td>
            </tr>   
        
    <?php
        }
        
    } else {

        echo "You haven't made an event!";
    }
    ?>
    </tbody>
           
</table>



