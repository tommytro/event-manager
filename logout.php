<?php
session_start();
$_SESSION["loggedin"] = false;
$_SESSION["username"] = '';  
header("location: index.php"); //Redirect to landing page
exit;
?>