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

  <title>     Staff     </title>
  
  <meta name="author" content="      Sabah Sabrina Ashraf AND sabahsabrina@yahoo.com     ">
  
  <link rel="stylesheet" href="stanmore.css">

<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/staff.js"></script>
<script>
$(function() {
$("a[href=#menu-expand]").click(function(e) {
$(".menu").toggleClass("menu-open");
e.preventDefault();
});
});
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
<li><a href="staff.php" id="current-page">STAFF</a></li>
<li><a href="about-us.html">ABOUT US</a></li>
<li><a href="investments.html">INVESTMENTS</a></li>
<li><a href="contact-us.php">CONTACT US</a></li>
</ul>

</nav>
</div>


<main>
<section>
<h1>Staff</h1>
<h2>Meet Our New Staff Member</h2>
<p>We welcome Brad to Stanmore Property Rentals. Brad is highly experienced in managing rental properties, their owners and tenants</p>
<h2>Our Rental Property Agents</h2>
<p>Our Rental Property Agents are committed to providing the best client service at all times</p>
<p>They market each property, interview and select suitable tenants, check references, negotiate leases, collect rent, arrange repairs, and represent the owner</p>
<h2>Rental Properties</h2>
<p>View details of all our current<a href="rentals.html"> Rentals </a>in Stanmore </p>
</section>
<figure>
<img src="images/spr_staff.jpg"  alt="staff">


<input type="text" id="myInput" size = "20" onkeyup="myFunction()" placeholder="Search for names..">

<ul id="myUL">
  <li onclick = "select(0);"><a href="#">Adele</a></li>
  <li onclick = "select(1);"><a href="#">Agnes</a></li>

  <li onclick = "select(2);"><a href="#">Billy</a></li>
  <li onclick = "select(3);"><a href="#">Bob</a></li>

  <li onclick = "select(4);"><a href="#">Calvin</a></li>
  <li onclick = "select(5);"><a href="#">Christina</a></li>
  <li onclick = "select(6);"><a href="#">Cindy</a></li>
</ul>

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


