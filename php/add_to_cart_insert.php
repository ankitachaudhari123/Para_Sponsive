<?php 
$connection = mysqli_connect("localhost", "root" , "","para_sponsive");
$p_id = $_POST['p_id'];
$p_price = $_POST['p_price'];
$p_qty = $_POST['p_qty'];
$total = $p_price * $p_qty;
$user_id = $_COOKIE['user_id'];


$sql_chk = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
$result_chk = mysqli_query($connection, $sql_chk);
if (mysqli_num_rows($result_chk) > 0) {
	// echo "Product already Added";

   $sql_update = "UPDATE cart SET p_price = '$p_price', p_qty = p_qty + '$p_qty', total = p_qty * '$p_price' WHERE p_id = '$p_id'";
  	if(mysqli_query($connection, $sql_update)){
	echo "Product updated!";
	}
	else{
		echo "Something went wrong!";
	}
}
else{
	
	$sql = "INSERT INTO cart (p_id, user_id, p_price, p_qty, total) VALUES ('$p_id', '$user_id', '$p_price', '$p_qty', '$total')";
	if(mysqli_query($connection, $sql)){
	echo "Product added!";
	}
	else{
	echo "Something went wrong!";
	}


}

?>