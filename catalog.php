<?php

	ob_start();
	include 'includes/header.php'; 

	// Get Category
	$category = $_GET['category'];

	$sql = "SELECT * FROM products WHERE category = '". $category ."'";

	$result = $connection->query($sql);

	if (!$result) {
		trigger_error('Invalid query: ' . $connection->error);
	}

	// Title Code
	$buffer=ob_get_contents();
    ob_end_clean();

    $title = "Chairman's Bestfriend - " . $_GET['category'] . " Catalog";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;

?>

<!-- Body -->
		<div class="container" id="content">
			<div class="row">

			  <div class="row title-section">
			    <div class="twelve columns">
						<h2><?php print $category; ?></h2>
					</div>
			  </div>	
			  		
		  		<?php

					if ($result->num_rows>0) {
						while ($row = $result->fetch_assoc()) {


							print ("<div class='row u-cf u-full-width product-card'><a href='product.php?sku=". $row["sku"] . "'>");
							
							print ('<div class="three columns"><img class="u-max-full-width" src=" ' . $row["image"] . '"></div>');

							print (
									'<div class="five columns"><h3>' 
									. $row["product_name"] . 
									'</h3><p>' 
									. $row["description"] . 
									'</p><p>Size: ' 
									. $row["size"] . 
									'</p><p>Stock: ' 
									. $row["stock"] . 
									'</p>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									</div>'
							);

							print ('<div class="two columns"><p>SKU: ' . $row["sku"] . '</p></div>');

							print ('<div class="two columns"><p class="price">' . $row["price"] . '</p></div>');

							print ('</a></div>');
						}

					} else {
						print ("No results found for query.");
					}

				?>
			</div>
		</div>
<!-- /Body -->
		
<?php include 'includes/footer.php'; ?>