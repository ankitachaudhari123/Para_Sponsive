<?php 
$connection = mysqli_connect("localhost", "root", "","para_sponsive");

if (isset($_COOKIE['user_id']) != '') {
$user_id = $_COOKIE['user_id'];
$sql = "SELECT SUM(p_qty) as total_product FROM cart WHERE user_id = '$user_id'";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
	foreach ($result as $row) {
		echo  $row['total_product'];
	}
}
}else{
	echo "";
}

?>