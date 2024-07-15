<?php 
require("Constants.php");

// Create connection
$db = new mysqli(DB_SERVER, DB_USER, "letmein", DB_NAME);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>