<?php

ob_start();
include 'includes/header.php'; 

$buffer=ob_get_contents();
ob_end_clean();

$title = "Chairman's Bestfriend - Admin";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

echo $buffer;

?>

<!-- Body -->
<div class="container" id="admin">

	<div class="row">

		<div class="one-half column u-pull-left">
			<table>
			  <thead class="u-full-width">
			  	<tr>
			  		<th>Admin Access</th>
			  	</tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td><a href="#">Dashboard</a></td>
			    </tr>
			    <tr>
			      <td><a href="#">Recent Orders</a></td>
			    </tr>
			    <tr>
			      <td><a href="products.php">Product Listing</a></td>
			    </tr>
			    <tr>
			      <td><a href="#">Analytics</a></td>
			    </tr>	    
			  </tbody>
			</table>
		</div>

		<div class="one-half column">
			<h2 style="padding-top: 10rem"> Coming Soon! </h2>
		</div>

	</div>
	
</div>

<!-- /Body -->
		
<?php include 'includes/footer.php'; ?>
