<?php
include("connection.php");

if($_POST){
	$name= $_POST['name'];
	$description= $_POST['description'];
	$category= $_POST['category'];
	$size= $_POST['size'];
	$sku= $_POST['sku'];
	$stock= $_POST['stock'];
	$cost= $_POST['cost'];
    $price= $_POST['price'];
	$image= $_POST['image'];

	$sql = "UPDATE products SET name ='$name', descriptoin = '$description', category= '$category, size='$size', sku='$sku', stock='$stock', cost='$cost', price='$price', image='$image' Where id = {$id}";
	
	
	
}


?>




<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
