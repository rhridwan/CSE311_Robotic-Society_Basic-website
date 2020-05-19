<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Signing Up</title>
	<link rel="stylesheet" href="./Signup.css">

</head>

<body>
	<!-- partial:Signup.partial.html -->
	<div class="wrapper">
		<div class="container">
			<h1>Welcome</h1>

			<form class="form" action="" method="post" name="">
				<input type="text" name="name" placeholder="Name">
				<input type="text" name="Email" placeholder="Email">
				<input type="text" name="phonenumber" placeholder="Phone Number">
				<input type="text" name="institution" placeholder="Institution">
				<input type="text" name="gender" placeholder="Gender">
				<input type="password" name="Password"placeholder="Password">
				<!-- <input type="password" placeholder="Re-Enter Password"> -->
				
		
				<button type="submit" name="Submit" value="Submit">SIGN UP</button>
			</form>
		</div>

		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	
	$Pname = $_POST['name'];
	$Pphonenumber = $_POST['phonenumber'];
	$Pemail = $_POST['Email'];
	$Ppassword = $_POST['Password'];
	$Pinstitution= $_POST['institution'];
	$Pgender = $_POST['gender'];


	
				
	$sql = "INSERT  INTO member(PHONE_NO,EMAIL,NAME,SEX,PASS,INSTITURE) 
				VALUES('$Pphonenumber', '$Pemail', '$Pname', '$Pgender', '$Ppassword', '$Pinstitution')";
	
	$result = mysqli_query($conn, $sql);

	//header("Location: index.php");
	echo "<h1 align = 'center'>Information Added</h1>";

	header('location:http://localhost/Robotic-Society/HomePage.html');
		
	}


?>
	<!-- partial -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="./SignUp.js"></script>

</body>

</html>