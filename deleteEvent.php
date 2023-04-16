<?php
    require_once "config.php";

    try{
        $sql = "DELETE FROM events WHERE EventID='" . $_GET['EventID'] . "'";  
        $pdo->exec($sql);
        echo "Records were deleted successfully.";
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }
     
    // Close connection
    unset($pdo);

    header("Location: events.php");
        
?>
