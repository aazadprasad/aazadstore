<?php 
	//connecting mysql and starting session if not started checked by Email passed in session while login or signup
	$con = mysqli_connect("localhost", "root", "", "store") or die(mysql_error($con));

	if (!isset($_SESSION['Email'])) { 
	session_start();
	}
?>