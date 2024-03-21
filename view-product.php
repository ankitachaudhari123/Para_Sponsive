<?php
$connection = mysqli_connect("localhost", "root" , "","para_sponsive");
$id = $_GET['id'];
$ankita = " SELECT * FROM products where p_id = '$id' ";
$total = mysqli_query($connection , $ankita);
if (mysqli_num_rows($total) > 0) {
   foreach ($total as $row) {
     $p_price =  $row['p_price'];
   }
}


$sql_users = "SELECT count(id) as total_users FROM rating where p_id = '$id'";
$total_users = mysqli_query($connection, $sql_users);
if (mysqli_num_rows($total_users)>0) {
  foreach($total_users as $row){
     $total_users = $row['total_users'];
  }
}


$sql_rating = "SELECT SUM(rating) as total_rating FROM rating where p_id = '$id'";
$total_rating = mysqli_query($connection, $sql_rating);
if (mysqli_num_rows($total_rating)>0) {
  foreach($total_rating as $row){
   $total_rating = $row['total_rating'];
  }
}


if ($total_users == 0) {
  $rating_calc = 0;
}
else{
$rating_calc =  $total_rating /  $total_users;
 }

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
  .active{
  color: orange;
}

</style>

<body>

<div style="width: 100%;height: 100px;margin-top: 5%;">
  <div class="container">

   <i onclick="goback();" class="fa-solid fa-house" style="margin-top:30px;font-size: 20px;"></i>

   <ul class="menu-div">

    <li onclick="goback();"> Home ></li>
    <li> Product ></li>
    <li> <?=$_GET['name']?></li>

   </ul>
  </div>
</div>

  <div class="container">
  <div class="row" >
    <div class="col-md-6">

      <center >

    <img src="img/<?=$_GET['image']?>" style=" width:60% ; ">

  </center>

  </div>
  
<div class="col-md-6">
    
    <h1> <?=$_GET['name']?></h1>

<?php

if ($rating_calc>0 && $rating_calc< 2) {
?>

<i class="fa-solid fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>

<?php
}
elseif ($rating_calc>2 && $rating_calc< 3) {
?>

<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>

<?php
}
elseif ($rating_calc>3 && $rating_calc< 4) {
?>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-regular fa-star"></i>
<i class="fa-regular fa-star"></i>

<?php
}
elseif ($rating_calc>4 && $rating_calc< 5) {
?>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-regular fa-star"></i>

<?php
}
elseif ($rating_calc >= 5) {
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
    <p> (1 customer review)
    <p> <i class="fa-solid fa-indian-rupee-sign"></i><?=$p_price?> </p>

    <input type="hidden" name="p_id" class="p_id_text" value="<?=$_GET['id']?>">
    <input type="hidden" name="p_price" class="p_price_text" value="<?=$p_price?>">
    <input type="number" name="p_qty" class="p_qty_text" min="1" style=" height: 50px;padding-left: 10px;font-size: 20px;font-weight: bold;" value="1"> 
    &nbsp; 


    <?php 
    if (isset($_COOKIE['name']) != '') {
      ?>  
          <button type="submit" class="btn btn-primary add_to_cart_btn" onclick="add_to_cart()" style=" height: 50px; background: #f15450!important;"> Add to cart <i class="fas fa-shopping-cart"></i> </button>

      <?php
    }
    else{
      ?>
        <a href="login-products.php"> <button type="submit" class="btn btn-primary add_to_cart_btn" style=" height: 50px; background: #f15450!important;"> Add to cart <i class="fas fa-shopping-cart"></i> </button></a>


      <?php
    }
    ?>
    <br>
  <button type="button" class="btn btn-primary" style=" width: 80%; height: 50px; background: #ffc43a!important; margin-top: 20px; font-size:20px;font-family: 'Rubik', sans-serif;text-transform: capitalize!important;font-weight: bold;"><span style="color:#003087;">Pay</span><span style="color:#009cde;">Pal</span></button>
    <p style="margin-top:20px;"> SKU : woo-hoodie-with-zipper</p>
    <hr>
    <p> Categories : Sheakers , Trousers , Tshirts</p>
    <hr>

    <!-- Tabs navs -->
<ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="ex1-tab-1"
      data-mdb-toggle="tab"
      href="#ex1-tabs-1"
      role="tab"
      aria-controls="ex1-tabs-1"
      aria-selected="true"
      >  Description </a>
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-2"
      data-mdb-toggle="tab"
      href="#ex1-tabs-2"
      role="tab"
      aria-controls="ex1-tabs-2"
      aria-selected="false"
      > Reviews </a
    >
  </li>
  
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex1-content">
  <div
    class="tab-pane fade show active"
    id="ex1-tabs-1"
    role="tabpanel"
    aria-labelledby="ex1-tab-1"
  >
    <h1 style="color: black!important;"> Description</h1>
    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
    <h3 style="color:black!important;">review for striped t-shirt</h3>




    <div style="width:100%;display: inline-flex;">

    <div style="width:100px;height:100px; border-radius: 50%;background: url('img/1.jpg'); margin-top: 20px; background-size: cover;">
      
    </div>

    <!-- <p style="margin-top:40px;margin-left: 30px;"> gogetthemes-october 18,2018</p>
    <p style="margin-top:50px; margin-left:20px;margin-top: 40px;"> test</p> -->
    <div class="description-text" id="fetch_rating">
      
    </div>
  
  </div>
  </div>
</div>
<!-- Tabs content -->
  </div>
  

</div>

</div>

<div class="container" style="width:100%;height:600px;">
  
  <p style="font-size:30px;"> Add a review</p>
  <p> Your email address will not be published . Requried fields are marked *</p>
  <p> your rating *</p>



  <!-- <i class="fas fa-star "></i> -->



<i class="far fa-star rating " id="1"></i>
<i class="far fa-star rating" id="2"></i>
<i class="far fa-star rating" id="3"></i>
<i class="far fa-star rating" id="4"></i>
<i class="far fa-star rating" id="5"></i>


  <p> your review *</p>

<div class="row">
  <div class="col-md-8">
  <textarea style="width:100%; height: 200px;background: #eeeeee;border-radius: 10px; border:none;" class="rating_message"></textarea>
</div>
</div>


<button type="button" class="btn btn-primary" onclick="save_review()" style="margin-top: 20px;background: #eeeeee;color: black;border: none;">Submit</button>
</div>


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
          <a  class="nav-link" href="index.html"> Home </a>
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
          class="text-reset me-3 dropdown-toggle hidden-arrow"
          href="cart.php"
          
        >
         <i class="fas fa-shopping-cart"></i>

<span class="badge rounded-pill badge-notification bg-danger count_product">0</span>
        </a>
      </div>

<div class="dropdown">
        <a
          
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
         
         
        >
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
            <a class="dropdown-item" href="my_orders.php">My Orders</a>
          </li>

          <li>
            <a class="dropdown-item" href="php/logout.php">Logout</a>
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

<input type="hidden" class="product_id" name="" value="<?=$_GET['id']?>">
<input type="hidden" name="" class="rating_user_id" value="<?=$_COOKIE['user_id']?>">
<input type="hidden" class="rating_value" name="">

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
    window.history.back();
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
  };

