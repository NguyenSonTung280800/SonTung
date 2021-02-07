<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
</style>
</head>
<body>
    <div class="text">
	<form method="POST" enctype="multipart/form-data">
		<?php include('connect.php'); ?>
		<div class="text3"><B>Leo Shop</B></div>
		<div class="text1">Name Product</div>
		<div class="text2"><input type="text" name="txtten"></div>
		<div class="text1">Code Product</div>
		<div class="text2"><input type="text" name="txtcode"></div>
		<div class="text1">Money</div>
		<div class="text2"><input type="text" name="txtmoney"></div>
		<div class="text1">Description</div>
		<div class="text2"><textarea cols="20" name="txtdc"></textarea></div>
		<div class="text1">Picture</div>
		<div class="text2"><input type="file" name="txtfile" value="chọn tệp"></div>
		<div ><input type="submit" name="ok" value="add product" class="submit"></div>
		<div class="thoat"><a href="sp.php"><I>Exit</I></a></div>
	</form>
    <div>
</body>
</html>