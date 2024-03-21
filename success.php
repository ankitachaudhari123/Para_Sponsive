
<?php
 	$connection= mysqli_connect("localhost", "root", "", "para_sponsive");

$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="UkojH5TS";

$order_id = $_GET['order_id'];
$user_id = $_GET['user_id'];

// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
       if ($hash != $posted_hash) {

	       echo "Invalid Transaction. Please try again";

	      
		   	$sql2= "UPDATE order_details SET payment_status = '2' WHERE order_id = '$order_id'";
		   	mysqli_query($connection, $sql2);

		   	$sql_delete = "DELETE FROM `cart` WHERE user_id ='$user_id'";
			mysqli_query($connection, $sql_delete);





		   } else {

		  
		   	$sql= "UPDATE order_details SET payment_status = '1' WHERE order_id = '$order_id'";
		   	mysqli_query($connection, $sql);

		   	$sql_delete = "DELETE FROM `cart` WHERE user_id ='$user_id'";
			mysqli_query($connection, $sql_delete);


			$sql_product = "SELECT * FROM orderd_product WHERE orderd_id = '$order_id'";
			$result_product = mysqli_query($connection, $sql_product);
			if (mysqli_num_rows($result_product)>0) {
				foreach ($result_product as $row) {
					$id = $row['p_id'];
					$qty = $row['qty'];

			  $sql_update_product= "UPDATE products set p_qty = p_qty-'$qty' WHERE p_id= '$id'";
			  mysqli_query($connection, $sql_update_product);

				}
			}
          // echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          // echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          // echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";

		   	?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<center>
<img src="img/success2.gif" style="width:30%;height:30%;">
<div>
	<h4>ORDERID : <?=$_GET['order_id']?></h4>
</div>


</center>
</body>
</html>


		   	<?php
		   }
?>	








