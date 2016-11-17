<?php include 'includes/header.php'; ?>

<!-- Body -->
<div class="container" id="content">	

<?php
		if (!isset($_SESSION['logged_in'])) 
		{
			print 
				("
				<a href='login.php'><input class='button-primary'  type='submit' value='Login'></a>			
				<a href='create_account.php'><input class='button-primary create-account-button' type='submit' value='Create Account'></a>
				");
		}
		
		if (isset($_GET['sku'])) 
		{
			$sku = $_GET['sku'];
		
			$sql = "SELECT * FROM products WHERE sku = ". $sku ."";

			$result = $connection->query($sql);
		}	

		if (!isset($_SESSION['logged_in'])) 
		{
				$fName = " ";
				
				$select_client_query = "SELECT * FROM clients WHERE username = '".$_SESSION['logged_username']."'"; 
															  
				$selectt_client_result = $mysqli->query($select_client_query);  
				if ($select_client_result) 
				{
					
				}
				else
				{
					print "notfound";
					$fName = "nahhh ";
				}
		}
?>
    <!-- shipping -->

    <div class="row title-section">
      <div class="twelve columns">
        <h2>Shipping Details</h2>
      </div>
    </div>
			<form id="clientform" method="post" action="insertClient.php">
				<div class="row">
					<div class="six columns">
						<label for="fName">First Name</label>
						<input class="u-full-width" type="text" id="fName" name="fName" value= " ">
					</div>
					<div class="six columns">
						<label for="lName">Last Name</label>
						<input class="u-full-width" type="text"  id="lName" name="lName">
					</div>
				</div>
				<div class="row">
					<div class="ten columns">
						<label for="address">Address</label>
						<input class="u-full-width" type="text"  id="address" name="address">
					</div>
					<div class="two columns">
						<label for="aptSuite">Apt, Suite</label>
						<input class="u-full-width" type="text"  id="aptSuite" name="aptSuite">
					</div>
				</div>
				<div class="row">
					<div class="six columns">				
						<label for="city">City</label>
						<input class="u-full-width" type="text" id="city" name="city">
					</div>						
					<div class="six columns">
						<label for="state">State</label>
						<input class="u-full-width" type="text"  id="state" name="state">
					</div>
				</div>
				<div class="row">				
					<div class="six columns">
						<label for="zipcode">Zipcode</label>
						<input class="u-full-width" type="text"  id="zipcode" name="zipcode">
					</div>
					<div class="six columns">
						<label for="phone">Phone Number</label>
						<input class="u-full-width" type="text"  id="phone" name="phone">
					</div>	
				</div>					
				<div class="row">
					<div class="six columns">
						<label for="email">Email </label>
						<input class="u-full-width" type="text" id="email" name="email">
					</div>
				</div>
				<input class="button-primary" type="submit" name="submit" id="submit" value="Submit">
			</form> 

    <!-- payment -->

    <div class="row title-section">
      <div class="twelve columns">
        <h2>Payment Details</h2>
      </div>
    </div>

    <form>
      <label for="creditCardNumber">Credit Card Number</label>
      <input class="u-full-width" type="creditCardNumber" placeholder="0000 0000 0000 0000" id="creditCardNumber">   
      <div class="row">
        <div class="four columns">
          <label for="monthYear">MM/YY</label>
          <input class="u-full-width" type="monthYear" placeholder="12/16" id="monthYear">
        </div>
        <div class="four columns">
          <label for="cvc">CVC</label>
          <input class="u-full-width" type="cvc" placeholder="000" id="cvc">
        </div>
        <div class="four columns">
          <label for="zipCodeCard">Zip Code</label>
          <input class="u-full-width" type="zipCodeCard" placeholder="32816" id="zipCodeCard">
        </div>
      </div>
      <input class="button-primary" type="submit" value="Submit">
    </form>

    <!-- review -->

    <div class="row title-section">
      <div class="twelve columns">
        <h2>Review Your Order</h2>
      </div>
    </div>

	<?php	
		if ($result->num_rows>0) 
		{

        while ($row = $result->fetch_assoc()) 
		{

          foreach($_SESSION['cart'] as $id=>$val){
            print ('<div class="row u-cf u-full-width product-card">');
          
            print ('<div class="three columns"><img class="u-max-full-width" src=" ' .$val["image"] . '"></div>');


            print ('<div class="five columns"><h3>' . $val["product_name"] . '</h3><p>Size: ' . $val["size"] . '</p><p>Stock: ' . $val["stock"] . '</p></div>');

            print ('<div class="two columns"><p>SKU: ' . $val["sku"] . '</p></div>');

            print ('<div class="two columns"><p class="price">' . $val["price"] . '</p></div>');

            print ('</div>');
          }
        }

		}	
	?>
<!--	
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
-->
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
        <input class="button-primary u-pull-right" type="submit" value="Submit Your Order">
      </div>
    </div>    

</div>

<!-- Body -->
				
<?php include 'includes/footer.php'; ?>