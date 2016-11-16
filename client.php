<?php 

  ob_start();
  include 'includes/header.php'; 

  $buffer=ob_get_contents();
  ob_end_clean();

  $title = "Chairman's Bestfriend - Client";
  $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

  echo $buffer; 

?>

<!-- Body -->

<div class="container" id="content">

	<div class="row title-section">
		<div class="twelve columns">
			<h2>My Account</h2>
		</div>
  	</div>

	<div class="row">
  		<div class="row u-cf u-full-width product-card">
  			<div class="twelve columns">
  				<h3>Orders</h3> 	
				<input class="button-primary order-button" type="submit" value="View All Orders">
  			</div>		  	
  		</div>
  		<div class="row u-cf u-full-width product-card">
  			<div class="twelve columns">
					<h3 class="u-pull-left">Personal Information</h3>
				<input class="button u-pull-right" type="submit" value="edit">
  			</div>
  			<div class="twelve columns personal-information">
				<p class="bold">Name</p>
				<p>Jessica Sunga</p>
				<p class="bold">Email Address</p>
				<p>placeholder@email.com</p>
				<p class="bold">Password</p>
				<p>********</p>
  			</div>
  		</div>
  		<div class="row u-cf u-full-width product-card">
  			<div class="twelve columns">
					<h3 class="u-pull-left">Addresses</h3>
				<input class="button u-pull-right" type="submit" value="edit">
  			</div>
  			<div class="twelve columns">
  				<h5>Shipping Address</h5>
  				<p>Jessica Sunga <br> 1234 Fake Street Apt. 000 <br> Orlando, FL, 32716
				</p>
  			</div>
  			<div class="twelve columns">
  				<h5>Billing Address</h5>
  				<p>Jessica Sunga <br> 1234 Fake Street Apt. 000 <br> Orlando, FL, 32716
				</p>
  			</div>		  			
  		</div>		  		
  		<div class="row u-cf u-full-width product-card">
  			<div class="twelve columns">
  				<h3>Payment Information</h3> 				
  			</div>
  			<div class="twelve columns payment-info">
				<table class="u-pull-left">
				  <tbody>
				    <tr>
				      <td><i class="fa fa-cc-visa" aria-hidden="true"></i></td>
				      <td>Last 4 digits: 000</td>
				      <td>Expires 10/2016</td>
				    </tr>					    						
				  </tbody>
				</table>	
				<div class="u-pull-right">
				  <input class="button" type="submit" value="edit"></td>
			      <input class="button" type="submit" value="remove">	
				</div>
  			</div>
  			<div class="twelve columns add-button">
				<input class="button-primary" type="submit" value="Add Payment Details">
  			</div>
  		</div>		  		
  	</div>		  	
</div>

<!-- Body -->
				
<?php include 'includes/footer.php'; ?>