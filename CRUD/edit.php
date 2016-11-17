<?php
include("connection.php");

if(isset($_GET['id'])) {
	$id = $_GET['id'];
    
    $sql = "SELECT * FROM product WHERE id = {$id}";
    $result = $connect ->query($sql);
	
	$data = $result ->fetch_assoc();
	
	$connect ->close;
}






?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<form action="CRUD/update.php" method="post">
	<table>
    	<tr>
        	<td>Product</td>
           <td><input type ="text" name="name" value="<?php echo $data['name']?>" /></td>
           </tr>
        <tr>
           <td>Description</td>
          <td><input type ="text" name="descriptoin" value="<?php echo $data['description']?>" /></td>
        </tr>
        
        <tr>
           <td>Category</td>
         
         <td><<input type ="text" name="categoty" value="<?php echo $data['category']?>" /></td>
      
      </tr>
      
      <tr>
           <td>Size</td>
     <td><<input type ="text" name="size" value="<?php echo $data['size']?>" /></td>
        
           
      </tr>
      
      <tr>
           <td>Sku</td>
      <td><input type ="text" name="sku" value="<?php echo $data['sku']?>" /></td>
      
      </tr>
      
      <tr>
           <td>Stock</td>
   <td><input type ="text" name="stock" value="<?php echo $data['stock']?>" /></td>

      </tr>
      
      <tr>
           <td>Cost</td>
    <td><input type ="text" name="cost" value="<?php echo $data['cost']?>" /></td>
        
      </tr>
      
     <tr>
           <td>Price</td>
   <td><input type ="text" name="price" value="<?php echo $data['price']?>" /></td>
    
     </tr>
     
     <tr>
           <td>Image</td>
   <td><input type ="text" name="image" value="<?php echo $data['image']?>" /></td>
        
     </tr>
    
    <tr>
    <td></td>
    
    <input type="text" name="id" value="<?php echo $data['id']?>" />
        
    <td><button type="submit">Save</button> </td>

    <td><a href="products.php"> <button type="button">back</button></a></td>
    </tr>
    </tr>

</body>
</html>
