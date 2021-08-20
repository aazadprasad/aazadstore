<?php 
	
	require './includes/common.php';
	
	$email = strtolower($_POST['email']);	//lowering email to make it official
	$password = $_POST['password'];

	$regex_email= "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	
	if (!preg_match($regex_email, $email)) {
		echo "Incorrect Email";
	}
	$password = $_POST['password'];
	if (strlen($password)<6) {
		echo "Password should have at-least 6 characters";

	}
	
	$email = mysqli_real_escape_string($con, $email);
	$password = md5(mysqli_real_escape_string($con, $password));  //md5 used

	
	// echo md5($password);

	$select_query = "select id, email from users where email='$email' and password='$password'";

	$select_query_result = mysqli_query($con,$select_query)  or die(mysqli_error($con));


	if (mysqli_num_rows($select_query_result) == 0){
		echo "No users found with the given credientials";
	} else{
		$row = mysqli_fetch_array($select_query_result);

		$_SESSION['Email'] = $email;
		$_SESSION['Id'] = $row['id'];

		
		
		header('location: products.php');
	}


?>

