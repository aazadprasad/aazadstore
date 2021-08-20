<?php
	//this function chech that the item is added to cart or not and return 1 or 0 respectively i.e. 1 for added to cart and 0 for Not added to cart



	function check_if_added_to_cart($item_id){

		include './includes/common.php';

		$user_id = $_SESSION['Id'];

		$fetch_query = "select * from users_items where item_id='$item_id' AND user_id='$user_id' AND status='Added to cart'";
		$fetch_query_result = mysqli_query($con,$fetch_query) or die($con);

		$number_of_rows = mysqli_num_rows($fetch_query_result);

		if ($number_of_rows >=1) {
			return 1;
		}else{
			return 0;
		}
	}
?>