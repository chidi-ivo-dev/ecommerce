
<?php
session_start();

		$_SESSION['cart'][] = array("product_name"=>$_GET['product_name'], "price"=>$_GET['price'], "sku"=>$_GET['sku'], "image"=>$_GET['image'], "size"=>$_GET['size'], "stock"=>$_GET['stock']);

	include 'cart.php';

	print_r($_SESSION['cart']);

?>