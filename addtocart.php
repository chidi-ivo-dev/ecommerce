<?php

	/*
	product_name
	description
	price
	stock
	size
	sku
	*/

	if(isset($_GET['sku'])) {

		$_SESSION['cart'][] = array("product_name"=>$_GET['product_name'], "price"=>$_GET['price'], "sku"=>$_GET['sku']);

	}

	include 'cart.php';

	//print_r($_SESSION['cart']);

?>