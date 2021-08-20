<?php 
	
	require './includes/common.php';
	if (isset($_SESSION['Email'])) {
 	header('location: products.php');
	}

	?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sacle=1.0" >

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<?php 

	include './includes/header.php'

	?>
	

	<div class="container">
		<div class="row row-style" id="only4signup">
			<div class="col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading">SIGN UP</div>
					<div class="panel-body">
						<div class="container">
							<div class="row">
								<div class="col-sm-11">
									<form class="don" action="signup_script.php" method="POST">
										<div class="form-group">
											<label style="font-size: 20px; color: tomato">	Name:</label>
											<input type="text" id="s1" class="form-control input-lg" name="name" placeholder="" style="width:100%; height: 50px; border-radius: 30px; background: #dddddd" required>
										</div>
										<div class="form-group">
											<label style="font-size: 20px; color: tomato">	Email:</label>
											<input type="Email" id="s2" class="form-control input-lg"  name="email" placeholder="" style="width:100%; height: 50px; border-radius: 30px;" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$" required>
										</div>
										<div class="form-group">
											<label style="font-size: 20px; color: tomato">	Password:</label>
											<input type="password" id="s3" class="form-control input-lg"  name="password" placeholder="" style="width:100%; height: 50px; border-radius: 30px; background: #dddddd" pattern=".{6,}" required>
										</div>
										<div class="form-group">
											<label style="font-size: 20px; color: tomato">	Contact:</label>
											<input type="Contact" id="s4"  class="form-control input-lg"  name="contact" placeholder="" style="width:100%; height: 50px; border-radius: 30px;" required>
										</div>
										<div class="form-group">
											<label style="font-size: 20px; color: tomato">	City:</label>
											<input type="City" id="s5" class="form-control input-lg"  name="city" placeholder="" style="width:100%; height: 50px; border-radius: 30px; background: #dddddd" required>
										</div>
										<div class="form-group">
											<label style="font-size: 20px; color: tomato">	Address:</label>
											<input type="Address" id="s6" class="form-control input-lg"  name="address" placeholder="" style="width:100%; height: 50px; border-radius: 30px;" required>
										</div>
										<center>
										<button class="button btn btn-success">Submit</button>
										
										</center>
									</form>
									
								</div>
							</div>
						</div>
						
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
		</div>
		
	</div>

	<?php 

	include './includes/footer.php'

	?>
	


</body>
</html>