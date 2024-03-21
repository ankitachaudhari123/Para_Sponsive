<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<div class="mobile_otp">
	<h1>OTP</h1>
	<input type="text" name="" class="mobile_number" placeholder="Enter mobile number">
	<br><br>
	<button class="send_otp">Send OTP</button>
</div>

<div class="verify_otp" style="display: none;" >
	<input type="text" name="" class="number" placeholder="Enter OTP">
	<br><br>
	<button class="verify">verify OTP</button>
</div>
</center>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</html>


<script type="text/javascript">

function validatePhoneNumber(phoneNumber) {
  var regex = /^\(?(\d{3})\)?[-. ]?(\d{3})[-. ]?(\d{4})$/;
  if (regex.test(phoneNumber)) {
    return true;
  }
  return false;
}

$('.send_otp').click(function(){

var mobile_number = $('.mobile_number').val();

if (validatePhoneNumber(mobile_number)) {
  alert("Valid phone number");
$.ajax({
			url:'php/send_otp.php',
			method:'POST',
			data:{mobile:mobile_number},

			success:function(res){
				if (res==1) {
					$('.mobile_otp').hide();
					$('.verify_otp').show();
				}
				else{
					alert(res);
				}

			}

		})
} else {
  alert("Invalid phone number");
}
	})

	$('.verify').click(function(){
		var number = $('.number').val();
		var mobile_number = $('.mobile_number').val();
		$.ajax({
			url:'php/verify_otp.php',
			method:'POST',
			data:{number:number, mobile_number:mobile_number},
			success:function(res){
				//alert(res);
				if (res == 1) {
					alert("Login success");
					location.href = './';
				}
				else{
					alert(res);
				}
			}

		})
	})
</script>