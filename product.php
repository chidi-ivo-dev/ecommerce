<?php

	ob_start();
	include 'includes/header.php'; 

	// Get SKU
	$sku = $_GET['sku'];

	$sql = "SELECT * FROM products WHERE sku = ". $sku ."";

	$result = $connection->query($sql);

	if (!$result) {
		trigger_error('Invalid query: ' . $connection->error);
	}

?>

<!-- Body -->

<div class="container" id="content">
  	<div class="row">
		<?php

			if ($result->num_rows>0) {

				while ($row = $result->fetch_assoc()) {

					print ('<div class="row u-cf u-full-width product-card">');
					
					print ('<div class="three columns"><img class="u-max-full-width" src=" ' . $row["image"] . '"></div>');


					print ('<div class="five columns"><h3>' . $row["product_name"] . '</h3><p>' . $row["description"] . '</p><p>Size: ' . $row["size"] . '</p><p>Stock: ' . $row["stock"] . '</p></div>');

					print ('<div class="two columns"><p>SKU: ' . $row["sku"] . '</p></div>');

					print ('<div class="two columns"><p class="price">' . $row["price"] . '</p></div>');

					print ("<div class='row'>
						<a href='addtocart.php?sku=". $row["sku"] . "&product_name=". $row["product_name"] . "&price=". $row["price"] ."&image=" . $row["image"] . "&size=" . $row["size"] . "&stock=" . $row["stock"] . "' class='u-pull-right'><input class='button-primary' type='submit' value='Add To Cart'></a></div>");

					print ('</div>');

					// Page Title
					$buffer=ob_get_contents();
					ob_end_clean();

					$title = "Chairman's Bestfriend - " . $row['product_name'];
					$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

					echo $buffer; 					
				}

			} else {
				print ("No results found for query.");
			}
		?>	
	</div>
</div>

<!-- /Body -->
		
<?php 

include 'includes/footer.php'; ?>