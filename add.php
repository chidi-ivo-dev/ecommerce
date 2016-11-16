<?
include("connection.php");

if(isset($_POST['btn_submit'])){
	$sql = "insert into products(name, description, category, size, sku, stock, cost, price, image)
		values('".$_POST['txt_name']."', '".$_POST['txt_description']."', '".$_POST['txt_category']."', '".$_POST['txt_size']."', '".$_POST['txt_sku']."', '".$_POST['txt_stock']."', '".$_POST['txt_cost']."', '".$_POST['txt_price']."', '".$_POST['txt_image']."')";
		

		if(mysqli_query($mysqli, $sql)){
			header('location:products.php');
		}else{
			echo "error " .mysqli_error($mysqli);
		}
}


?>
<h1>Add Product</h1>
<form action="" method="post">
	<table>
    	<tr>
        	<td>Product</td>
           <td><input name="txt_name"></td>
           </tr>
        <tr>
           <td>Description</td>
          <td><input name="txt_description"></td>
        </tr>
        
        <tr>
           <td>Category</td>
         
         <td><input name="txt_category"></td>
      
      </tr>
      
      <tr>
           <td>Size</td>
     <td><input name="txt_size"></td>
        
           
      </tr>
      
      <tr>
           <td>Sku</td>
      <td><input name="txt_sku"></td>
      
      </tr>
      
      <tr>
           <td>Stock</td>
   <td><input name="txt_stock"></td>

      </tr>
      
      <tr>
           <td>Cost</td>
    <td><input name="txt_cost"></td>
        
      </tr>
      
     <tr>
           <td>Price</td>
   <td><input name="txt_price"></td>
    
     </tr>
     
     <tr>
           <td>Image</td>
   <td><input name="txt_image"></td>
        
     </tr>
    
    <tr>
    <td></td>
    <td><input type="submit" name="btn_submit"></td>
    </tr>
    </tr>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
