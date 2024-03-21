<?php
include('../db/db.php');
$product_id = $_POST['product_id']; 
$sql = "SELECT rating.* , user_details.user_id , user_details.Name FROM rating INNER JOIN user_details ON rating.user_id=user_details.user_id WHERE rating.p_id= '$product_id'";

$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result)>0) {
	foreach ($result as $row) {
		 
		
		$rating_calc = $row['rating'];

		?>




<p style="margin-top:30px;margin-left: 30px;"> <?=$row['message'];?></p>
      <p style="margin-left:30px;margin-top: -10px;"> <?=$row['Name'];?></p>

      <div style="margin-left:30px;">

<?php

if ($rating_calc > 0 && $rating_calc< 2) {
?>

<i class="fa-solid fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>

<?php
}
else if ($rating_calc >= 2 && $rating_calc < 3) {
?>

<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>

<?php
}
else if ($rating_calc >= 3 && $rating_calc < 4) {
?>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>

<?php
}
else if ($rating_calc >= 4 && $rating_calc< 5) {
?>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-regular fa-star"></i>

<?php
}
else if ($rating_calc >= 5) {
?>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>

<?php
}
else{
?>

<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>

<?php
}

?>
  </div>

		<?php
	}
}


?>