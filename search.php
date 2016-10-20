<?php include 'includes/header.php'; ?>

<?php
	// get value from search form
	$query = $_GET['query'];

	// changes characters used in html to equivalent
	$query = htmlspecialchars($query);

	// no sql injection
	$query = mysql_real_escape_string($query);
?>

<!-- Body -->

<div class="container" id="content">

	<h1><?php print($query); ?>

</div>

<!-- /Body -->

<?php include 'includes/footer.php'; ?>