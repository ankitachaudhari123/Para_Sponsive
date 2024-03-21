<?php 

session_start();

if (isset($_COOKIE['name']) != '') {
   header('location:./');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>resister_page</title>

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
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
	body{
		width: 100%;
		height: 100vh;
		background: #f0f0f1;

	}
	.box{
		width: 20%;
		height: 300px;
		background: white;
		margin-top: 10px;
		border: 1px solid gray;
	}
	.para{
		text-align:left;
		font-size: 15px;
		margin-top: 10px;
		margin-left: 13px;

	}
	.use{
		width: 90%;
		height:35px ;
		border-radius: 5px;
	}
	.remember-div{
		margin-top: 20px;
		font-size: 15px;
		text-align: left;
		margin-left: 13px;
	}
	.box-2{
		width: 20%;
		height: 60px;
		margin-top: 10px;
	}
	.input_password_div{
		width: 90%;
		height: 35px;
		display: inline-flex;
		border-radius: 5px;
		line-height: 35px;
		border: 2px solid black;
	}
	#password_text{
		width: 100%;
		height: 28px;
		border: none;
		margin-left: 2px;
	}
	#password_text:focus{
		border: none;
		outline: none;
	}
	.error{
		border:2px solid red;
	}
</style>
<body>
<center>
	<br><br><br>
	<img src="img/login-logo.png" >
	<br>
		<div class="error_div" style="width:20%;height:35px; background:white ;border-left: 5px solid red;display: inline-flex;visibility: hidden;">
			<h6 style="float: left;margin-left: 15px;color: black;margin-top: 7px;">Error:</h6>

		<h6 style="float: left;margin-left: 15px;color: red;;margin-top: 7px;" id="error"></h6>
		</div>

<div class="box">
	<div class="container-fluid">
		<br>
	<p class="para" > Mobile No or Email Address</p>
  <input type="text" name="" class="use username" >
  <p class="para">Password</p>

	<div class="input_password_div">

		<div style="width:80%;height:35px;">
			<input type="password" class="password error" id="password_text"  name="" style="">
		</div>

		<div style="width:20%;height:35px;">

			<i class="far fa-eye hidetext" onclick="changeType()"></i>
      <i class="far fa-eye-slash showtext" style="display:none;" onclick="changeType()"></i>

		</div>
	</div>
	<br>

<div class="remember-div">
	<input type="checkbox" name="" > Remember Me 
	<button type="button" class="btn btn-primary" style="text-transform: capitalize;margin-left: 60%!important;" onclick="login()"> Log in</button>
</div>
</div>
</div>

<div class="box-2">
	<div class="container">
	<p class="para">Lost your password ?</p>
	<p class="para"><a style="color:black;" onclick="backbtn()" href="javascript:void(0);"><- Go to clothing store </a></p>
	</div>
</div>
</center>
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</html>
<script type="text/javascript">
	function backbtn(){
		window.history.back();
	}



	function changeType(){
		if (document.getElementById("password_text").type=="password") {
			$('.hidetext').hide();
			$('.showtext').show();

			document.getElementById("password_text").type="text";
		}
		else{
			document.getElementById("password_text").type="password";
			$('.hidetext').show();
			$('.showtext').hide();

		}
	}
	
	function login(){

		var username = $('.username').val();
		var password = $('.password').val();

		if (username == '' && password == '') {
	
		
				$('#error').html("Enter username and password");
				$(".error_div").css('visibility', 'visible');


			$('.username').addClass("error");
			$('.input_password_div').addClass("error");
		}
		else if (username == '') {
			$('.username').addClass("error");
			$('.input_password_div').removeClass("error");
			$('#error').html("Enter username");
				$(".error_div").css('visibility', 'visible');
		}
		else if (password == '') {
			$('.input_password_div').addClass("error");
			$('.username').removeClass("error");
				$('#error').html("Enter Password");
				$(".error_div").css('visibility', 'visible');
		}
		else{
			$('.username').removeClass("error");
			$('.input_password_div').removeClass("error");

		$.ajax({
			url:'php/login_chk.php',
			method : 'POST',
			data : {username:username , password:password},
			success: function(res){		
			console.log(res);		
				if (res == 1) {
					window.history.back();

				}
				else if (res == 2) {
						$('#error').html("Wrong Password");
							$(".error_div").css('visibility', 'visible');
				}
				else if (res == 3) {
						$('#error').html("User not Found");
							$(".error_div").css('visibility', 'visible');
				}			
			}
		})
	}
	}
</script>