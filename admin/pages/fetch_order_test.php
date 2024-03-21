<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>Title</th>
      <th>Status</th>
      <th>Date And Time</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'para_sponsive');
$sql = "SELECT order_details.*, user_details.* FROM order_details INNER JOIN user_details ON order_details.user_id = user_details.user_id ORDER BY order_details.id DESC";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result)>0) {
	foreach($result as $row ){
		$status = $row['status'];
?>

<tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/8.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1"><?= $row['Name']?></p>
            <p class="text-muted mb-0"><?= $row['Email']?></p>
          </div>
        </div>
      </td>
      <td>
        <input type="hidden" name="" class="cust_name<?=$row['id']?>" value="<?=$row['Name']?>">
        <input type="hidden" name="" class="cust_order_id<?=$row['id']?>" value="<?=$row['order_id']?>">

        <input type="hidden" name="" class="user_id<?=$row['id']?>" value="<?=$row['user_id']?>">



        <p class="fw-normal mb-1">Order Id : <?= $row['order_id']?></p>
        <p class="text-muted mb-0">Grand Total : <?= $row['grand_total']?></p>
      </td>
      <td>

      	<?php

      	if ($status==0) {
      	?>	

      	<span class="badge badge-warning rounded-pill d-inline">Panding</span>

      	<?php
      	}
      	elseif ($status==1) {

      	?>
      	<span class="badge badge-primary rounded-pill d-inline">Confirm</span>

      	<?php
      	}
      	elseif ($status==2) {

      	?>
      	<span class="badge badge-danger rounded-pill d-inline">Cancel</span>      

      	<?php
      	}
      	elseif ($status==3) {
      	?>
      	<span class="badge badge-success rounded-pill d-inline">Delivered</span>
      	<?
      	}
      	else{
      		?>

      		
      		<?php
      	}

      	?>

      </td>
      <td><?= $row['order_date']?></td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded open_modal" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop" id="<?=$row['id']?>">
          Edit
        </button>
      </td>
    </tr>


<?php


	}
}


?>


  </tbody>
</table>
