<?php 
	
	require './includes/common.php';

	if (isset($_SESSION['Email'])) {
 	header('location: products.php');
	}

	?>



<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sacle=1.0" >

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<?php

		 include './includes/header.php';

	?>

	
	<div id="banner-image">
		<div class="container">
			<center>
				<div class="" id="banner_content">
					<div class=" inner-banner-image">
						<div class="banner_content">
							<h1>We sell lifestyle.</h1>
							<p>Flat 40% OFF on premium brands</p>
							<a href="products.php"><button class="btn btn-danger btn-lg-active">Shop Now</button></a>
						</div>
					</div>
				</div>
			</center>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 abc">
				<a href="products.php" class="thumbnail" style="text-decoration: none;"><img src="images\cam.jpg" class="img-responsive">
					<div>
						<center>
							<h3>Cameras</h3>
							<p>Choose among the best available in the world.</p>
						</center>
					</div>
				</a>
			</div>

			<div class="col-sm-4 abc">
				<a href="products.php" class="thumbnail" style="text-decoration: none;"><img src="images\watch.jpg" class="img-responsive">
					<div>
						<center>
							<h3>Watches</h3>
							<p>Original watches from the best Brands.</p>
						</center>
					</div>
				</a>
			</div>

			<div class="col-sm-4 abc">
				<a href="products.php" class="thumbnail" style="text-decoration: none;"><img src="images\shirt.jpg" class="img-responsive">
					<div>
						<center>
							<h3>Shirts</h3>
							<p>Our exquisite collection of Shirts.</p>
						</center>
					</div>
				</a>
			</div>
		</div>
	</div><br><br><br>
	<?php

		 include './includes/footer.php';

	?>


</body>
</html>