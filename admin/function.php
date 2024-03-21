<?php

include('../db/db.php');
$curent_date = date('Y-m-d');


$sql_total_amount= "SELECT sum(total_amount) as total_amount FROM order_details  WHERE status=3";
$result_total_amount= mysqli_query($connection , $sql_total_amount);
if (mysqli_num_rows($result_total_amount)>0) {
	foreach ($result_total_amount as $row) {
		$total_amount= $row['total_amount'];
	}
}

$sql_pending_orders= "SELECT COUNT(id) as pending_orders FROM `order_details` WHERE status=0";
$result_pending_orders= mysqli_query($connection , $sql_pending_orders);
if (mysqli_num_rows($result_pending_orders)>0) {
	foreach ($result_pending_orders as $row) {
		$pending_orders= $row['pending_orders'];
	}
}


$sql_confirm_orders= "SELECT COUNT(id) as confirm_orders FROM `order_details` WHERE status=1";
$result_confirm_orders= mysqli_query($connection , $sql_confirm_orders);
if (mysqli_num_rows($result_confirm_orders)>0) {
	foreach ($result_confirm_orders as $row) {
		$confirm_orders= $row['confirm_orders'];
	}
}


$sql_delived_orders= "SELECT COUNT(id) as delived_orders FROM `order_details` WHERE status=3";
$result_delived_orders= mysqli_query($connection , $sql_delived_orders);
if (mysqli_num_rows($result_delived_orders)>0) {
	foreach ($result_delived_orders as $row) {
		$delived_orders= $row['delived_orders'];
	}
}

$sql_cancel_orders= "SELECT COUNT(id) as cancel_orders FROM `order_details` WHERE status=2";
$result_cancel_orders= mysqli_query($connection , $sql_cancel_orders);
if (mysqli_num_rows($result_cancel_orders)>0) {
	foreach ($result_cancel_orders as $row) {
		$cancel_orders= $row['cancel_orders'];
	}
}

$sql_total_customer= "SELECT COUNT(user_id) as total_customer FROM `user_details` ";
$result_total_customer= mysqli_query($connection , $sql_total_customer);
if (mysqli_num_rows($result_total_customer)>0) {
	foreach ($result_total_customer as $row) {
		$total_customer= $row['total_customer'];
	}
}


$sql_todays_orders= "SELECT COUNT(id) as todays_orders FROM `order_details` WHERE order_date= CURDATE()";
$result_todays_orders= mysqli_query($connection , $sql_todays_orders);
if (mysqli_num_rows($result_todays_orders)>0) {
	foreach ($result_todays_orders as $row) {
		$todays_orders= $row['todays_orders'];
	}
}


$sql_total_products= "SELECT COUNT(p_id) as total_products FROM `products` ";
$result_total_products= mysqli_query($connection , $sql_total_products);
if (mysqli_num_rows($result_total_products)>0) {
	foreach ($result_total_products as $row) {
		$total_products= $row['total_products'];
	}
}
?>