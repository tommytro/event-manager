<?php
session_start();
$_SESSION = array(); //Make session variables empty
session_destroy();
header("location: index.php"); //Redirect to landing page
exit;
?>