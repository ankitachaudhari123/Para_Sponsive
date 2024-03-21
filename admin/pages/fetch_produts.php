<table class="table table-hover table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>product Name</th>
              <th>Product Price</th>
              <th>product discount</th>
              <th>Product Mrp</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            include('../../db/db.php');
            $sql = "SELECT * FROM `products`";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result)>0) {
              foreach ($result as $row) {
            ?>
            <tr>
              <td><?= $row['p_name']?></td>
              <td><?= $row['p_price']?></td>
              <td><?= $row['p_discount']?></td>
              <td><?= $row['p_mrp']?></td>
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