<?php include 'includes/header.php'; 
	   

$select_query = "SELECT product_id,
						product_name,
						description,
				FROM products";
	$select_result = $connection->query($select_query);		
?>

<!-- Body -->

<div class="container" id="content">

	<div class="row title-section">
		<div class="twelve columns">
			<h2>Thank you for your Order</h2>
		</div>
  	</div>

	
  		<div class="row u-cf u-full-width login-information">
  			<div class="twelve columns">
  			<div align="center"><strong>
  				<h5>Your payment was successful. Thank you for shopping with us
  					<a class="underline-blue" href="http://localhost/public_html/ia02/fulfillment.php">1234567.</a>
  				</h5>	 	
  			</div>
  			</div>		  	
  		</div>
  		<div class="row u-cf u-full-width login-information">
  			<div class="twelve columns">
  			
  				<h4>Order Details</h4>
  				<body>
					<table>
        				<thead>
            			<tr>
                    		<th>Product</td>
                    		<th>Description</td>
                    		<th>Product_Image</td>
                		</tr>
                	</thead>
            		<tbody>
            		
            		<?php
						while($row = $select_result->fetch_object()) {		
							echo "<tr>";
							echo "<td>".$row->product_id."</td>";
							echo "<td>".$row->product_name."</td>";
							echo "<td>".$row->description."</td>";
							if(empty($row->product_id)) { print "N/A"; } else { print $row->product_id; }
	                    print "</td>\n\r";
							echo "</tr>";	
							}
						?>	
					</tbody>
					</table>
				</body> 
  			</div>		  	
  		</div>
</div>


  			  		


<!-- Body -->
				
<?php include 'includes/footer.php'; ?>


