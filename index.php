<?php 
session_start();
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

</head>
<body>

<style type="text/css">
  #home-section{
    width: 100%;
    height: auto;
    margin-top: 3.5%;
  }
  #about-us-section{
    width: 100%;
    height: 700px;
    background: beige;
  }
  #services-section{
    width: 100%;
    height: 700px;
    background: pink;
  }
  #gallery-section{
    width: 100%;
    height: 700px;
    background: deeppink;
  }
  #contact-us-section{
    width: 100%;
    height: 700px;
    background: hotpink;
  }
  #footer-section{
    width: 100%;
    height: 700px;
    background: lightblue;
  }
    .img-1{
      width: ;
    }

.product_img_div{
  margin-bottom: 20px;
}
.icon-item{
  font-size: 40px!important;
  color: #221c24;
}
.cat-item{
  width:180px;
  height:230px;
  border-radius: 10px;
}
.Categories{
  margin-top: 5%;
  width: 100%;
  height: 180px;
  line-height: 180px;
  text-align: center;
}
.background-change{
  background: white;
  color: black;
}
</style>

<!--first 2 box-->
<section id="home-section">
<div class="container">
  <div  style="margin-top:10%; " class="row">

  <div class="col-md-6">
    <div class="card" style="width:100%;height: 350px;background: #e0aec1;background-image: url('img/clothing-banner-2.jpg');background-size: cover;">    
    </div>
  </div>
  <div class="col-md-6">
  <div class="card" style="width:100%;height: 350px;background: #afb0b2;background-image: url('');">
    </div>
    </div>
 </div> 
</div>

<!--dress icons -->
</section>
<section class="Categories">
<div class="container">
  <div class="row">
    <div class="col-md-2">
      <div class="cat-item cat-1" id="first">
        <img src="img/t-shirt.png">
        <h3>T-Shirt</h3>
      </div>
    </div>
     <div class="col-md-2">
      <div class="cat-item"  id="second">
        <img src="img/skirt.png">
        <h3>Skirts </h3>
      </div>
    </div>
    <div class="col-md-2">
      <div class="cat-item"   id="third">
        <img src="img/shoose.png">
        <h3>Sneakers</h3>
      </div>
    </div>
    <div class="col-md-2">
      <div class="cat-item"  id="four">
        <img src="img/trouser.png">
        <h3>Trousers</h3>
      </div>


    </div>
    <div class="col-md-2">
      <div class="cat-item" id="five">
        <img src="img/123.png">
        <h3>Shoes</h3>
      </div>


    </div>
    <div class="col-md-2">
      <div class="cat-item"  id="six" >
        <img src="img/456.png">
        <h3>Dresses</h3>
      </div>
    </div>
  </div>
  </div>
</section>
<div class="container">
<div class="row" style="margin-top:10%">

  <div class="col-md-7">

   <div class="row">

<?php
include 'db/db.php';
$ankita = " SELECT * FROM products WHERE status = 'Active' order by p_price asc ";
$total = mysqli_query($connection , $ankita);
if (mysqli_num_rows($total) > 0) {
   foreach ($total as $row) {
?>
<div class="col-md-6 product_img_div">
       
      <a href="view-product.php?image=<?=$row['p_img']?>&name=<?=$row['p_name']?>&price=<?=$row['p_price'] ?>&id=<?=$row['p_id']?>"> <div class="card"style=" width: 100%;height:400px;border-bottom-left-radius: 0px!important;border-bottom-right-radius: 0px!important;background :url('img/<?=$row['p_img']?>');background-size:cover;">
       </div></a>

       <div class="card" style="width: 100%;height:200px;background: white!important;border-top-left-radius: 0px!important;border-top-right-radius: 0px!important;text-align: center;">
         <h3 style="margin-top:60px!important;color: black;"> <?=$row['p_name'] ?></h3>
         <h6 style="color: #fe7e76;"><i class="fa-sharp fa-solid fa-indian-rupee-sign"></i> <?=$row['p_price'] ?> </h6>
         <div style="color:  #cccccc!important;">
           
           <i class="fa-solid fa-star"></i>
           <i class="fa-solid fa-star"></i>
           <i class="fa-solid fa-star"></i>
           <i class="fa-solid fa-star"></i>
           <i class="fa-solid fa-star"></i>
         </div>
       </div>
     </div>
<?php

  }
}
else{
  echo "data does not found";
}

?>
</div>
<div class="row">
  <div class="col-md-12">
    <center>
      <button type="button" class="btn btn-primary" style="background:white!important;color: black!important;margin-bottom: 10%!important; margin-top: 10%!important;">load more &nbsp;<i class="fas fa-redo"></i></button>

    </center>
  </div>
