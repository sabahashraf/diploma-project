
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

  <title>     Home    </title>
  
  <meta name="author" content="      Sabah Sabrina Ashraf AND sabahsabrina@yahoo.com     ">

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
</script>


</head>


<body>

<div id="wrapper">



<header>

<span >	<a href = "logout.php">Logout</a></span>
<h1>Welcome,  <?php echo getFirstname($_SESSION['username']);?></h1>
<a href="index.php"><img src="images/stanmore_property_rentals_logo.png"  alt="logo"></a>
</header>
<div id="responsive-menu">
<div class="menu-icon">
<a href="#menu-expand"><img src="images/menu_icon.png" width="25" height="25" alt="Responsive Menu icon"/></a>
</div>

<nav class="menu">
<ul>
<li><a href="index.php" id="current-page">HOME</a></li>
<li><a href="rentals.html">RENTALS</a></li>
<li><a href="staff.php">STAFF</a></li>
<li><a href="about-us.html">ABOUT US</a></li>
<li><a href="investments.html">INVESTMENTS</a></li>
<li><a href="contact-us.php">CONTACT US</a></li>
</ul>

</nav>
</div>


<main>
<section>
<h1>Stanmore Property Rentals</h1>
<h2>Property of the Month</h2>
<p>Be quick to inspect this spacious 2 level, penthouse apartment in a unique warehouse conversion</p>

<h2>Description</h2>
<ul>
<li>2 bedrooms, &#189; bathrooms, 2 car spaces</li>
<li>Internal area of 120 sq m</li>
<li>Open plan living and dining areas</li>
<li>Large all-weather outdoor terrace area</li>
<li>Quality kitchen appliances</li>
<li>Built-in wardrobes and storage throughout</li>
<li>Walking distance to cafes and shops</li>

</ul>
<h2>Financials</h2>
<table>
<tr>
<th>Rent</th>
<td>$955 pm</td>
</tr>
<tr>
<th>Electricity</th>
<td>approx $385 pq</td>
</tr>
<tr>
<th>Gas</th>
<td>approx $240 pq</td>
</tr>
</table>
<p>View <a href="gallery102.html">images and floorplan </a>for this property</p>
</section>
<figure><img src="images/property_102.jpg"  alt="property-image">
<figcaption>Contact Brad on 0415 123 456 to inspect our Property of the Week, or phone our office on 8094 1234 for other<a href="rentals.html"> Rentals</a> on our books
</figcaption>
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