<?php
session_start();
require_once "config.php";

$sql = "SELECT EventName, CreatorUsername, EventDate, EventDesc FROM events WHERE CreatorUsername = '{$_SESSION["username"]}'";
$result = $pdo->query($sql);

if($result->rowCount() > 0 ){

    foreach($result as $row){
        echo "Event name: " . $row["EventName"] . " Creator: " . $row["CreatorUsername"] . 
        " Date: " . $row["EventDate"] . " Details: " . $row["EventDesc"] . "<br>";
    }
}else{
    echo "You haven't made an event!";
}

?>

