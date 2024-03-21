<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="pages/insert_products.php" method="POST" enctype="multipart/form-data">
<div style="margin-top:10%;">
	<center>
	<input type="text" name="product_name" placeholder="Enter your name"><br><br>
	<input type="file" name="product_image" style="margin-left:5%;"><br><br>
	<input type="number" name="p_price" placeholder="Enter price"><br><br>
	<input type="number" name="p_discount" placeholder="discount"><br><br>
	<input type="number" name="p_mrp" placeholder="mrp"><br><br>
	<input type="text" name="p_discription" placeholder="discription"><br><br>
	<input type="number" name="p_pty" placeholder="pty"><br><br>
	<select name="status">
		<option>Active</option>
		<option>deactive</option>
	</select><br><br>
	<input type="submit" name="">
	</center>
</div>
</form>
</body>
</html>