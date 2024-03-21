<?php
include('../db/db.php');
 $shipping_id =$_POST['shipping_id'];
$sql = "SELECT * FROM shipping_address where id= '$shipping_id'";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result)>0) {
	foreach ($result as $row) {
		//$response = array("full_name"=>$row['full_name'],"mobile"=>$row['mobile']);
		$response = $row;
	}
}

echo json_encode($response);

?>