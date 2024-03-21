<?php
include ('../db/db.php');
session_start();
$OTP=$_SESSION['otp'];
$number = $_POST['number'];
$mobile_number = $_POST['mobile_number'];
if ($number == $OTP) {

	$squl_chk_password="SELECT * from user_details WHERE Mobile_No = '$mobile_number'";
			$result_password=mysqli_query($connection, $squl_chk_password);
			if (mysqli_num_rows($result_password) > 0) {
				echo "1";//Login Success
				foreach ($result_password as $row) {
					 $fullname =  $row['Name'];
						 setcookie('name', $fullname, time() + (86400 * 30), "/");
			              setcookie('user_id', $row['user_id'], time() + (86400 * 30), "/");
				}
			
			}
			


}
else{
	echo "OTP do not matched";
}

?>