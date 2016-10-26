<?php include 'includes/header.php'; 

  $sku = isset($_GET['sku']);

  $sql = "SELECT * FROM products WHERE sku = ". $sku ."";

  $result = $connection->query($sql);

  if (!$result) {
    trigger_error('Invalid query: ' . $connection->error);
  }

?>

<!--- Body -->

<div class="container" id="content">

  <div class="row title-section">
    <div class="twelve columns">
			<h2>Shopping Cart</h2>
		</div>
  </div>

  <div class="row button-row u-pull-right">
		<input class="button" type="submit" value="Continue Shopping">
		<a href="fulfillment.php"><input class="button-primary" type="submit" value="Proceed to Checkout"></a>
  </div>

  <div class="row">

<?php

      if ($result->num_rows>0) {

        while ($row = $result->fetch_assoc()) {

          print ('<div class="row u-cf u-full-width product-card">');
          
          print ('<div class="three columns"><img class="u-max-full-width" src=" ' . $row["image"] . '"></div>');


          print ('<div class="five columns"><h3>' . $row["product_name"] . '</h3><p>' . $row["description"] . '</p><p>Size: ' . $row["size"] . '</p><p>Stock: ' . $row["stock"] . '</p></div>');

          print ('<div class="two columns"><p>SKU: ' . $row["sku"] . '</p></div>');

          print ('<div class="two columns"><p class="price">' . $row["price"] . '</p></div>');

          print ('</div>');
        }

      } else {
        print ("No results found for query.");
      }

?>  

  </div>

  <div class="row">
  	<div class="one-half column button-row u-pull-right">
  		<div class="info">
				<table class="u-full-width">
				  <tbody>
				    <tr>
				      <td>Subtotal</td>
				      <td>&#36;2,299</td>
				    </tr>
				    <tr>
				      <td>Shipping and Handling</td>
				      <td>FREE</td>
				    </tr>
				    <tr>
				      <td>Estimated Tax</td>
				      <td>&#36;0</td>
				    </tr>	
				    <tr class="important-total">
				      <td>Estimated Total</td>
				      <td>&#36;2,299</td>
				    </tr>						    						
				  </tbody>
				</table>		  			
  			</div>
			<a href="fulfillment.php"><input class="button-primary u-pull-right" type="submit" value="Proceed to Checkout"></a>
		</div>
  </div>		

</div>

<!--- /Body -->
		
<?php include 'includes/footer.php'; ?>