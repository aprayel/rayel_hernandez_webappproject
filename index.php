<?php
include 'connect_to_database.php'; //connect the connection page
if(empty($_SESSION)) // if the session not yet started 
   session_start();


if(isset($_SESSION['username'])) { // if already login
   header("location: home.php"); // send to home page
   exit; 
}

?>

<html>
<head>
<link rel ="stylesheet" type="text/css" href ="style.css">


<body>
	<div class ="loginbox">
	<img src="icon.png" class="icon">
		<h1>Login Here</h1>
		<form action = "login_proccess.php" method = "post">
			<p>Username</p>
			<input type="text" name="username" placeholder = "Enter Username">
			<p>Password</p>
			<input type="password" name="password" placeholder = "Enter Password">
			<input type="Submit" name="submit" value = "Login">
			<a href="#">Don't have an account?</a>
		</form>
	</div>




</body>



</head>


</html>