<?php
	require './includes/common.php';
	
	if (!isset($_SESSION['Email'])){
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sacle=1.0" >

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body class="se">
	<?php 
	 	include './includes/header.php';
	 ?>
	


	<div class="container">
		<div class="row">
			<div class="col-xs-8">
				<div class="con">
					<?php 
						$user_id = $_SESSION['Id'];
						$select_query = "SELECT name FROM users WHERE id='$user_id'";
						$select_query_result = mysqli_query($con, $select_query);
						$row = mysqli_fetch_array($select_query_result);
						$full_name = $row['name'];
						// strstr(string, search, before) give substring
						$first_name = strstr($full_name, ' ', true);
						if ($first_name == ""){
							$first_name = $full_name;
						}

						echo "<h3> Hello ". $first_name ."</h3>";
					?>
					<!-- <h1>Hello User's First Name</h1>  -->

					<h1>Change Password</h1>
					<form action="settings_script.php" class="don" method="POST">
						
						<div class="form-group">
							<input type="password" class="form-control input-lg"  name="old_pass" placeholder="Old Password" required>
							<!-- Showing Errors -->
							<div><?php echo $_GET['pass_error']; ?></div>
						</div>

						<div class="form-group">
							<input type="password" class="form-control input-lg"  name="new_pass" placeholder="New Password" required>
						</div>

						<div class="form-group">
							<input type="password" class="form-control input-lg"  name="new_pass_again" placeholder="Re-type New Password" required>
							<!-- Showing Mathch Password -->
							<div><?php echo $_GET['pass_match_error']; ?></div>
						</div>
						
						<button class="button btn btn-danger">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<?php 
		include './includes/footer.php';
	 ?>


</body>
</html>