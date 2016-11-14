<?php include 'includes/header.php'; 
  

  if (isset($_GET['sku'])) {

    $sku = $_GET['sku'];

  } else {
    
    ini_set('display_errors', 1);

  }

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

          foreach($_SESSION['cart'] as $id=>$val){
            print ('<div class="row u-cf u-full-width product-card">');
          
            print ('<div class="three columns"><img class="u-max-full-width" src=" ' .$val["image"] . '"></div>');


            print ('<div class="five columns"><h3>' . $val["product_name"] . '</h3><p>Size: ' . $val["size"] . '</p><p>Stock: ' . $val["stock"] . '</p></div>');

            print ('<div class="two columns"><p>SKU: ' . $val["sku"] . '</p></div>');

            print ('<div class="two columns"><p class="price">' . $val["price"] . '</p></div>');

            print ('</div>');
          }
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
        <?php
          
          $total = 0;
        
        ?>
				  <tbody>
				    <tr>
				      <td>Subtotal</td>
				      <td><?php foreach($_SESSION['cart'] as $id=>$val){
                $total += 2;
                print $total;
              } ?>
              </td>
				   </tr>
				   <tr>
				     <td>Shipping and Handling</td>
				     <td>FREE</td>
				   </tr>
				   <tr>
				     <td>Estimated Tax</td>
				     <td>FREE</td>
				   </tr>	
				   <tr class="important-total">
				     <td>Estimated Total</td>
				     <td><?php print $total; ?></td>
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