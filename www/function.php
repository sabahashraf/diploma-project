<?php
require_once('config.php');


// this function checks if the user's entered username exists in database. if it is it returns associate number of rows.
function checkUsername($username) {
	global $con;
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result);
	return $count;
}
// if the username exists in database this function returns associate password from database.
function getPassword($username) {
	global $con;
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($result);
	
	return $data['password'];
}


// this function returns  logged in user's firstname from database
function getFirstname($username) {
	global $con;
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($result);
	return $data['firstname'];
}

// this function returns  logged in user's lastname from database
	function getLastname($username) {
	global $con;
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($result);
	return $data['lastname'];
}

// this function returns  logged in user's email address from database
		function getEmail($username) {
	global $con;
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($result);
	return $data['email'];
}