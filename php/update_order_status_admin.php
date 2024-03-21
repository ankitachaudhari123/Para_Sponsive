<?php 
include('../db/db.php');
$status = $_POST['status'];
$o_id = $_POST['o_id'];
$order_id = $_POST['order_id'];
$customer_name = $_POST['customer_name'];
$user_id = $_POST['user_id'];


$sql_fetch = "SELECT * FROM user_details WHERE user_id = '$user_id'";
$result = mysqli_query($connection, $sql_fetch);
if (mysqli_num_rows($result) > 0) {
	foreach ($result as $row) {
		$mobile_no = $row['Mobile_No'];
	}
}


$sql = "UPDATE `order_details` SET status = '$status' WHERE id= '$o_id'";
if (mysqli_query($connection, $sql)) {
	echo "Request Updated";


if ($status == 0) {
	$status_new = "Pending";
}
else if ($status == 1) {
	$status_new = "Confirm";
}
else if ($status == 2) {
	$status_new = "Cancel";
}
else if ($status == 3) {
	$status_new = "Delivered";
}

// $fields = array(
//     "sender_id" => "CMPSLR",
//     "message" => "139227",
//     "variables_values" => $customer_name."|".$mobile_no."|".$status_new,
//     "route" => "dlt",
//     "numbers" => $mobile_no,
// );

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_SSL_VERIFYHOST => 0,
//   CURLOPT_SSL_VERIFYPEER => 0,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "POST",
//   CURLOPT_POSTFIELDS => json_encode($fields),
//   CURLOPT_HTTPHEADER => array(
//     "authorization: enMHh29XWRsEAT3km1iwtDl8YyF5b0gcSLx7p4qIP6odBjzCOraYMyRohu7BNKvmZbS8jqdL59kcg4zl",
//     "accept: */*",
//     "cache-control: no-cache",
//     "content-type: application/json"
//   ),
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }



}
else{
	echo "please try again later";
}








?>