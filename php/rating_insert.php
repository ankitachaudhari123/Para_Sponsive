<?php
include('../db/db.php');
$product_id = $_POST['product_id'];
$rating_user_id = $_POST['rating_user_id'];
$rating_value = $_POST['rating_value'];
$rating_message = $_POST['rating_message'];

$sql = "INSERT INTO `rating`(`p_id`, `user_id`, `rating`, `message`) VALUES ('$product_id','$rating_user_id','$rating_value','$rating_message')";
if (mysqli_query($connection, $sql)) {
	echo "Rating Submited!";
}
else{
	echo "Error";
}






?>