<?php
	SESSION_START();
	ini_set("display_errors", "On");
	$con		=	mysqli_connect("localhost", "root", "123456", "Users");
	$Uname		=	$_SESSION['User'];
	$res		=	mysqli_query($con, "SELECT * FROM users WHERE Uname = '$Uname' LIMIT 1");
	$_USER		=	$res->fetch_assoc();
	$edit		=	0;
?>
