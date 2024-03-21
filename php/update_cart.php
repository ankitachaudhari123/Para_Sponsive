<?php

include('../db/db.php');
$id = $_POST['id'];
$p_id = $_POST['p_id'];
$p_price = $_POST['p_price'];
$qty = $_POST['qty'];
$total = $p_price*$qty;

$sql = "UPDATE `cart` SET p_qty='$qty', total='$total' WHERE cart_id= '$id'";
mysqli_query($connection, $sql);



?>