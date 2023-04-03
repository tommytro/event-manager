<?php 
//    /* Database credentials. Assuming you are running MySQL
//   server with default setting (user 'root' with no password) */
//    define('DB_SERVER', 'localhost');
    // define('DB_USERNAME', 'root');
    // define('DB_PASSWORD', '');
    // define('DB_NAME', 'event-manager-site');
    
    // /* Attempt to connect to MySQL database */
    // $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // // Check connection
    // if($link === false){
    //     die("ERROR: Could not connect. " . mysqli_connect_error());
    // }
?> 

<?php
    // Database credentials. 
    define('DB_SERVER', 'us-cdbr-east-06.cleardb.net');
    define('DB_USERNAME', 'bc00d875b0b86d');
    define('DB_PASSWORD', 'b488dadb');
    define('DB_NAME', 'heroku_28216414a556bc5');
    
    try{
        $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("ERROR: Could not connect. " . $e->getMessage());
    }
?>