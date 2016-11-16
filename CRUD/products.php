<?
	include("connection.php");
	$query = "SELECT name, description, category, size, sku, stock, cost, price, image FROM products";
	$result = $mysqli->query($query);
	if($mysqli->error) {
		print "Query failed: ".$mysqli->error;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Lab Database</title>
	<style type="text/css">
	</style>
</head>
	<div id="content-container">
	 	<div id="content">
	 		<h1> PRODUCTS</h1>
				<body>
                <a href="products.php">Add New</a><br><br>
					<table width="600" border="1" cellpadding="1" cellspacing="1">
        				<thead>
            			<tr>
                    		<th>Product</th>
                    		<th>Description</th>
                    		<th>Category</th>
                    		<th>Size</th>
                    		<th>Sku</th>
                         <th>Stock</th>
                    		<th>Cost</th>
                    		<th>Price</th>
                    		<th>Image</th>
                		</tr>
                	</thead>
            		<tbody>
						
						<?php
						$sql = " select name, description, category, size, sku, stock, cost, price, image FROM products";
						$result = mysqli_query($mysqli, $sql);
						if(mysqli_num_rows($result) > 0){
						
							while($row = mysqli_fetch_assoc($result)) 
							{
								?>
									
								 <tr>
								 <td><?=$row['name']?></td>
								 <td><?=$row['description']?></td>
								 <td><?=$row['category']?></td>
								 <td><?=$row['size']?></td>
								 <td><?=$row['sku']?></td>
								 <td><?=$row['stock']?></td>
								 <td><?=$row['cost']?></td>
								 <td><?=$row['price']?></td>
								 <td><?=$row['image']?></td>
								 <td> 
								 <a href="edit.php?id=<?=$row['product_id']?>">Edit</a> 
                              <a href="delete.php?id=<?=$row['product_id']?>">Delete</a> 
								</td>
							    </tr>
								<?php
							}
						}
							
						?>	
					</tbody>
				</table>
			</body>
		</div>
	</div>
</html>

<? $mysqli->close(); ?>
					