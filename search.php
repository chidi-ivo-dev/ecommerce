<?php include 'includes/header.php'; 

if (!isset($_GET['query'])) {
	header("Location: home.php");
}
?>

<!-- Body -->

<div class="container" id="content">

<?php

	// get value from search form
	$query = mysql_real_escape_string($_GET['query']);

	// initiate search through database from product_name and description.
	$search_sql= "SELECT * FROM products WHERE description LIKE '%".$query."%' OR product_name LIKE '%".$query."%' OR category LIKE '%".$query."%'";

	// store results here
	$search_results = $connection->query($search_sql);

	if ($search_results->num_rows>0) {

		print ('<h2>You searched for: ' . $query . '</h2>');

		while ($row = $search_results->fetch_assoc()) { 

			print ('<div class="row u-cf u-full-width product-card">');
			
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
					</div>');

			print ('<div class="two columns"><p>SKU: ' . $row["sku"] . '</p></div>');

			print ('<div class="two columns"><p class="price">' . $row["price"] . '</p></div>');

			print ('</div>');

		}

	} else {
		print ('No results found for query.');
	}
?>

</div>

<!-- /Body -->

<?php include 'includes/footer.php'; ?>