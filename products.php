<?php
	
	require './includes/common.php';
	
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Products Page Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sacle=1.0" >

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body class="pb2">

	<?php 

		include './includes/header.php';

		include './includes/check-if-added.php';

		$select_query = "SELECT id, name, price FROM items";
		$select_query_result = mysqli_query($con, $select_query) or die($con);
		
	?>
	


	<div class="container">
		<div class="jumbotron">
  			<h1 class="display-4"><center>“Welcome to our Lifestyle Store!”</center></h1>
  			<center><p class="lead">We have the best cameras, watches and shirts for you. No need to hunt 
				around, we have all in one place.
			</p></center>
		</div>
<!-- FIRST ROW -->
		<div class="row text-center">
			
			<div class="col-md-3 col-sm-6" >
				<a href="#" class="thumbnail" style="text-decoration: none;"><img src="images\1.jpg" class="img-responsive">
					<div class="caption">

						<?php 
							
							$row = mysqli_fetch_array($select_query_result);
							echo "<h3>". $row['name']. "</h3>";
							echo "<p>Price: Rs.". $row['price'] .".00</p>";
						?>
						
						<?php 
						if (!isset($_SESSION['Email'])) { 
						?>
						
						<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
						
						 <?php
						 } 
						 else {
						 //We have created a function to check whether this particular product is added 
						// to cart or not.

								 if (check_if_added_to_cart(1)==1) { 
								 	?>
								<a href="#" class="btn btn-block btn-danger" disabled>Added to 
								cart</a>

								<?php } else { //if item not in cart
								?>

									<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
									btn-primary" >Add to cart</a>
									 <?php
									 }
								}

						?>
						


					</div></a>
			</div>

			<div class="col-md-3 col-sm-6">
				<a href="cart.php" class="thumbnail" style="text-decoration: none;"><img src="images\2.jpg" class="img-responsive">
					<div class="caption">

						<?php  
						$row = mysqli_fetch_array($select_query_result);
						echo "<h3>". $row['name']. "</h3>";
						echo "<p>Price: Rs.". $row['price'] .".00</p>";
						?>
						
						
						<?php 
						if (!isset($_SESSION['Email'])) { 
						?>
						
						<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
						
						 <?php
						 } 
						 else {
						 //We have created a function to check whether this particular product is added 
						// to cart or not.

								 if (check_if_added_to_cart(2)==1) { 
								 	?>
								<a href="#" class="btn btn-block btn-danger" disabled>Added to 
								cart</a>

								<?php } else { //if item not in cart
								?>
									<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block 
									btn-primary" >Add to cart</a>
									 <?php
									 }
								}

						?>
						

					</div></a>
			</div>

			<div class="col-md-3 col-sm-6">
				<a href="cart.php" class="thumbnail" style="text-decoration: none;"><img src="images\3.jpg" class="img-responsive">
					<div class="caption">

						<?php  
						$row = mysqli_fetch_array($select_query_result);
						echo "<h3>". $row['name']. "</h3>";
						echo "<p>Price: Rs.". $row['price'] .".00</p>";
						?>

						<?php 
						if (!isset($_SESSION['Email'])) { 
						?>
						
						<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
						
						 <?php
						 } 
						 else {
						 //We have created a function to check whether this particular product is added 
						// to cart or not.

								 if (check_if_added_to_cart(3)==1) { 
								 	?>
								<a href="#" class="btn btn-block btn-danger" disabled>Added to 
								cart</a>

								 <?php } else {  //if item not in cart
								?>
									<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block 
									btn-primary" >Add to cart</a>
									 <?php
									 }
								}

						?>
						

					</div></a>
			</div>

			<div class="col-md-3 col-sm-6">
				<a href="cart.php" class="thumbnail" style="text-decoration: none;"><img src="images\4.jpg" class="img-responsive">
					<div class="caption">


						<?php  
						$row = mysqli_fetch_array($select_query_result);
						echo "<h3>". $row['name']. "</h3>";
						echo "<p>Price: Rs.". $row['price'] .".00</p>";
						?>


						<?php 
						if (!isset($_SESSION['Email'])) { 
						?>
						
						<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
						
						 <?php
						 } 
						 else {
						 //We have created a function to check whether this particular product is added 
						// to cart or not.

								 if (check_if_added_to_cart(4)==1) { 
								 	?>
								<a href="#" class="btn btn-block btn-danger" disabled>Added to 
								cart</a>

								<?php } else {   //if item not in cart
								?>
									<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block 
									btn-primary" >Add to cart</a>
									 <?php
									 }
								}

						?>
						

					</div></a>
			</div>
		</div>
		<hr><br>

		<!-- SECOND ROW -->

		<div class="row text-center">
			
			<div class="col-md-3 col-sm-6" >
				<a href="cart.php" class="thumbnail" style="text-decoration: none;"><img src="images\5.jpg" class="img-responsive">
					<div class="caption">


						<?php  
						$row = mysqli_fetch_array($select_query_result);
						echo "<h3>". $row['name']. "</h3>";
						echo "<p>Price: Rs.". $row['price'] .".00</p>";
						?>


						<?php 
						if (!isset($_SESSION['Email'])) { 
						?>
						
						<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
						
						 <?php
						 } 
						 else {
						 //We have created a function to check whether this particular product is added 
						// to cart or not.

								 if (check_if_added_to_cart(5)==1) { 
								 	?>
								<a href="#" class="btn btn-block btn-danger" disabled>Added to 
								cart</a>

								 <?php } else {   //if item not in cart
								?>
									<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block 
									btn-primary" >Add to cart</a>
									 <?php
									 }
								}

						?>
						

					</div></a>
			</div>

			<div class="col-md-3 col-sm-6">
				<a href="cart.php" class="thumbnail" style="text-decoration: none;"><img src="images\6.jpg" class="img-responsive">
					<div class="caption">


						<?php  
						$row = mysqli_fetch_array($select_query_result);
						echo "<h3>". $row['name']. "</h3>";
						echo "<p>Price: Rs.". $row['price'] .".00</p>";
						?>


						<?php 
						if (!isset($_SESSION['Email'])) { 
						?>
						
						<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
						
						 <?php
						 } 
						 else {
						 //We have created a function to check whether this particular product is added 
						// to cart or not.

								 if (check_if_added_to_cart(6)==1) { 
								 	?>
								<a href="#" class="btn btn-block btn-danger" disabled>Added to 
								cart</a>

								 <?php } else {
								?>
									<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block 
									btn-primary" >Add to cart</a>
									 <?php
									 }
								}

						?>
						

					</div></a>
			</div>

			<div class="col-md-3 col-sm-6">
				<a href="cart.php" class="thumbnail" style="text-decoration: none;"><img src="images\7.jpg" class="img-responsive">
					<div class="caption">


						<?php  
						$row = mysqli_fetch_array($select_query_result);
						echo "<h3>". $row['name']. "</h3>";
						echo "<p>Price: Rs.". $row['price'] .".00</p>";
						?>


						<?php 
						if (!isset($_SESSION['Email'])) { 
						?>
						
						<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
						
						 <?php
						 } 
						 else {
						 //We have created a function to check whether this particular product is added 
						// to cart or not.

								 if (check_if_added_to_cart(7)==1) { 
								 	?>
								<a href="#" class="btn btn-block btn-danger" disabled>Added to 
								cart</a>

								 <?php } else {
								?>
									<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block 
									btn-primary" >Add to cart</a>
									 <?php
									 }
								}

						?>
						

					</div></a>
			</div>

			<div class="col-md-3 col-sm-6">
				<a href="cart.php" class="thumbnail" style="text-decoration: none;"><img src="images\8.jpg" class="img-responsive">
					<div class="caption">

						<?php  
						$row = mysqli_fetch_array($select_query_result);
						echo "<h3>". $row['name']. "</h3>";
						echo "<p>Price: Rs.". $row['price'] .".00</p>";
						?>


						<?php 
						if (!isset($_SESSION['Email'])) { 
						?>
						
						<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
						
						 <?php
						 } 
						 else {
						 //We have created a function to check whether this particular product is added 
						// to cart or not.

								 if (check_if_added_to_cart(8)==1) { 
								 	?>
								<a href="#" class="btn btn-block btn-danger" disabled>Added to 
								cart</a>

								 <?php } else {		//if item not in cart
								?>
									<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block 
									btn-primary" >Add to cart</a>
									 <?php
									 }
								}

						?>
						

					</div></a>
			</div>
		</div>
		<hr><br>

		<!-- THIRD ROW -->

		<div class="row text-center">
			
			<div class="col-md-3 col-sm-6" >
				<a href="cart.php" class="thumbnail" style="text-decoration: none;"><img src="images\9.jpg" class="img-responsive">
					<div class="caption">

						<?php  
						$row = mysqli_fetch_array($select_query_result);
						echo "<h3>". $row['name']. "</h3>";
						echo "<p>Price: Rs.". $row['price'] .".00</p>";
						?>


						<?php 
						if (!isset($_SESSION['Email'])) { 
						?>
						
						<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
						
						 <?php
						 } 
						 else {
						 //We have created a function to check whether this particular product is added 
						// to cart or not.

								 if (check_if_added_to_cart(9)==1) { 
								 	?>
								<a href="#" class="btn btn-block btn-danger" disabled>Added to 
								cart</a>

								 <?php } else {
								?>
									<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block 
									btn-primary" >Add to cart</a>
									 <?php
									 }
							 }

						?>
						


					</div></a>
			</div>

			<div class="col-md-3 col-sm-6">
				<a href="cart.php" class="thumbnail" style="text-decoration: none;"><img src="images\10.jpg" class="img-responsive">
					<div class="caption">

						<?php  
						$row = mysqli_fetch_array($select_query_result);
						echo "<h3>". $row['name']. "</h3>";
						echo "<p>Price: Rs.". $row['price'] .".00</p>";
						?>


						<?php 
						if (!isset($_SESSION['Email'])) { 
						?>
						
						<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
						
						 <?php
						 } 
						 else {
						 //We have created a function to check whether this particular product is added 
						// to cart or not.

								 if (check_if_added_to_cart(10)==1) { 
								 	?>
								<a href="#" class="btn btn-block btn-danger" disabled>Added to 
								cart</a>

								 <?php } else {
								?>
									<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block 
									btn-primary" >Add to cart</a>
									 <?php
									 }
								}

						?>
						


					</div></a>
			</div>

			<div class="col-md-3 col-sm-6">
				<a href="cart.php" class="thumbnail" style="text-decoration: none;"><img src="images\11.jpg" class="img-responsive">
					<div class="caption">


						<?php  
						$row = mysqli_fetch_array($select_query_result);
						echo "<h3>". $row['name']. "</h3>";
						echo "<p>Price: Rs.". $row['price'] .".00</p>";
						?>


						<?php 
						if (!isset($_SESSION['Email'])) { 
						?>
						
						<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
						
						 <?php
						 } 
						 else {
						 //We have created a function to check whether this particular product is added 
						// to cart or not.

								 if (check_if_added_to_cart(11)==1) { 
								 	?>
								<a href="#" class="btn btn-block btn-danger" disabled>Added to 
								cart</a>

								 <?php } else {
								?>
									<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block 
									btn-primary" >Add to cart</a>
									 <?php
									 }
								}

						?>
						

					</div></a>
			</div>

			<div class="col-md-3 col-sm-6">
				<a href="cart.php" class="thumbnail" style="text-decoration: none;"><img src="images\12.jpg" class="img-responsive">
					<div class="caption">

						<?php  
						$row = mysqli_fetch_array($select_query_result);
						echo "<h3>". $row['name']. "</h3>";
						echo "<p>Price: Rs.". $row['price'] .".00</p>";
						?>
						

						<?php 
						if (!isset($_SESSION['Email'])) { 
						?>
						
						<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
						
						 <?php
						 } 
						 else {
						 //We have created a function to check whether this particular product is added 
						// to cart or not.

								 if (check_if_added_to_cart(12)==1) { 
								 	?>
								<a href="#" class="btn btn-block btn-danger" disabled>Added to 
								cart</a>

								 <?php } else {
								?>
									<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block 
									btn-primary" >Add to cart</a>
									 <?php
									 }
								}

						?>
						


					</div></a>
			</div>
		</div>
		<hr>
	</div>
	<br><br>
	

	<?php 

		include './includes/footer.php';
	?>


</body>
</html>