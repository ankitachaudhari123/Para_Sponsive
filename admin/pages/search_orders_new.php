<?php
if ($_POST['search_text'] == '') {
?>

<table class="table table-hover table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>Order Id</th>
              <th>User Details</th>
              <th>Amount</th>
              <th>Status</th>
              <th></th>
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
              <td><?= $row['order_id']?></td>
              <td><?= $row['Name']?><br>
                 <?= $row['Email']?>
              </td>
              <td>ipsum</td>
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
              <td style="width: 100px">
                <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                  <span class="fa fa-pencil"></span>
                </a>
                <a href="#" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Tooltip on top" onclick="return confirm('Are you sure?')">
                  <span class="fa fa-trash"></span>
                </a>
              </td>
            </tr>


<?php


  }
}


?>


          </tbody>
        </table>



<?php	
}
else{
$search_text = $_POST['search_text'];
?>

<table class="table table-hover table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>Order Id</th>
              <th>User Details</th>
              <th>Amount</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>


<?php
$connection = mysqli_connect('localhost', 'root', '', 'para_sponsive');
$sql = "SELECT order_details.*, user_details.* FROM order_details INNER JOIN user_details ON order_details.user_id = user_details.user_id  WHERE order_details.order_id LIKE '%$search_text%' ORDER BY order_details.id DESC";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result)>0) {
  foreach($result as $row ){
    $status = $row['status'];
?>


            <tr>
              <td><?= $row['order_id']?></td>
              <td><?= $row['Name']?><br>
                 <?= $row['Email']?>
              </td>
              <td>ipsum</td>
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
              <td style="width: 100px">
                <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                  <span class="fa fa-pencil"></span>
                </a>
                <a href="#" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Tooltip on top" onclick="return confirm('Are you sure?')">
                  <span class="fa fa-trash"></span>
                </a>
              </td>
            </tr>


<?php


  }
}


?>


          </tbody>
        </table>

<?php
}
?>