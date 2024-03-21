<?php
include("function.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<style type="text/css">
	body {
  padding-top: 50px;
}

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

.navbar-fixed-top {
  border: 0;
}

/* Hide for mobile, show later */
.sidebar {
  position: fixed;
  top: 51px;
  bottom: 0;
  left: 0;
  z-index: 1000;
  padding: 20px;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
  background-color: #f5f5f5;
  border-right: 1px solid #eee;
  
  .list-group-item {
    &+ .list-group {
      margin-left: 10px;
    }
    
    &.collapsed {
      .caret {
          border-top: 8px solid;
          border-bottom: 0;
      }
    }
    .caret {
      float: right;
      margin-top: 6px;
      border-bottom: 8px solid;
      border-top: 0;
    }
  }
}

@media (min-width: 768px) {
  .sidebar {
    display: block;
    height: auto !important;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}

/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}

/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
  h4 {
    margin-bottom: 0;
    font-size: 36px;
  }
}
.lds-spinner {
  color: official;
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
   margin-top: 20%;
}
.lds-spinner div {
  transform-origin: 40px 40px;
  animation: lds-spinner 1.2s linear infinite;
}
.lds-spinner div:after {
  content: " ";
  display: block;
  position: absolute;
  top: 3px;
  left: 37px;
  width: 6px;
  height: 18px;
  border-radius: 20%;
  background: black;
}
.lds-spinner div:nth-child(1) {
  transform: rotate(0deg);
  animation-delay: -1.1s;
}
.lds-spinner div:nth-child(2) {
  transform: rotate(30deg);
  animation-delay: -1s;
}
.lds-spinner div:nth-child(3) {
  transform: rotate(60deg);
  animation-delay: -0.9s;
}
.lds-spinner div:nth-child(4) {
  transform: rotate(90deg);
  animation-delay: -0.8s;
}
.lds-spinner div:nth-child(5) {
  transform: rotate(120deg);
  animation-delay: -0.7s;
}
.lds-spinner div:nth-child(6) {
  transform: rotate(150deg);
  animation-delay: -0.6s;
}
.lds-spinner div:nth-child(7) {
  transform: rotate(180deg);
  animation-delay: -0.5s;
}
.lds-spinner div:nth-child(8) {
  transform: rotate(210deg);
  animation-delay: -0.4s;
}
.lds-spinner div:nth-child(9) {
  transform: rotate(240deg);
  animation-delay: -0.3s;
}
.lds-spinner div:nth-child(10) {
  transform: rotate(270deg);
  animation-delay: -0.2s;
}
.lds-spinner div:nth-child(11) {
  transform: rotate(300deg);
  animation-delay: -0.1s;
}
.lds-spinner div:nth-child(12) {
  transform: rotate(330deg);
  animation-delay: 0s;
}
@keyframes lds-spinner {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

</style>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <button type="button" class="navbar-toggle collapsed pull-left visible-xs" data-toggle="collapse" data-target="#sidebar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="#">Admin Template</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Help</a></li>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right">
        <input type="text" class="form-control search_text" placeholder="Search...">
        <button class="btn btn-primary">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar collapse" id="sidebar">
      <div class="list-group">
        <a href="dashboard.php" class="list-group-item active"><span class="fa fa-fw fa-dashboard"></span> Dashboard</a>
        <a href="#" class="list-group-item"><span class="fa fa-fw fa-dashboard"></span> Products <span class="badge badge-dark badge-pill pull-right">14</span></a>
        <a href="#" class="list-group-item"><span class="fa fa-fw fa-dashboard"></span> Categories <span class="badge badge-dark badge-pill pull-right">14</span></a>
        <!-- <a href="#" class="list-group-item collapsed" data-target="#submenu1" data-toggle="collapse" data-parent="#sidebar"><span class="fa fa-fw fa-dashboard"></span> Categories<span class="caret arrow"></span></a>
          <div class="list-group collapse" id="submenu1">
            <a href="#" class="list-group-item">Category</a>
            <a href="#" class="list-group-item">Category</a>
          </div> -->
        <a href="users.php" class="list-group-item"><span class="fa fa-fw fa-dashboard"></span> Users <span class="badge badge-dark badge-pill pull-right"><?=$total_customer?></span></a>
        <a href="#" class="list-group-item"><span class="fa fa-fw fa-dashboard"></span> Orders <span class="badge badge-dark badge-pill pull-right"><?=$pending_orders?></span></a>
      </div>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header">Orders</h1>

  
      <!-- Button trigger modal -->
     <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Save</button>
            </div>
          </div>
        </div>
      </div>


      <!-- <h1 class="sub-header">
        <div class="btn-group pull-right" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Print</button>
        <button type="button" class="btn btn-primary">Export</button>
      </div>
       
      </h1> -->
      <div class="table-responsive" id="fetch_orders_new">
        <center>
        <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </center>
      </div>
      
      








    </div>
  </div>
</div>
</body>
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</html>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

fetch_orders_new();
function fetch_orders_new(){
  $.ajax({
    url:'pages/fetch_orders_new.php',
    method:'POST',
    success:function(data){
      $('#fetch_orders_new').html(data);
    }

  })
}
$('.search_text').keyup(function(){
var search_text = $('.search_text').val();

$.ajax({

  url:'pages/search_orders_new.php',
  method:'POST',
  data:{search_text:search_text},

  success:function(data){
    $('#fetch_orders_new').html(data);
  }
})


})


</script>