<?php
require_once "config.php";

$sql = "SELECT EventID, EventName, CreatorUsername, EventDate, EventDesc FROM events WHERE EventName LIKE CONCAT('%', :search, '%')";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":search", $param_search, PDO::PARAM_STR);
$param_search = trim($_POST["searchTerm"]);
$stmt->execute();


// $result = $pdo->query($sql);


if($stmt->rowCount() > 0 ){
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
    foreach($stmt as $row){
    ?>   
        <tr>
            <td id="eventItems"><?php echo $row['EventName']?></td>
            <td id="eventItems"><?php echo $row['EventDate']?></td>
            <td id="eventItems"><?php echo $row['EventDesc']?></td>
            <td id="eventItems"><?php echo $row['CreatorUsername']?></td>
        </tr>   
<?php
    }
    
} else {

    echo "No Event Found";
}

?>

</tbody>
           
</table>