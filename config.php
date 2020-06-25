<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$db_host = "127.0.0.1:3307";
$db_user = "root";
$db_password = "0000";
$db_name = "smartfarming";

/* Attempt to connect to MySQL database */
$link = new mysqli($db_host, $db_user, $db_password, $db_name);
 
// Check connection
if($link->connect_errno){
    debug_to_console("Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error);
    exit;
}
debug_to_console($link->host_info . "\n");

// Show echo string in Browser Console log 
function debug_to_console($data) {
    echo "<script>console.log('Debug Objects: " . $data. "' );</script>";
}
?>