<?php
session_start();
$connection= mysqli_connect("localhost", "root", "", "para_sponsive");
date_default_timezone_set('Asia/Kolkata');



$full_name = $_POST['full_name2'];
$mobile_no = $_POST['mobile_no'];
$pin_code = $_POST['pin_code'];
$house_name = $_POST['house_name'];
$area = $_POST['area'];
$lamdmark = $_POST['lamdmark'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];

$sql="INSERT INTO `shipping_address`(`full_name`, `mobile`, `pincode`, `flat_name_or_house_no`, `area_or_street`, `landmark`, `town_or_city`, `state`, `countary`) VALUES ('$full_name','$mobile_no','$pin_code','$house_name','$area','$lamdmark','$city','$state','$country')";

if(mysqli_query($connection,$sql)){
	 $last_id = $connection->insert_id;
	 $_SESSION['shipping_id'] = $last_id;

}

 
session_start();


$user_id = $_COOKIE['user_id'];
$order_id = $_COOKIE['order_id'];
$sql = "SELECT * FROM cart WHERE user_id = '$user_id'";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
	foreach ($result as $row) {
		$p_id = $row['p_id'];
		$p_price = $row['p_price'];
		$qty = $row['p_qty'];
		$total = $row['total'];
		$sql_insert = "INSERT INTO `orderd_product`(`user_id`, `orderd_id`, `p_id`, `price`, `qty`, `total`) VALUES ('$user_id','$order_id','$p_id','$p_price','$qty','$total')";
		if(mysqli_query($connection, $sql_insert)){

			// $sql_delete = "DELETE FROM `cart` WHERE user_id ='$user_id'";
			// mysqli_query($connection, $sql_delete);
		}


	}
}



$sum = $_SESSION['total'];
$shipping_amount = $_SESSION['shipping_amount'];
$grand_total = $_SESSION['grand_total'];

$shipping_id = $_SESSION['shipping_id'];

$order_id = $_COOKIE['order_id'];
$order_date = date('Y-m-d');
$user_id = $_COOKIE['user_id'];


$sql="INSERT INTO `order_details`( `user_id`, `order_id`, `order_date`, `shopping_id`, `total_amount`, `shipping_amount`, `grand_total`, `payment_status`, `status`) VALUES ('$user_id','$order_id ','$order_date','$shipping_id','$sum','$shipping_amount','$grand_total', '0', '0')";


mysqli_query($connection, $sql);


?>