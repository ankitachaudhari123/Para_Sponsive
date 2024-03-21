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
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<style type="text/css">
.active{
	color: orange;
}
</style>
<body>
<center>

	<!-- <i class="fas fa-star "></i> -->



<i class="far fa-star rating " id="1"></i>
<i class="far fa-star rating" id="2"></i>
<i class="far fa-star rating" id="3"></i>
<i class="far fa-star rating" id="4"></i>
<i class="far fa-star rating" id="5"></i>

</center>
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</html>
<script type="text/javascript">
	$('.rating').click(function(){
	var id = $(this).attr("id");
        

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
	})
</script>