<?php
	include 'includes/header.php';	
?>

<!-- Body -->
		<div class="container" id="content">
			<div class="row title-section">
				<div class="twelve columns">
					<h2>Create Account</h2>
				</div>
			</div>
			<div class="row">
<?php
			// if submission
			if (isset($_POST['submit'])) 
				{
					// empty errors array
					$errors = array();
					// email validation
					if (empty($_POST['email'])) 
					{
						$errors['email_empty'] = "Your email cannot be blank.";
					}
					// password validation
					if (empty($_POST['password'])) 
					{
						$errors['password_empty'] = "Your password cannot be blank.";
					}
					// fName validation
					if (empty($_POST['fName'])) 
					{
						$errors['fName_empty'] = "Your first name cannot be blank.";
					}
					// full name validation
					if (empty($_POST['lName'])) 
					{
						$errors['lName_empty'] = "Your last name cannot be blank.";
					}		
					// address validation
					if (empty($_POST['address'])) 
					{
						$errors['address_empty'] = "Your address cannot be blank.";
					}
					// city validation
					if (empty($_POST['city'])) 
					{
						$errors['city_empty'] = "Your city cannot be blank.";
					} else if (strlen($_POST['city']) < 2) 
							{
								$errors['city_error'] = "City cannot be less than 2 characters long.";
							}
					// state validation
					if (empty($_POST['state'])) 
					{
						$errors['state_empty'] = "Your state cannot be blank.";
					} else if (!ctype_alpha($_POST['state'])) 
							{
								$errors['state_not_letters'] = "Your state can only contain letters.";
							} else if (strlen($_POST['state']) != 2) 
									{
										$errors['state_error'] = "Your state must be 2 letters exactly.";
									}
					// zip validation
					if (empty($_POST['zipcode'])) 
					{
						$errors['zipcode_empty'] = "Your zip cannot be blank.";
					} else if (!is_numeric($_POST['zipcode'])) 
								{
									$errors['zip_not_number'] = "Your zip code can only be numbers.";
								} else if (strlen($_POST['zipcode']) != 5) 
										{
											$errors['zip_error'] = "Your zip code must be 5 numbers exactly.";
										}

					// if no errors
					if (count($errors) == 0) 
					{
						if (isset($_POST['submit'])) 
						{
<<<<<<< HEAD
							$email 		= $_POST['email'];
=======
							$username	= $_POST['username'];
>>>>>>> e38309a3891b3852292a0fb819764bb8d87e1030
							$password 	= $_POST['password'];
							$fName 		= $_POST['fName'];
							$lName 		= $_POST['lName'];
							$address 	= $_POST['address'];
							$city 		= $_POST['city'];
							$state 		= $_POST['state'];
							$zipcode 	= $_POST['zipcode'];
<<<<<<< HEAD
							$hashed_password = sha1($password);
							$clients_sql = "SELECT * FROM clients WHERE email='" . $email . "' LIMIT 1";
=======
							$email      = $_POST['email'];
							$hashed_password = sha1($password);
							$clients_sql = "SELECT * FROM clients WHERE username='" . $username . "' LIMIT 1";
>>>>>>> e38309a3891b3852292a0fb819764bb8d87e1030
							$clients_result = $connection->query($clients_sql);
							if ($clients_result->num_rows == 1) 
							{
								print "<h3>Account already exists. Try again.</h3><br/>";
							} 
							else 
							{
                                $insert_client_query = "INSERT INTO clients 
<<<<<<< HEAD
										(client_id, first_name, last_name, phone, address, apt_suite, city, state, zipcode, email, password, user_level) 
								VALUES (NULL, '$fName', '$lName', '".$_POST['phone']."', '$address', '".$_POST['aptSuite']."',
														'$city', '$state', '$zipcode', '$email', '$hashed_password', 'guest')";        
           
								$insert_client_result = $connection->query($insert_client_query);
								print "<h3>Account created! </h3><br/>";
								$_SESSION['logged_in'] = true;
								$_SESSION['logged_first_name']	= $fName;
								$_SESSION['logged_user_level'] 	= 'guest';
								$_SESSION['logged_email'] 		= $email;
=======
										(client_id, first_name, last_name, phone, address, apt_suite, city, state, zipcode, email, password, user_level, username) 
								VALUES (NULL, '$fName', '$lName', '".$_POST['phone']."', '$address', '".$_POST['aptSuite']."',
														'$city', '$state', '$zipcode', '$email', '$hashed_password', 'guest', $username)";        
           
								$insert_client_result = $connection->query($insert_client_query);
								print "<h3>Account created! </h3><br/>";
								$_SESSION['logged_in'] 			= true;
								$_SESSION['logged_first_name']	= $fName;
								$_SESSION['logged_user_level'] 	= 'guest';
								$_SESSION['logged_username'] 	= $username;
>>>>>>> e38309a3891b3852292a0fb819764bb8d87e1030
								print "<h3>You are now logged in " . $fName . ". You will be redirected to the homepage in 5 seconds.</h3>";
								header("Refresh:5; url=home.php");
							}
						}
					}
				}	
?>			

			<form id="clientform" method="post" action="create_account.php">
				<div class="row">
					<div class="six columns">
<<<<<<< HEAD
						<label for="email">Email </label>
						<input class="u-full-width" type="text" id="email" name="email">
=======
						<label for="username">Username </label>
						<input class="u-full-width" type="text" id="username" name="username">
>>>>>>> e38309a3891b3852292a0fb819764bb8d87e1030
					</div>
					<div class="six columns">
						<label for="password">Password</label>
						<input class="u-full-width" type="password"  id="password" name="password">
					</div>
				</div>
				<div class="row">
					<div class="six columns">
						<label for="fName">First Name</label>
						<input class="u-full-width" type="text" id="fName" name="fName">
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
<<<<<<< HEAD
					</div>
					<div class="six columns">
						<label for="phone">Phone Number</label>
						<input class="u-full-width" type="text"  id="phone" name="phone">
					</div>	
				</div>					
=======
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
				
>>>>>>> e38309a3891b3852292a0fb819764bb8d87e1030
				<input class="button-primary" type="submit" name="submit" id="submit" value="Submit">
			</form> 
			</div>
		</div>
<!-- /Body -->
		
<?php include 'includes/footer.php'; ?>