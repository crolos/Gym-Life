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
	
			<a href="index.html" class="logo"> <i class="fas fa-gym"></i> Gym Life </a>
			
			<form action="searchResult.php" class="search-form">
				<input type="text" name="searchResults" placeholder="Enter Your Post Code Here" id="search-box">
				<label for="search-box" class="fas fa-search"></label>
			</form>
	
			<div class="icons">
				<div id="search-btn" class="fas fa-search"></div>
				<a href="#" class="fas fa-heart"></a>
				<a href="#" class="fas fa-shopping-cart"></a>
				<div id="login-btn" class="fas fa-user"></div>
			</div>
	
		</div>
	
		<div class="header-2">
			<nav class="navbar">
				<a href="index.html">Home</a>
				<a href="GymOffers.html">Gym Offers</a>
				<a href="Contact us.html">Contact us</a>
				<a href="Review.html">Review</a>
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


<body>

<?php

include "gymLifeConnect.php";


?>

<head>
	<style> 
	input[type=text] {
	  width: 30%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  box-sizing: border-box;
	  border: 3px solid #ccc;
	  -webkit-transition: 0.5s;
	  transition: 0.5s;
	  outline: none;
	}
	
	input[type=text]:focus {
	  border: 3px solid #555;
	}
    input[type=text2] {
	  width: 70%;
      height:700px;
	  padding: 12px 20px;
	  margin: 8px 0;
	  box-sizing: border-box;
	  border: 3px solid #ccc;
	  -webkit-transition: 0.5s;
	  transition: 0.5s;
	  outline: none;
	}
	
	input[type=text2]:focus {
	  border: 3px solid #555;
	}
    
	
	input[type="submit"] {
	  margin-top: 28px;
	  width: 120px;
	  height: 32px;
	  background: #16a085;
	  border: none;
	  border-radius: 2px;
	  color: #FFF;
	  font-family: 'Roboto', sans-serif;
	  font-weight: 500;
	  transition: 0.1s ease;
	  cursor: pointer;
	}
	</style>
	</head>

	<head>
		<style>
		h1 {font-family: 'Poppins', sans-serif; text-align: center; font-size: 50px;}
		p {font-family: 'Poppins', sans-serif; text-align: left; font-size: 25px;}
		</style>
		</head>

<div class="header">
	<h1>GYM Registration</h1><br><br>
</div>

<form action="addGym.php">
    <label for="gym_ID"><p>&nbsp Enter 3 digit ID for your Gym (remember it):</p></label><br>
	<input type="text" id="gym_ID" name="gym_ID">
	<label for="gym_name"><p>&nbsp Gym Name:</p></label><br>
	<input type="text" id="gym_name" name="gym_name">
	<label for="g_address"><p>&nbsp Address:</p></label><br>
	<input type="text" id="g_address" name="g_address">
	<label for="city"><p>&nbsp City:</p></label><br>
	<input type="text" id="city" name="city">
	<label for="post_code"><p>&nbsp Post Code:</p></label><br>
	<input type="text" id="post_code" name="post_code">
	<label for="openTimes"><p>&nbsp Opening Times:</p></label><br>
	<input type="text" id="openTimes" name="openTimes"><br>
    <label for="description"><p>Description:</p></label><br>
	<input type="text2" id="description" name="description"><br>
	<input type="submit" value="Submit"><br><br>

</form>



</body> 

</html>