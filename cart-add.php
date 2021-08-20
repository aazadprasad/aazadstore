<?php
	require './includes/common.php';

	$item_id = $_GET['id'];
	$user_id = $_SESSION['Id'];
	

	// insert item with user in users_items table
	$insert_query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
	$insert_query_result = mysqli_query($con, $insert_query) or die($con);

	header('location: products.php');
?>