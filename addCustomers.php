
<!DOCTYPE html>
	<html lang="en">
	<head>
	
		
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Gym Life</title>
	
		<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	
		<!-- font awesome cdn link  -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<!-- custom css file link  -->
		<link rel="stylesheet" href="Transaction.css">
		<!-- custom css file link  -->
		<link rel="stylesheet" href="style.css">
	
	</head>
	<body>

	<!-- header section starts  -->
	
	<header class="header">
	
		<div class="header-1">
	
			<a href="#" class="logo"> <i class="fas fa-gym"></i> Gym Life </a>
			
		<form action="searchResult.php" class="search-form">
            <input type="text" name="searchResults" placeholder="Enter Your Post Code Here" id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
	
		<div class="login-form-container">

<div class="checkbox">
	<input type="checkbox" name="remember-me" id="remember-me" />
	<label for="remember-me"> remember me</label>
  </div>
  <input type="submit" value="sign in" class="btn" />
  <p>forget password ? <a href="Forgetpass.html">click here</a></p>
  <p>
	Register as a customer <a href="Registrationform.html">create one</a>
  </p>
  <p>Register as a Gym <a href="gymReg.php">create one</a></p>
</form>
	
		<div class="header-2">
			<nav class="navbar">
				<a href="index.html">home</a>
				<a href="GymOffers.html">Gym Offers</a>
				<a href="Contact us.html">Contact us</a>
				<a href="Review.html">Review</a>
				<a href="blogs.html">blogs</a>
			</nav>
		</div>
	
	</header>
	
	<!-- header section ends -->
	
	<!-- bottom navbar  -->
	
	<nav class="bottom-navbar">
		<a href="index.html" class="fas fa-home"></a>
		<a href="GymOffers.html" class="fas fa-list"></a>
		<a href="Contact us.html" class="fas fa-tags"></a>
		<a href="Review.html" class="fas fa-comments"></a>
		<a href="blogs.html" class="fas fa-blog"></a>
	</nav>
	
	<!-- login form  -->
	
	


	


</head>



<?php

include "gymLifeConnect.php";

$Fname = $_GET["Fname"];
$Lname = $_GET["Lname"];
$email = $_GET["email"];
$password = $_GET["password"];
$postCode = $_GET["postCode"];



$sql = "INSERT INTO customers VALUES (NULL, '$Fname', '$Lname', '$email', '$password', '$postCode')";
$result = $mysqli->query($sql);


?>
 <head>
		<style>
		h1 {font-family: 'Poppins', sans-serif; text-align: center; font-size: 50px;}
		p {font-family: 'Poppins', sans-serif; text-align: center; font-size: 25px;}
		</style>
		</head>
<div class="header">
  <h1>Thank You for Joining Us!</h1>
  <p>you can now search for gyms near you</p>
</div>

</html>