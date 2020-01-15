<?php
//try and connect to database
$con = mysqli_connect('localhost', 'root','','login');
//If connection is not successful,handle the error
if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
//handle error - log to a file, show an error screen
?>