</div>
  </div>
  

  <div class="col-md-5">
    <div class="card" style=" width: 100%;height: 500px; background:url('img/profile_img.jpg');margin-bottom: 20px;background-size: cover;text-align: center;color:white!important;">
      <div class="container" style="margin-top:30%;">
      <h1 style=""> Best  discount</h1>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. </p>
      <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark" style="background:white!important;border: none!important;"> 50% OFF</button>

    </div>
    </div>
    <center>
    <div class="card" style=" width: 100%;height: 200px;   background:white!important;margin-bottom: 20px;">
      <br><br>
      <i class="fa-solid fa-truck icon-item"></i>
      <h4 style="color:black;">Free shipping</h4>
      <h5 style="color:#dfdfdf;"> Save up to <i class="fa-sharp fa-solid fa-indian-rupee-sign"></i>10</h5> 
    </div>

    <div class="card" style=" width: 100%;height: 200px;   background:white!important;margin-bottom: 20px;">
      <br><br>
      <i class="fas fa-receipt icon-item" ></i>
      <h4 style="color:black;">Members coupens</h4>
      <h5 style="color:#dfdfdf"> More save on purchase</h5>
    </div>

    <div class="card" style=" width: 100%;height: 200px;   background:white!important; margin-bottom: 20px;">
      <br><br>
      <i class="far fa-credit-card icon-item"  ></i>
      <h6 style="color:black;"> Secure payment</h6>
      <h5 style="color:#dfdfdf;"> All credit cards </h5> 
    </div>

    <div class="card" style=" width: 100%;height: 200px;   background:white!important;">
    <br><br>
      <i class="fas fa-stopwatch icon-item" ></i>
      <h4 style="color:black;">Fast Delivery</h4>
      <h5 style="color:#dfdfdf;">Fast time on delivery</h5>
    </div>
</center>
</div>
  </div>

</div>
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
          <a  class="nav-link" href="#home-section"> Home </a>
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
          href="cart.php">
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
          <!-- <i style="color:white!important;" class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span> -->
          <img src="img/profile.png">
        </a>

        <?php 
        if (isset($_COOKIE['name']) != '') {
          ?>

           <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

              <li>
            <a class="dropdown-item" href="">Hello, <?=$_COOKIE['name'];?></a>
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
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</html>
<script type="text/javascript">

  $(document).on('mouseover', '.cat-item', function(){
    var div_id = $(this).attr("id");     
    $(this).addClass("background-change");


    if (div_id == 'first') {
      $(this).html('<img src="img/t-shirt-2.png"><h3>T-Shirt</h3>');
    }
    else if (div_id == 'second') {
      $(this).html('<img src="img/skirt-2.png"><h3>Skirts </h3>');
    }
    else if (div_id == 'third') {
      $(this).html('<img src="img/shoose-2.png"><h3>Sneakers</h3>');
    }

    else if (div_id == 'four') {
      $(this).html('<img src="img/trouse-3.png"><h3>Trousers</h3>');
    }
    else if (div_id == 'five') {
      $(this).html('<img src="img/123-2.png"><h3>Shoes</h3>');
    }

    else if (div_id == 'six') {

      $(this).html('<img src="img/456-2.png"><h3>Dresses</h3>');
    }
  })

   $(document).on('mouseout', '.cat-item', function(){
    var div_id = $(this).attr("id");     
    $(this).removeClass("background-change");
     if (div_id == 'first') {
      $(this).html('<img src="img/t-shirt.png"><h3>T-Shirt</h3>');
    }
    else if (div_id == 'second') {
      $(this).html('<img src="img/skirt.png"><h3>Skirts </h3>');
    }
    else if (div_id == 'third') {
      $(this).html('<img src="img/shoose.png"><h3>Sneakers</h3>');
    }

    else if (div_id == 'four') {
      $(this).html('<img src="img/trouser.png"><h3>Trousers</h3>');
    }
    else if (div_id == 'five') {
      $(this).html('<img src="img/123.png"><h3>Shoes</h3>');
    }

    else if (div_id == 'six') {
      
      $(this).html('<img src="img/456.png"><h3>Dresses</h3>');
    }
   
    
  })
  
</script>

<script type="text/javascript">
  total_products();
  function total_products(){
    $.ajax({
      url:'php/count_products.php',
      method:'POST',
      data:{},
      success:function(res){
        $('.count_product').html(res);
      }
    })
  }

</script>