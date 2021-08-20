<?php 
	require './includes/common.php';

	$item_id = $_GET['item_id'];
	$user_id = $_SESSION['Id'];


?>

<?php 
	//removing items form cart
	$delete_query = "DELETE from users_items WHERE item_id='$item_id' AND user_id='$user_id'";
	$delete_query_result = mysqli_query($con, $delete_query);

	header('location: cart.php');

?>