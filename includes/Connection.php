<?php 
require("Constants.php");
//1. create database connection
$connection = mysqli_connect("localhost","root","");
if (!$connection){
	die("database connection failed: " . mysqli_error());
	}
// 2. select a database to use
$db_select = mysqli_select_db($connection, "aitprogram_rainbow");
if (!$db_select){
die("data selection failed: " . mysqli_error());
}
?>