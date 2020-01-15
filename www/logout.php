<?php
session_start();
session_destroy();//session is made to be ended by this function.
unset($_SESSION['username']);
$_SESSION['message']="You are now logged out";
header("Location:login.php");
?>