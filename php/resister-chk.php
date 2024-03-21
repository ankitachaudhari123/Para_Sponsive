<?php
$connection= mysqli_connect('localhost','root','','para_sponsive');

$name=$_POST['full_name'];
$email=$_POST['email'];
$mobile_no=$_POST['mobile'];
$password=$_POST['password'];

$sql_chk_email ="SELECT Email from user_details WHERE Email='$email'";

$result_email = mysqli_query($connection, $sql_chk_email);

if(mysqli_num_rows($result_email)>0){
      echo "1"; //Email is already exist
}


else 
{

$sql_chk_moblie="SELECT mobile_no from user_details WHERE mobile_no='$mobile_no'";

$result_mobile=mysqli_query($connection, $sql_chk_moblie);

if (mysqli_num_rows($result_mobile)>0) {
	echo "2"; //mobile_no is already exist
}

else
{

$sql="INSERT INTO `user_details`( `Email`, `Password`, `Mobile_No`, `Name`, `User_Profile_image`, `Status`) VALUES ('$email','$password','$mobile_no','$name','','')";

     if(mysqli_query($connection , $sql)){
     	echo "3"; //success
     }
     else{
     	echo "4"; //error
     }
}


}


?>
