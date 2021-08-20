<?php 
	require './includes/common.php';


	if (!isset($_SESSION['Email'])){
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sacle=1.0" >

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body class="ca" style="background: #eeeeee;">
	<?php
		include './includes/header.php';
	?>

	



	<div class="container">
		
		<div class="col-xs-8">
			<div class="table table-striped table-responsive"></div>
				<table class="table col-xs-4"> <!-- action="success.html"> -->
					<tbody style="border: 1px solid red; background:#fff7ae;"> <center > <h2 style="border-bottom: 2px solid green; display:inline-block;"><br>This is Your Cart.</h2></center>  <!-- br used a lot -->
						<tr>
							<th>Item Number</th>
							<th>Item Image</th>
							<th>Item Name</th>
							<th>Price</th>
							<th></th>
						</tr>



						<?php

						$email = $_SESSION['Email'];
						$user_id = $_SESSION['Id'];

						// fetching item_id, item name, price from users_items and items table by joining
						$fetch_query = "SELECT item_id, name, price FROM items as i, users_items as ui where ui.item_id = i.id and ui.user_id = '$user_id' and ui.status='Added to cart'"; 

						$fetch_query_result = mysqli_query($con, $fetch_query); 
						

						$item_number = mysqli_num_rows($fetch_query_result);

						if ($item_number == 0){
							echo "<h3>Add items to the cart first!</h3>";


						}
						else{
							
							$ids = array();

							$sum=0;
							$index = 0; //counter
							while ($row = mysqli_fetch_array($fetch_query_result)){
								$sum = $sum + $row['price'];
								
								$ids[$index] = $row['item_id'];

								?>
								<tr>
									<td>
										<h1><?php echo $index+1; ?></h1>
									</td> 
									<td> 
										<?php echo "<img src=\"images\\". $row['item_id'] .".jpg\" class='img-responsive' style='height:100px; width:150px; border-radius:5px;'>";
										?>
									</td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['price']; ?></td>

									<td >
									<?php 
									
									echo "<a href= \"cart-remove.php?item_id=". $row['item_id'] ."\"  class='remove_item_link' style='text-decoration:none; border:1px solid green; padding:6px;' id='remove'> Remove</a> "
									?>
									</td>
								</tr>

								<?php

								$index++;
							}

						}
						?>


		

						<tr>
							<td></td>
							<td></td>
							<td>Total</td>
							<td>Rs 
								
							
							<!-- showing sum of products added in cart -->
							<?php 
							if ($item_number == 0){
							echo "0";}
							else{
								echo $sum;
							} 
							?>
							</td>
							<td><a href="success.php" method="GET"><button type="button" class="btn btn-danger btn-block" style="font-size: 15px;">Confirm Order</button></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
	


	<?php
		include './includes/footer.php';
	?>
	


</body>
</html>
