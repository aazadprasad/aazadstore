<?php 
	
	require './includes/common.php';
	if (isset($_SESSION['Email'])) {
 	header('location: products.php');
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
	

	<div class="container">
		
		<div class="row row-style">
			<div class="col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Login to make Purchase</div>
					<div class="panel-body">
						<div class="container">
							<div class="row">
								<div class="col-sm-11">

									<form action="login_submit.php" method="POST">
									  <div class="mb-3">
									    <label for="exampleInputEmail1" class="form-label">Email address:</label>
									    <input type="email" style="border-radius: 30px; border: 3px dotted green;" class="form-control input-lg " name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email@gmail.com" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$" required>
									    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
									  </div><br><br>
									  <div class="mb-3">
									    <label for="exampleInputPassword1" class="form-label">Password:</label>
									    <input type="password" style="border-radius: 30px; border: 3px dotted green;" class="form-control input-lg " name="password" id="exampleInputPassword1" placeholder="********" pattern=".{6,}" required>
									  </div><br><br>
									  	<center>
									  		
									  		<button class="btn btn-danger">Login</button>
										</center>
									</form>
								</div>
							</div>
						</div>
						
					</div>
					<div class="panel-footer"><label>NOTE:</label> Don't have an account? <a href="signup.php">Register</a></div>
				</div>
			</div>
		</div>

	</div>
	

	<?php

		 include './includes/footer.php';

	?>
	
	
</body>
</html>