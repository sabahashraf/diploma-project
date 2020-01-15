<?php

session_start();//initiate session
// connect to database
	$con = mysqli_connect("localhost", "root", "", "Login");
if(isset($_POST['login_btn'])) {
	
$username = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$password =md5($password);
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$res = mysqli_query($con, $sql)  or die(mysqli_error($con));;
if (mysqli_num_rows($res) == 1) {
	$_SESSION['message'] = "You are now logged in";
	$_SESSION['username'] = $username;
	header("location:index.php");
}
else {
	$_SESSION['message'] = "username/password incorrect";
}
}
?>
<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">

  <title>     Log in </title>
  
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
				<div class="col-sm-6 col-md-4 col-md-offset-3" style = "margin-top:15%;margin:auto;">
				
				<h1 class="text-center login-title">Log in to continue </h1>
				<?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}

?>
					<form action = "login.php" method = "post">
					   <input class = "form-control" type = "text" name = "username" placeholder = "Username">
					   <br>
						
					   <input class = "form-control"  type = "password" name = "password" placeholder = "Password">
					   <br>
						
					   <input type = "submit"  name = "login_btn" value = "Login" class = "btn btn-info">
				   </form><br>
				    <p class="text-primary">Not registered?<a href="register.php" >Create an account </a></p>
			   </div>
		   </div>
	   </div>
</body>
</html>