function add_to_cart(){
  var p_id = $('.p_id_text').val(); 
  var p_price = $('.p_price_text').val(); 
  var p_qty = $('.p_qty_text').val(); 


  $.ajax({
    url:'php/add_to_cart_insert.php',
    method:'POST',
    data:{p_id:p_id, p_price:p_price, p_qty:p_qty},
    success:function(res){
      alert(res);
       total_products();
    }
  })

};
fetch_rating();
function fetch_rating(){
  var product_id = $('.product_id').val();
$.ajax({
      url:'php/feach_user_rating.php',
      method:'POST',
      data:{product_id:product_id},
      success:function(res){
        //alert(res);
        $('#fetch_rating').html(res);
      }
    })
}

$('.rating').click(function(){
  var id = $(this).attr("id");
  $('.rating_value').val(id);   

  if (id==1) {
    $('#1').addClass('active');
    $('#1').addClass('fas');
    $('#1').removeClass('far');

    $('#2').addClass('far');  
    $('#3').addClass('far');
    $('#4').addClass('far');    
    $('#5').addClass('far');

    $('#2').removeClass('fas'); 
    $('#3').removeClass('fas');
    $('#4').removeClass('fas');   
    $('#5').removeClass('fas');

    $('#2').removeClass('active');  
    $('#3').removeClass('active');
    $('#4').removeClass('active');    
    $('#5').removeClass('active');
  }
  else if (id==2){
    $('#1').addClass('active');
    $('#1').addClass('fas');
    $('#1').removeClass('far');

    $('#2').addClass('active');
    $('#2').addClass('fas');
    $('#2').removeClass('far');

    $('#3').addClass('far');
    $('#4').addClass('far');    
    $('#5').addClass('far');

    $('#3').removeClass('fas');
    $('#4').removeClass('fas');   
    $('#5').removeClass('fas');

     $('#3').removeClass('active');
    $('#4').removeClass('active');    
    $('#5').removeClass('active');
  }
  else if (id==3){
    $('#1').addClass('active');
    $('#1').addClass('fas');
    $('#1').removeClass('far');

    $('#2').addClass('active');
    $('#2').addClass('fas');
    $('#2').removeClass('far');

    $('#3').addClass('active');
    $('#3').addClass('fas');
    $('#3').removeClass('far');

    $('#4').addClass('far');    
    $('#5').addClass('far');

    $('#4').removeClass('fas');   
    $('#5').removeClass('fas');

    $('#4').removeClass('active');    
    $('#5').removeClass('active');
  }
  else if (id==4){
    $('#1').addClass('active');
    $('#1').addClass('fas');
    $('#1').removeClass('far');

    $('#2').addClass('active');
    $('#2').addClass('fas');
    $('#2').removeClass('far');

    $('#3').addClass('active');
    $('#3').addClass('fas');
    $('#3').removeClass('far');

    $('#4').addClass('active');
    $('#4').addClass('fas');
    $('#4').removeClass('far');

    $('#5').addClass('far');

    $('#5').removeClass('fas');

    $('#5').removeClass('active');

  }
  else{
    $('#1').addClass('active');
    $('#1').addClass('fas');
    $('#1').removeClass('far');

    $('#2').addClass('active');
    $('#2').addClass('fas');
    $('#2').removeClass('far');

    $('#3').addClass('active');
    $('#3').addClass('fas');
    $('#3').removeClass('far');

    $('#4').addClass('active');
    $('#4').addClass('fas');
    $('#4').removeClass('far');

    $('#5').addClass('active');
    $('#5').addClass('fas');
    $('#5').removeClass('far');
  }
  });
function save_review(){
var product_id = $('.product_id').val();
var rating_user_id = $('.rating_user_id').val();
var rating_value = $('.rating_value').val();
var rating_message = $('.rating_message').val();

$.ajax({
  url:'php/rating_insert.php',
  method:'POST',
  data:{product_id:product_id, rating_user_id:rating_user_id, rating_value:rating_value, rating_message:rating_message},
  success:function(res){
    alert(res);
    fetch_rating();
  }
})


}
</script>