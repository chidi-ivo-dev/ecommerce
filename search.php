<?php include 'includes/header.php'; ?>

<!-- Body -->

<div class="container" id="content">

<?php

		// get value from search form
		$query = $_GET['query'];

		// changes characters used in html to equivalent
		$query = htmlspecialchars($query);

		// no sql injection
		$query = mysql_real_escape_string($query);

		$query_sql = "SELECT * FROM products WHERE ('product_name' LIKE '%" . $query . "%') OR ('category' LIKE '%" . $query . "%')";

		$search_results= $connection->query($query_sql);

		if ($connection) {
  			echo 'conected<br>';
		} else {
  			echo 'not conected<br>';
		}

		print($query);
?>

</div>

<!-- /Body -->

<?php include 'includes/footer.php'; ?>