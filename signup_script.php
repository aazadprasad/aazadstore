<?php

	require './includes/common.php';
	

	$email= strtolower($_POST['email']);	//lowering Email ID
	
	$regex_email= "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	if (!preg_match($regex_email, $email)) {
		echo "Incorrect Email";
	}
	$password = $_POST['password'];
	if (strlen($password)<6) {
		echo "Password should have at-least 6 characters";

	}
	$email = mysqli_real_escape_string($con, $email);
	$password = md5(mysqli_real_escape_string($con, $password));	//md5 used here

	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$city = $_POST['city'];
	$address = $_POST['address'];


	$fetch_query = "select id from users where email='$email'";
	$fetch_query_result = mysqli_query($con,$fetch_query) or die(mysqli_error($con));
	$number_of_id = mysqli_num_rows($fetch_query_result);

	if ($number_of_id>0) {

		echo "Email id already exist";
	} else{

	$user_registration_query = "insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
	// die($user_registration_query);

	$user_registration_submit = mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
	echo "User successfully Instered";


	$new_user_id = mysqli_insert_id($con);


	$_SESSION['Email'] = $email;
	$_SESSION['Id'] = $new_user_id;

	//redirecting to products page
	header('location: products.php');


	}


?>