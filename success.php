<?php 
 	require './includes/common.php';

 	if (!isset($_SESSION['Email'])){
		header('location: index.php');
	}
	$user_id = $_SESSION['Id'];

 ?>

 <?php
 	// confirming the orders
 	$update_query = "UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id'"; 
 	$update_query = mysqli_query($con, $update_query);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sacle=1.0" >

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
	

</head>
<body class="s">
	<?php 
		include './includes/header.php';
	?>
	

	<div class="container">
		<div class="jumbotron" id="only4success">
			<center><h1>Your order is confirmed.<span>&#128525;</span></h1>
			<p>Thank you for shopping 
				with us. <a href="products.php">Click here</a> to purchase any other item. </p></center>
		</div>
	</div>

	<?php 
	include './includes/footer.php';
	 ?>
	


</body>
</html>