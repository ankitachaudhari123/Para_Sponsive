<?php 
include('../../db/db.php');

$target_dir = "../../img/";
$target_file = $target_dir . basename($_FILES["product_image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$check = getimagesize($_FILES["product_image"]["tmp_name"]);

$product_image_name =  basename($_FILES["product_image"]["name"]);
$product_name = $_POST['product_name'];
$p_price = $_POST['p_price'];
$p_discount = $_POST['p_discount'];
$p_mrp = $_POST['p_mrp'];
$p_discription = $_POST['p_discription'];
$p_pty = $_POST['p_pty'];
$status = $_POST['status'];


$sql = "INSERT INTO `products`(`p_name`, `p_img`, `p_price`, `p_discount`, `p_mrp`, `p_des`, `p_qty`, `status`) VALUES ('$product_name','$product_image_name','$p_price','$p_discount','$p_mrp','$p_discription','$p_pty','$status')";

if(mysqli_query($connection, $sql)){
	move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);
}

?>