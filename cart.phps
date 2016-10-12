<?php include 'includes/header.php'; ?>

<!--- Body -->

<div class="container" id="content">

  <div class="row title-section">
    <div class="twelve columns">
			<h2>Shopping Cart</h2>
		</div>
  </div>

  <div class="row button-row u-pull-right">
		<input class="button" type="submit" value="Continue Shopping">
		<a href="fulfillment.php"><input class="button-primary" type="submit" value="Proceed to Checkout"></a>
  </div>

  <div class="row">

  	<div class="row u-cf u-full-width product-card">
  		<div class="three columns">
				<img class="u-max-full-width" src="img/table1.png">
  		</div>
  		<div class="five columns">
  			<h3>Nest of Tables</h3>
  			<p>True to its name, contemporary pickings are the go-to here, all easily searchable by material (wood, glass), category (computer desk, writing desk), and even width, depth, and height.</p>	
  			<a href="#">remove</a>	  				
  		</div>
  		<div class="two columns">
  			<span>qty.</span>
  			<input  style="width: 50px" type="email" placeholder="1" id="quantityInput">
  		</div>
  		<div class="two columns">
  			<p class="price">$2000</p>
  		</div>		  	
  	</div>

  	<div class="row u-cf u-full-width product-card">
  		<div class="three columns">
  			<img class="u-max-full-width" src="img/chair1.png">
  		</div>
  		<div class="five columns">
  			<h3>Ottoman Special</h3>
  			<p>True to its name, contemporary pickings are the go-to here, all easily searchable by material (wood, glass), category (computer desk, writing desk), and even width, depth, and height.</p>
  			<a href="#">remove</a>
  		</div>
  		<div class="two columns">
  			<span>qty.</span>
  			<input  style="width: 50px" type="email" placeholder="1" id="quantityInput">
  		</div>
  		<div class="two columns">
  			<p class="price">$299</p>
  		</div>	
  	</div>
  </div>

  <div class="row">
  	<div class="one-half column button-row u-pull-right">
  		<div class="info">
				<table class="u-full-width">
				  <tbody>
				    <tr>
				      <td>Subtotal</td>
				      <td>&#36;2,299</td>
				    </tr>
				    <tr>
				      <td>Shipping and Handling</td>
				      <td>FREE</td>
				    </tr>
				    <tr>
				      <td>Estimated Tax</td>
				      <td>&#36;0</td>
				    </tr>	
				    <tr class="important-total">
				      <td>Estimated Total</td>
				      <td>&#36;2,299</td>
				    </tr>						    						
				  </tbody>
				</table>		  			
  			</div>
			<a href="fulfillment.php"><input class="button-primary u-pull-right" type="submit" value="Proceed to Checkout"></a>
		</div>
  </div>		

</div>

<!--- /Body -->
		
<?php include 'includes/footer.php'; ?>