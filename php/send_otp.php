<?php
include ('../db/db.php');
session_start();

$mobile=$_POST['mobile'];
$OTP=rand(1111, 9999);
$_SESSION['otp'] = $OTP;

$sql ="SELECT * FROM `user_details` WHERE Mobile_No = '$mobile'";
$result = mysqli_query($connection,  $sql);
if (mysqli_num_rows($result)>0) {
 

$fields = array(
    "sender_id" => "DMSTEC",
    "message" => "144247",
    "variables_values" => $OTP,
    "route" => "dlt",
    "numbers" => $mobile,
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: enMHh29XWRsEAT3km1iwtDl8YyF5b0gcSLx7p4qIP6odBjzCOraYMyRohu7BNKvmZbS8jqdL59kcg4zl",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
	echo "1";
}


}
else{

echo "Mobile Number is not resister";

}












?>