<?php
$order_id = "DMS".rand();


setcookie('order_id', $order_id, time() + (86400 * 30), "/" );
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
  rel="stylesheet"
/>
<style> @import url('https://fonts.googleapis.com/css2?family=Courgette&family=Nunito+Sans:wght@300&family=Rubik:ital@1&display=swap'); </style>
</head>

<style type="text/css">
  .menu-div{
  list-style: none;
  display: inline-flex;
  gap: 20px;
  }
</style>

<body>

<div style="width: 100%;height: 100px;margin-top: 5%;">
  <div class="container">

   <i onclick="goback();" class="fa-solid fa-house" style="margin-top:30px;font-size: 20px;"></i>

   <ul class="menu-div">
    <!-- <li> Home ></li>
    <li> Product ></li>
    <li> Sneakers ></li>
    <li> Striped t-shirt > </li> -->

    <li onclick="goback();"> Home ></li>
    <a href="my_orders.php" style="color: grey;"><li>Cart</li></a>
  

   </ul>
  </div>
</div>

<div class="container">
  <div class="row" >
  <div class="col-md-12" style=" height: auto;">

<?php
$connection = mysqli_connect("localhost", "root" , "","para_sponsive");
$user_id = $_COOKIE['user_id'];
$sum = 0;

$shipping_amount = 80;


$order_id = $_GET['order_id'];

$sql="SELECT orderd_product.*, products.* FROM orderd_product INNER JOIN products ON orderd_product.p_id=products.p_id WHERE orderd_product.orderd_id ='$order_id';";
$result=mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
   foreach ($result as $row) {

?>

<div class="card">
    <div class="row">
      <div class="col-md-3"style=" height: 200px;" >
        <img src="img/<?=$row['p_img']?>" style="width:50%;height:180px;margin-top: 5%;margin-left: 10%;border-radius: 10px;">
      </div>
      <div class="col-md-6"style=" height: 200px;">
        <h1 style="margin-top: 10%;color: black;font-size: 20px;"><?=$row['p_name']?></h1>
        <h1 style="color: black;font-size: 20px;">Quantity : <?=$row['qty']?></h1>
         
       

      </div>
      <div class="col-md-3"style=" height: 200px;">
        <h1 style="color: black;font-size: 20px;margin-top: 20%;">Rate : <?=$row['total']?></h1>    
        <h1 style="color: black;font-size: 20px;margin-top: 5%;">Total : <?=$row['total']?></h1>
      </div>
    </div>
    </div>

<?php
 $sum += $row['total'];
}


}
?>

  </div>

  </div>
</div>

<br><br><br>
<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    
    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div style="text-align: left;" class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-capitalize">premium Wordpress Theme</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <label>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco .</label>
            </li>
            
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div style="text-align:left;" class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-capitalize">Product Categories</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Dresses(2)</a>
            </li>
            <li>
              <a href="#!" class="text-white">Shoes(4)</a>
            </li>
            <li>
              <a href="#!" class="text-white"> Skirts(6)</a>
            </li>
            <li>
              <a href="#!" class="text-white">Sneakers(5)</a>
            </li>
            <li>
              <a href="#!" class="text-white">Trousers(12)</a>
            </li>
            <li>
              <a href="#!" class="text-white">Tshirts(12)</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
          
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">


          <div class="row">
            <div style="text-align:left;" class="col-md-6">
              <h5 class="text-capitalize">safe payment</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white"> <img src="img/head-1.png" style="width:80px;height:50px;"></a>
              <a href=""> <img src="img/head-2.png" style="width:80px;height:50px;"></a>
            </li> 

          </ul>
            </div>
            <div class="col-md-6">
              
            </div>
          </div>

          
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <footer class="text-center text-white" style="background-color: black;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f" style="color:white;"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter" style="color:white;"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google" style="color:white;"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram" style="color:white;"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin" style="color:white;"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github" style="color:white;"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <!-- Copyright -->
</footer>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<!-- Navbar -->
<nav style="position: fixed;width: 100%;top: 0;background: white;!important;" class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img src="img/logo.png" style="width: 50%;height: 50px;margin-left: 70px;">
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style=" margin-left: 300px;gap: 20px;">
        <li class="nav-item">
          <a  class="nav-link" href="index.php"> Home </a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="#about-us-section"> Shop </a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="#services-section"> Pages </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallery-section"> Categories </a>
        </li>
        
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      
     

<div class="dropdown">
        <a
          
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
         
         
        >
          <!-- <i style="color:white!important;" class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span> -->
          <img src="img/profile.png">
        </a>

        <?php 
        if (isset($_COOKIE['name']) != '') {
          ?>

           <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
            <a class="dropdown-item" href="logout.php">Hello, <?=$_COOKIE['name'];?></a>
          </li>


          <li>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </li>
         
        
        </ul>
          <?php
        }
        else{
        ?>

         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="login.php">Login</a>
          </li>
          <li>
            <a class="dropdown-item" href="resister.php">Register</a>
          </li>
        
        </ul>
        <?php
        }

        ?>
      
      </div> 
      
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

</body>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</html>
<script type="text/javascript">
  function goback(){
   location.href="./";
  }

  total_products();
  function total_products(){
    $.ajax({
      url:'php/count_products.php',
      method:'POST',
      data:{},
      success:function(res){
        //alert(res);
        $('.count_product').html(res);
      }
    })
  }

function add_to_cart(){
  var p_id = $('.p_id_text').val(); 
  var p_price = $('.p_price_text').val(); 
  var p_qty = $('.p_qty_text').val(); 


  $.ajax({
    url:'add_to_cart_insert.php',
    method:'POST',
    data:{p_id:p_id, p_price:p_price, p_qty:p_qty},
    success:function(res){
      alert(res);
      total_products();
    }
  })

}

$('.delete_prorduct').click(function(){
  var cart_id = $(this).attr("id");

  $.ajax({

    url:'php/delete_cart_product.php',
    method:'POST',
    data:{cart_id:cart_id},
    success:function(res){
      alert(res);
      location.reload();
    }
  })
})

</script>