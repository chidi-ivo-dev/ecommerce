<?php

	include 'includes/header.php'; 

?>

<!-- Body -->
		<div class="container" id="content">
			<div class="row">
<?php
				if (isset($_SESSION['logged_in'])) {

					print ("<h1>You are logged in. You'lll be re-directed to the homepage in 5 seconds</h1>");
					header("Refresh:5;url=home.php");

				} else {

					print ("<h1>You are not logged in.</h1>");
				}
?>
			 </div>
		</div>
<!-- /Body -->
		
<?php include 'includes/footer.php'; ?>