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
		<link rel="stylesheet" href="style.css">
	
	</head>
	<body>

	<!-- header section starts  -->
	<header class="header">
      <div class="header-1">
        <a href="index.html" class="logo"> <i class="fas fa-gym"></i> Gym Life </a>

        <form action="searchResult.php" class="search-form">
          <input
            type="text"
            name="searchResults"
            placeholder="Enter Your Post Code Here"
            id="search-box"
          />
          <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
          <a href="searchResult.php" class="fas fa-search"></a>
          <div id="login-btn" class="fas fa-user"></div>
        </div>
      </div>
	
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
	
	<link rel="stylesheet" href="Registrationform.css">


	


</head>

<head>
<style>
h1 {font-family: 'Poppins', sans-serif; text-align: center; font-size: 50px;}
p {font-family: 'Poppins', sans-serif; text-align: center; font-size: 35px;}
s {font-family: 'Poppins', sans-serif; text-align: center; font-size: 40px;}
</style>
</head>
<body>

<?php

include "gymLifeConnect.php";

$keywordfromform1 = $_GET["searchResults"];



$sql = "SELECT * FROM gyms WHERE postCode LIKE '%" .$keywordfromform1. "%'";
$result = $mysqli->query($sql);

echo "<h1><br> GYMS IN " .$keywordfromform1. "<br><br></h1>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      
    echo "<p>" . $row["gymName"]. "<br><br><br></a></p>";
  }
} else {
  echo "<p><br>0 results</p>";
}
?>
<br><br><br><br><br>

<form style="text-align: center;" action="gymPage.php">
    <label for="gname"><s>which gym are you interested in?:<br></s></label><br>
    <input type="text" id="gname" name="gymName"><br>
    <input type="submit" value="Submit"><br><br>
</form>"

</html>