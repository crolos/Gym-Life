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
<br>
<h1> REVIEW YOUR SELECTION: </h1><br>
<br><br><br><br><br>

<?php

include "gymLifeConnect.php";

$keywordfromform3 = $_GET["membershipName"];
$keywordfromform4 = $_GET["email"];
$_SESSION["mname"] = "$keywordfromform3";
$_SESSION["ename"] = "$keywordfromform4";

$sql3 = "SELECT * FROM gyms WHERE gymName LIKE '%" .$_SESSION["gname"]. "%'";
$result3 = $mysqli->query($sql3);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row = $result3->fetch_assoc()) {
    echo "<h1> Selected Gym: </h1><br><br>";
    echo "<p>" . $row["gymName"]. "<br><br></p>";
    echo "<h1> Post Code: </h1><br><br>";
    echo "<p>" . $row["postCode"]. "<br><br><br><br><br></p>";
    $sql4 = "SELECT * FROM membershipoptions WHERE gymID = ".$row["gymID"]." AND membershipName LIKE '%" .$_SESSION["mname"]. "%'";
    $result4 = $mysqli->query($sql4);
    if ($result4->num_rows > 0) {
        // output data of each row
        while($row = $result4->fetch_assoc()) {  
          echo "<h1> Chosen Membership: <br><br></h1>";
          echo "<p> Name: " . $row["membershipName"] . "</p><br>";
          echo "<p> Duration: " . $row["duration"] . "</p><br>";
          echo "<p> Price (in GBP): " . $row["price"] . "</p><br><br><br><br><br>";
        $sql5 = "SELECT * FROM customers WHERE email = '".$_SESSION["ename"]."'";
        $result5 = $mysqli->query($sql5);
        if ($result5->num_rows > 0) {
            while($row = $result5->fetch_assoc()) {
            echo "<h1> Your Info: <br><br></h1>";
            echo "<p> Name: " . $row["Fname"] . " " . $row["Lname"] . "<br><br></p>";
            echo "<p> Email: " . $row["email"] . "<br><br><br><br><br></p>";
        }
            }
            else {
            echo "<p><br>An Error Occured</p>";
            }
        
        }
      } else {
        echo "<p><br>An Error Occured</p>";
      }

  }
} else {
  echo "<p><br>An Error Occured</p>";
}



?>

<head>
<style> 
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

<form style="text-align: center; font-size: 30px;" action="orderGenPage.php">
    <input type="submit" value="Confirm"><br><br>
</form>
	
</body>
</html>