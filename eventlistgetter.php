<?php
session_start();
require_once "config.php";

$sql = "SELECT EventName, CreatorUsername, EventDate, EventDesc FROM events WHERE CreatorUsername = '{$_SESSION["username"]}'";
$result = $link->query($sql);

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        echo "Event name: " . $row["EventName"] . " Creator: " . $row["CreatorUsername"] . 
        " Date: " . $row["EventDate"] . " Details: " . $row["EventDesc"] . "<br>";
    }
}

?>

