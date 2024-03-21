<table class="table table-hover table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>Name</th>
              <th>Email Id</th>
              <th>Mobile Number</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            include('../../db/db.php');
            $sql = "SELECT * FROM `user_details`";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result)>0) {
              foreach ($result as $row) {
            ?>
            <tr>
              <td><?= $row['Name']?></td>
              <td><?= $row['Email']?></td>
              <td><?= $row['Mobile_No']?></td>
              <td>
                <?php
                if ($row['Status']==0) {
                ?>
                  <span class="badge badge-warning rounded-pill d-inline">Active</span>
                <?php
                }
                elseif($row['Status']==1){
                ?>
                  <span class="badge badge-warning rounded-pill d-inline">Deactive</span>
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