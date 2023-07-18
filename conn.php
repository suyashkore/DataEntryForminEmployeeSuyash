<?php

$db_name = "suyash";
$mysql_username = "root";
$mysql_password = ""; // Enter your MySQL password here
$server_name = "localhost";

$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
$conn1 = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
if($conn==true){
	// "connection is open";
}
else{
	//echo "connection is close";
}

?>
