<?php
include("connection.php");

if(isset($_GET['product_id'])){
	$sql = "delete from products where product_id =".$_GET['product_id'];
    if(mysqli_query($mysql, $sql)){
    	header('location:products.php');
    }else{
		echo "error " .mysqli_error($mysqli); 
        }
 }
 ?>