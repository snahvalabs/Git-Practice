<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'tester');
define('DB_PASSWORD', 'tester');
define('DB_NAME', 'db_hore');
 
/* Attempt to connect to MySQL database with oop */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>