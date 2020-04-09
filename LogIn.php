<?php  
	include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Logging In</title>
	<link rel="stylesheet" href="./Log In.css">

</head>

<body>
	<!-- partial:Log In.partial.html -->
	<div class="wrapper">
		<div class="container">
			<h1>Welcome</h1>

			<form method="post" class="form">
				<input  type="text" name="phone" placeholder="Phone">
				<input   type="password" name="password" placeholder="Password">
				<button type="submit" name="Submit" id="login-button">Login</button>
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
			if (isset($_REQUEST["Submit"])){
	
		// Assigning POST values to variables.
		$phone = $_REQUEST['phone'];
		$password = $_REQUEST['password'];
		// CHECK FOR THE RECORD FROM TABLE
		$query = "SELECT * FROM member WHERE PHONE_NO = '$phone' and PASS ='$password'";
 
		$result = mysqli_query($conn, $query) or die(mysqli_error($connection));
		$count = mysqli_num_rows($result);

		if ($count == 1){
			header('location:http://localhost/Robotic Society/HomePage.html');
		}
		else{
			echo "<center>Your username or password is wrong</center>";
		}
	}
		 ?>

	<!-- partial -->
	<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="./Log In.js"></script>
 -->
</body>

</html>