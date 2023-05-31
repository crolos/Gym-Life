<?php
session_start();
?>
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
            <input type="text" name="searchResults" placeholder="Enter Your Post Code Here" id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
	
			<div class="icons">
				<div id="search-btn" class="fas fa-search"></div>
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
    
<head>
<style>
h1 {font-family: 'Poppins', sans-serif; text-align: center; font-size: 50px;}
p {font-family: 'Poppins', sans-serif; text-align: center; font-size: 25px;}
</style>
</head>
<br><br>

<h1> THANK YOU FOR YOUR PURCHASE </h1><br><br><br><br><br><br><br><br>

<?php

include "gymLifeConnect.php";



$insert1 = $_SESSION["ename"];
$insert2 = $_SESSION["gname"];
$insert3 = $_SESSION["mname"];

$sql8 = "INSERT INTO orders VALUES (NULL, '$insert1', '$insert2', '$insert3')";

if ($mysqli->query($sql8) === TRUE) {
  $sql9 = "SELECT * FROM orders WHERE email LIKE '%" .$_SESSION["ename"]. "%'";
  $result9 = $mysqli->query($sql9);
  if ($result9->num_rows > 0) {
    // output data of each row
    while($row = $result9->fetch_assoc()) {
       echo "<h1> Order Details: </h1><br>";
       echo "<p> Order ID: " . $row["oDetailsID"] . "<br> Email: " . $row["email"] . "<br> Gym: " . $row["gymName"] . "<br> Membership: " . $row["membershipName"] . "</p><br><br><br><br>";
       echo "<br><br><h1> Keep your Order ID handy, you'll need it! <br><br> Please check your email for further instructions.<br><br><br><br>";
    }
  } else {
    echo "<p><br>An Error Occured</p>";
  }
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
</body>
</html>