<?php 
require("Constants.php");
//1. create database connection
$connection = mysql_connect(DB_SERVER,DB_USER,"");
if (!$connection){
	die("database connection failed: " . mysql_error());
	}
// 2. select a database to use
$db_select = mysql_select_db(DB_NAME, $connection);
if (!$db_select){
die("data selection failed: " . mysql_error());
}
?>