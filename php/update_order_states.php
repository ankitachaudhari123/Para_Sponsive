<?php
include('../db/db.php');
$id = $_GET['id'];
$status = $_GET['status'];
$sql = "UPDATE `order_details` SET status= '$status' WHERE id= '$id'";
if (mysqli_query($connection, $sql)) {
	echo "Request Cancel";
}
else{
	echo "please try again later";
}

?>