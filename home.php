<?php 

	include 'includes/header.php'; 
		
	$desksSql = "SELECT * FROM products WHERE category = 'Desks' LIMIT 1, 3";
	$chairsSql = "SELECT * FROM products WHERE category = 'Chairs' LIMIT 1, 3";
	$tablesSql = "SELECT * FROM products WHERE category = 'Tables' LIMIT 1, 3";

	$desksResult = $connection->query($desksSql);
	$chairsResult = $connection->query($chairsSql);
	$tablesResult = $connection->query($tablesSql);

?>

<!-- Body -->
		<div class="row" id="cover-image">
		</div>

		<div class="container" id="content">
			<div class="row card">
				<div class="one-half column" id="banner-image">
		  		</div>
		  		<div class="one-half column copy-container">
					<h3>Comfort and luxury to do your best work.</h3>
					<p>Let us help you pick out the best furniture for your employees. We provide workplace accomodations designed to support the emotional, cognitive and physical needs of people. </p>
		  		</div>
			</div>

			<div class="row title-section">
				<div class="twelve columns">
					<h2>Featured Products</h2>
				</div>
		  	</div>

			<div class="row product-grid">
				<div class="twelve columns">
					<div class="row">
		  				<div class="one-half column">
		  			  		<h3>Desks</h3>
		  				</div>
		  				<div class="one-half column">
		  					<a href="catalog.php?category=Desks"><input class="button u-pull-right" type="submit" value="view more"></a>
		  				</div>
					</div>				
					<div class="row">
<?php 
					if ($desksResult->num_rows>0) {
						while ($deskProduct = $desksResult->fetch_assoc()) {
					
							print("
								<div class='four columns product-card'>
									<img class='u-max-full-width' src= '" . $deskProduct["image"] . "'>
									<div class='row information'>
										<h4>" . $deskProduct["product_name"] . "</h4>
										<div class='row'>
											<p class='price u-pull-left'> " . $deskProduct["price"] . " </p>
											<div class='u-pull-right'>
												<i class='fa fa-star-o' aria-hidden='true'></i>
												<i class='fa fa-star-o' aria-hidden='true'></i>
												<i class='fa fa-star-o' aria-hidden='true'></i>
												<i class='fa fa-star-o' aria-hidden='true'></i>
												<i class='fa fa-star-o' aria-hidden='true'></i>
											</div>
										</div>
									</div>
								</div>
							");
						}
					}	
?>				
					</div>
				</div>
			</div>

		    <div class="row product-grid">
		  	  <div class="twelve columns">
		  		  <div class="row">
		  			<div class="one-half column">
		  			  <h3>Chairs</h3>
		  			</div>
		  			<div class="one-half column">
		  				<a href="catalog.php?category=Chairs"><input class="button u-pull-right" type="submit" value="view more"></a>
		  			</div>
		  		  </div>
		  		  <div class="row">	
<?php 
					if ($chairsResult->num_rows>0) {
						while ($chairProduct = $chairsResult->fetch_assoc()) {
					
							print("
								<div class='four columns product-card'>
									<img class='u-max-full-width' src= '" . $chairProduct["image"] . "'>
									<div class='row information'>
										<h4>" . $chairProduct["product_name"] . "</h4>
										<div class='row'>
											<p class='price u-pull-left'> " . $chairProduct["price"] . " </p>
											<div class='u-pull-right'>
												<i class='fa fa-star-o' aria-hidden='true'></i>
												<i class='fa fa-star-o' aria-hidden='true'></i>
												<i class='fa fa-star-o' aria-hidden='true'></i>
												<i class='fa fa-star-o' aria-hidden='true'></i>
												<i class='fa fa-star-o' aria-hidden='true'></i>
											</div>
										</div>
									</div>
								</div>
							");
						}
					}	
?>	  		    		
		  		  </div>
		  	  </div>
		    </div>

		    <div class="row product-grid">
		  	  <div class="twelve columns">
		  		  <div class="row">
		  			<div class="one-half column">
		  			  <h3>Tables</h3>
		  			</div>
		  			<div class="one-half column">
		  				<a href="catalog.php?category=Tables"><input class="button u-pull-right" type="submit" value="view more"></a>		
		  			</div>
		  		  </div>
		  		  <div class="row">
<?php 
					if ($tablesResult->num_rows>0) {
						while ($tableProduct = $tablesResult->fetch_assoc()) {
					
							print("
								<div class='four columns product-card'>
									<img class='u-max-full-width' src= '" . $tableProduct["image"] . "'>
									<div class='row information'>
										<h4>" . $tableProduct["product_name"] . "</h4>
										<div class='row'>
											<p class='price u-pull-left'> " . $tableProduct["price"] . " </p>
											<div class='u-pull-right'>
												<i class='fa fa-star-o' aria-hidden='true'></i>
												<i class='fa fa-star-o' aria-hidden='true'></i>
												<i class='fa fa-star-o' aria-hidden='true'></i>
												<i class='fa fa-star-o' aria-hidden='true'></i>
												<i class='fa fa-star-o' aria-hidden='true'></i>
											</div>
										</div>
									</div>
								</div>
							");
						}
					}	
?>	  		  		  			 
		  		  </div>
		  	  </div>
		    </div>
		</div>

<!-- /Body -->		
		
<?php include 'includes/footer.php'; ?>