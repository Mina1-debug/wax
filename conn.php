<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","select_date");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>