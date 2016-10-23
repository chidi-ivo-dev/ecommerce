<?php

	include 'includes/header.php';

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

					print ('<div class="row"><div class="button u-pull-right">Add to Cart</div></div>');

					print ('</div>');
				}

			} else {
				print ("No results found for query.");
			}

		?>	
	</div>
</div>

<!-- /Body -->
		
<?php include 'includes/footer.php'; ?>