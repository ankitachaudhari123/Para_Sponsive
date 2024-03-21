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
        <input type="text" class="form-control" placeholder="Search...">
        <button class="btn btn-primary">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar collapse" id="sidebar">
      <div class="list-group">
        <a href="#" class="list-group-item active"><span class="fa fa-fw fa-dashboard"></span> Dashboard</a>
        <a href="products.php" class="list-group-item"><span class="fa fa-fw fa-dashboard"></span> Products <span class="badge badge-dark badge-pill pull-right"><?=$total_products?></span></a>
        <a href="#" class="list-group-item"><span class="fa fa-fw fa-dashboard"></span> Categories <span class="badge badge-dark badge-pill pull-right">14</span></a>
        <!-- <a href="#" class="list-group-item collapsed" data-target="#submenu1" data-toggle="collapse" data-parent="#sidebar"><span class="fa fa-fw fa-dashboard"></span> Categories<span class="caret arrow"></span></a>
          <div class="list-group collapse" id="submenu1">
            <a href="#" class="list-group-item">Category</a>
            <a href="#" class="list-group-item">Category</a>
          </div> -->
        <a href="users.php" class="list-group-item"><span class="fa fa-fw fa-dashboard"></span> Users <span class="badge badge-dark badge-pill pull-right"><?=$total_customer?></span></a>
        <a href="orders_new.php" class="list-group-item"><span class="fa fa-fw fa-dashboard"></span> Orders <span class="badge badge-dark badge-pill pull-right"><?=$pending_orders?></span></a>
      </div>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header">Dashboard</h1>
  

      <section class="row text-center placeholders">
        <div class="col-6 col-sm-3">
          <div class="panel panel-info">
            <div class="panel-heading">Total Amount</div>
            <div class="panel-body">
              <h4><?=$total_amount?></h4>
              <p>Data</p>
            </div>
          </div>
        </div>
         <div class="col-6 col-sm-3">
          <div class="panel panel-info" style="border:1px solid lightcyan;">
            <div class="panel-heading" style="background:lightcyan;">Todays Orders</div>
            <div class="panel-body">
              <h4><?=$todays_orders?></h4>
              <p>Data</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="panel panel-success">
            <div class="panel-heading">Pending Orders</div>
            <div class="panel-body">
              <h4><?=$pending_orders?></h4>
              <p>Data</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="panel panel-warning">
            <div class="panel-heading">Confirm Orders</div>
            <div class="panel-body">
              <h4><?=$confirm_orders?></h4>
              <p>Data</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="panel panel-danger">
            <div class="panel-heading">Delived Orders</div>
            <div class="panel-body">
              <h4><?=$delived_orders?></h4>
              <p>Data</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="panel panel-warning" style="border: 1px solid purple!important;" >
            <div class="panel-heading" style="background: purple!important;color: white!important;">Cancel Orders</div>
            <div class="panel-body">
              <h4><?=$cancel_orders?></h4>
              <p>Data</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="panel panel-primary">
            <div class="panel-heading">Total Customer</div>
            <div class="panel-body">
              <h4><?=$total_customer?></h4>
              <p>Data</p>
            </div>
          </div>
        </div>
        <a href="products.php"><div class="col-6 col-sm-3">
          <div class="panel panel-success"style="border: 1px solid hotpink;!important;" >
            <div class="panel-heading"style="background: hotpink;!important;color: white!important;">products</div>
            <div class="panel-body">
              <h4 style="color:black;"><?=$total_products?></h4>
              <p>Data</p>
            </div>
          </div>
        </div><a>
      </section>

     


    </div>
  </div>
</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>