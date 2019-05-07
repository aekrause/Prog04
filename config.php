<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '10.8.30.49');
define('DB_USERNAME', 'aekrause355wi19');
define('DB_PASSWORD', 'LQWbvz48');
define('DB_NAME', 'aekrause355wi19');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>