<?php 
	require './includes/common.php';


	$user_id = $_SESSION['Id'];
	
	$old_pass = $_POST['old_pass'];
	$new_pass = $_POST['new_pass'];
	$new_pass_again = $_POST['new_pass_again'];
	
?>
<?php
	

	if ((strlen($old_pass)<6) or (strlen($new_pass)<6) or (strlen($new_pass_again)<6)){
		header('location: settings.php?pass_error=Password should have at-least 6 characters&pass_match_error= ');
		// echo "Password should have at-least 6 characters";

	}

	elseif ($new_pass != $new_pass_again){
		header('location: settings.php?pass_error=&pass_match_error=Password Not Matched with Previous One');
		// echo "Both Passwords are not Same.";
	}

	else{
		$select_query = "SELECT password from users where id='$user_id'"; // change user_id#############
		$select_query_result = mysqli_query($con,$select_query)  or die(mysqli_error($con));

		$row = mysqli_fetch_array($select_query_result);


		if ($row['password'] == md5($old_pass)){
			$new_pass = md5($new_pass);
			$update_query = "UPDATE users SET password='$new_pass' WHERE id='$user_id'";   
			$update_query_result = mysqli_query($con,$update_query)  or die(mysqli_error($con));
			echo "Updated Successfully!";

		} 
		else{
			
			header('location: settings.php?pass_error=Incorrect Correct Password&pass_match_error= ');
			// echo "Incorrect password please give a correct password";
		}

		
	}

?>