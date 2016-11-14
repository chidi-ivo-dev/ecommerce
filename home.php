<?php 

	include 'includes/header.php'; 
		
	$desks_sql = "SELECT * FROM products WHERE category = 'Desks' LIMIT 1, 3";
	$chairs_sql = "SELECT * FROM products WHERE category = 'Chairs' LIMIT 1, 3";
	$tables_sql = "SELECT * FROM products WHERE category = 'Tables' LIMIT 1, 3";

	$desks_result = $connection->query($desks_sql);
	$chairs_result = $connection->query($chairs_sql);
	$tables_result = $connection->query($tables_sql);

?>

<!-- Body -->

		<div class="row" id="cover-image">
		</div>

<?php

				if (isset($_SESSION['logged_in'])) {
					print ("logged in session is active <br/>");
					print_r($_SESSION);
					print_r ($_SESSION['logged_in'] . "<br/>");
					print_r ($_SESSION['logged_in'] . "<br/>");
				} else {
					print ("logged in session error. </br>");
				}

?>			

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
					if ($desks_result->num_rows>0) {
						while ($desk_product = $desks_result->fetch_assoc()) {
					
							print("
								<div class='four columns'>
									<a href='product.php?sku=". $desk_product["sku"] . "'>
										<div class='product-card'>
											<img class='u-max-full-width' src= '" . $desk_product["image"] . "'>
											<div class='row information'>
												<h4>" . $desk_product["product_name"] . "</h4>
												<div class='row'>
													<p class='price u-pull-left'> " . $desk_product["price"] . " </p>
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
									</a>
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
					if ($chairs_result->num_rows>0) {
						while ($chair_product = $chairs_result->fetch_assoc()) {
					
							print("
								<div class='four columns'>
									<a href='product.php?sku=". $chair_product["sku"] . "'>
										<div class='product-card'>
											<img class='u-max-full-width' src= '" . $chair_product["image"] . "'>
											<div class='row information'>
												<h4>" . $chair_product["product_name"] . "</h4>
												<div class='row'>
													<p class='price u-pull-left'> " . $chair_product["price"] . " </p>
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
									</a>
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
					if ($tables_result->num_rows>0) {
						while ($table_product = $tables_result->fetch_assoc()) {
					
							print("
								<div class='four columns product-card'>
									<a href='product.php?sku=". $table_product["sku"] . "'>
										<div class='product-card'>
											<img class='u-max-full-width' src= '" . $table_product["image"] . "'>
											<div class='row information'>
												<h4>" . $table_product["product_name"] . "</h4>
												<div class='row'>
													<p class='price u-pull-left'> " . $table_product["price"] . " </p>
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
									</a>
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