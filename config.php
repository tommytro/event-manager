<?php
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'kktxvwqvocsiuo');
    define('DB_PASSWORD', '7aa7320e7ba792a4b3ef67ee275e37bbea332d72880d4d06881156983b72934f');
    define('DB_NAME', 'demo');
    
    /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if($link === false){
        echo "error";
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>