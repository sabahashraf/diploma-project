<?php

session_start();
// connect to database
	$con = mysqli_connect("localhost", "root", "", "Login");

if(isset($_POST['register_btn'])) {
	$firstname = mysqli_real_escape_string($con,$_POST['firstname']);
	$lastname = mysqli_real_escape_string($con,$_POST['lastname']);
	$username = mysqli_real_escape_string($con,$_POST['username']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$password2 = mysqli_real_escape_string($con,$_POST['password2']);
	if($password == $password2) {
		//create user
		$password = md5($password);//hashing password 
		$sql = "INSERT INTO users(username,password,firstname,lastname,email) values('$username','$password', '$firstname', '$lastname','$email')";
		mysqli_query($con, $sql)or die(mysqli_error($con));
		$_SESSION['message'] = "You are now logged in";
		$_SESSION['username'] = $username;
		header("location:index.php");
	}
	else {
$_SESSION['message'] = "The two passwords do not match";
	}
}	


?>


<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">

  <title>     Sign up </title>
  
  <meta name="author" content="      Sabah Sabrina Ashraf AND sabahsabrina@yahoo.com">
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="stanmore.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   </head>
<body>
	   <div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-offset-4 " style = "margin-top:15%;margin:auto;">
				
				<h1 class="text-center login-title">Sign up to continue </h1>
				<?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}

?>
					<form action = "register.php" method = "post">
					<input class = "form-control" type = "text" name = "firstname" placeholder = "First Name">
					   <br>
					   <input class = "form-control" type = "text" name = "lastname" placeholder = "Last Name">
					   <br>
					   
					   <input class = "form-control" type = "text" name = "username" placeholder = "Username">
					   <br>
						<input class = "form-control" type = "email" name = "email" placeholder = "Email">
					   <br>
					   <input class = "form-control"  type = "password" name = "password" placeholder = "Password">
					   <br>
						<input class = "form-control"  type = "password" name = "password2" placeholder = "Confirm Password">
					   <br>
					   <input type = "submit"  name = "register_btn" value = "Register" class = "btn btn-info">
				   </form>
			   </div>
		   </div>
	   </div>
</body>
</html>