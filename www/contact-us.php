<?php

session_start();
require_once('function.php');
if(empty($_SESSION['username'])) {
	header("Location:login.php");
}


?>






<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">

  <title>     Contact-us    </title>
  
  <meta name="author" content="      Sabah Sabrina Ashraf AND sabahsabrina@yahoo.com   ">

  <link rel="stylesheet" href="stanmore.css">
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">

  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  
<script>
$(function() {
$("a[href=#menu-expand]").click(function(e) {
$(".menu").toggleClass("menu-open");
e.preventDefault();
});
});


//form validation function
function validateForm() {
var flag = 0;
var form_object = document.forms.myform;
var email = document.forms.myform.email.value;
//checking if first name is empty..
if(form_object.fname.value == '') {
alert("Please enter your first name");
return false;
}
//checking if last name is empty
else if(form_object.lname.value == '') {
alert("Please enter your last name");
return false;
}
//checking if email field is empty
else if (email == '') {
alert("Please enter your email address");
return false;
}
//checking is there any @ sign in email address or not
else if(email.indexOf('@') < 0) {
alert("There must be an @ sign in your email address");
return false;
}
//checking how many @ sign in email field
else if(email.indexOf('@') != email.lastIndexOf('@')) {
alert("There can not be more than one @ sign in your email address");
return false;
}
//checking is there any period in email field or not
else if(email.indexOf('.') < 0) {
alert("There must be atleast one period in your email address.");
return false;
}
//checking if period is after @ sign or not
else if (email.lastIndexOf('.') < email.indexOf('@')) {
alert("There must be at least one period following your @ sign in your email address.");
return false;
}
// when all checking results doesn't 'return false' calling another function which has been stored in a variable  called flag and flags initial value has been set to false or zero initially
flag = confirmation();

if (flag == 1) {
    alert("Thank you");
	return true;
	}	 
	else{
	return false;

	}
	
}


// the confirmation function creates a confirm box showing the form value to the user.If the user says ok the function returns true to the form validation function, where the flag's value changes to 1 that is true and form is submitted.otherwise if user press cancel, the function returns false and user can make change of form value.
function confirmation() {
	//storing user's entered values in variables
var firstname = document.getElementById("fname").value;
var lastname = document.getElementById("lname").value;
var emailadd = document.getElementById("email").value;
var comments = document.getElementById("comments").value;
var answer = confirm(" You've entered your name as " + firstname + " " + lastname +" and email address as " + emailadd  + " please press 'OK' if the information is correct");
if (answer == true) {

	return true;
	}	 
	else{
	return false;

	}
}

</script>


</head>


<body>

<div id="wrapper">



<header>

<span >	<a href = "logout.php">Logout</a></span>
<h1>Hello,  <?php echo getFirstname($_SESSION['username']);?></h1>
<a href="index.html"><img src="images/stanmore_property_rentals_logo.png"  alt="logo"></a>
</header>
<div id="responsive-menu">
<div class="menu-icon">
<a href="#menu-expand"><img src="images/menu_icon.png" width="25" height="25" alt="Responsive Menu icon"/></a>
</div>

<nav class="menu">
<ul>
<li><a href="index.php" >HOME</a></li>
<li><a href="rentals.html">RENTALS</a></li>
<li><a href="staff.php" >STAFF</a></li>
<li><a href="about-us.html">ABOUT US</a></li>
<li><a href="investments.html">INVESTMENTS</a></li>
<li><a href="contact-us.php" id="current-page">CONTACT US</a></li>
</ul>

</nav>
</div>


<main>
<section>
<h1>Contact us:</h1>
<h2>Street Address:</h2>
<p>49 Lincoln Street, Stanmore, Nsw 2048</p>
<p>Sydney, Australia</p>
<h2>Email:</h2>
<p>info@StanmorePropertyRentals.com.au</p>
<h2>contact no:</h2>
<p>(02)9253 0101</p>
<h2>Google Map</h2>
<!--<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:350px;width:350px;'><div id='gmap_canvas' style='height:350px;width:350px;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="http://mrdiscountcode.hk/zalora/">See more exclusive discount coupon for Zalora</a></small></div></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(-33.89313750000001,151.16968610000004),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-33.89313750000001,151.16968610000004)});infowindow = new google.maps.InfoWindow({content:'<strong>Stanmore Property Rentals</strong><br>49 Lincoln Street, Stanmore<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
--><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.7873621497474!2d150.88375485026677!3d-33.74031421973731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12993f370b5b1f%3A0x31fb9bdc0f11de26!2sQuakers+Court!5e0!3m2!1sen!2sau!4v1510136444794" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
<!--https://embedgooglemaps.com/en/-->
</section>
<figure>
<h2>Contact Form</h2>
<div class="container">
<form action="/action_page.php" id ="myform" method = "post" onsubmit ="return validateForm(this);">

    <label for="fname"> First Name*</label>
    <input type="text"  id="fname" name="firstname" value = <?php echo getFirstname($_SESSION['username']);?>  placeholder="Your first name..">
	
	
	<label for="lname"> Last Name*</label>
    <input type="text" id="lname" name="lastname" value = <?php echo getLastname($_SESSION['username']);?> placeholder="Your last name..">
	



    <label for="email">Email*</label>
    <input type="text" id="email" name="email" value = <?php echo getEmail($_SESSION['username']);?>  placeholder="Your email address..">
	



    <label for="comments">Comments</label>
    <textarea id="comments" name="comments" placeholder="Write something.." style="height:150px"></textarea>

    <input type="submit" value="Submit" >

  </form>
  </div>
  </figure>
</main>
<footer>
<ul>
<li>© Stanmore Property Rentals 2014-2017</li>
<li><a href="privacy.html">Privacy</a></li>
<li><a href="https://www.facebook.com"><img src="images/facebook.png" width="25" height="25" alt="facebook-icon"></a></li>
<li><a href="task-checklist.pdf">[ Task Checklist ]</a></li>
</ul>
</footer>



</div>

</body>
</html> 


