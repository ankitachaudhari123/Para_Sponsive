<?php 
$connection=mysqli_connect('localhost','root','','para_sponsive');
$cart_id = $_POST['cart_id'];
$sql="DELETE FROM `cart` WHERE cart_id = '$cart_id'";
if(mysqli_query($connection, $sql)){
	echo "Product Deleted";
}
else{
	echo 'sommting went wrong';
}


?>