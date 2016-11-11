<?php

	include 'includes/header.php';	

?>

<!-- Body -->
		<div class="container" id="content">
			<div class="row">
<?
			// if submission
				if ($_POST) {

					// empty errors array
					$errors = array();

					// username validation
					if (empty($_POST['username'])) {

						$errors['username_empty'] = "Your username cannot be blank.";
					}

					// password validation
					if (empty($_POST['password'])) {

						$errors['password_empty'] = "Your password cannot be blank.";

					}

					// email validation
					if (empty($_POST['email'])) {

						$errors['email_empty'] = "Your email cannot be blank.";
					}

					// full name validation
					if (empty($_POST['full_name'])) {

						$errors['full_name_empty'] = "Your name cannot be blank.";
					}		

					// address validation
					if (empty($_POST['address'])) {

						$errors['address_empty'] = "Your address cannot be blank.";

					}

					// city validation
					if (empty($_POST['city'])) {

						$errors['city_empty'] = "Your city cannot be blank.";

					} else if (strlen($_POST['city']) < 2) {

						$errors['city_error'] = "City cannot be less than 2 characters long.";
					}

					// state validation
					if (empty($_POST['state'])) {

						$errors['state_empty'] = "Your state cannot be blank.";

					} else if (!ctype_alpha($_POST['state'])) {

						$errors['state_not_letters'] = "Your state can only contain letters.";

					} else if (strlen($_POST['state']) != 2) {

						$errors['state_error'] = "Your state must be 2 letters exactly.";
					}

					// zip validation
					if (empty($_POST['zip'])) {

						$errors['zip_empty'] = "Your zip cannot be blank.";

					} else if (!is_numeric($_POST['zip'])) {

						$errors['zip_not_number'] = "Your zip code can only be numbers.";

					} else if (strlen($_POST['zip']) != 5) {

						$errors['zip_error'] = "Your zip code must be 5 numbers exactly.";

					}

					// if no errors
					if (count($errors) == 0) {

						if (isset($_POST['submit'])) {

							$username = $_POST['username'];

							$password = $_POST['password'];

							$full_name = $_POST['full_name'];

							$email = $_POST['email'];

							$address = $_POST['address'];

							$city = $_POST['city'];

							$state = $_POST['state'];

							$zip = $_POST['zip'];

							$hashed_password = sha1($password);

							$user_sql = "SELECT * FROM users WHERE username='" . $username . "' LIMIT 1";

							$user_result = $connection->query($user_sql);

							if ($user_result->num_rows == 1) {

								print "<h3>Account already exists. Try again.</h3>";

							} else {

								$user_sql = "INSERT INTO users (username, password, full_name, email, address, city, state, zip) VALUES ('$username', '$hashed_password', '$full_name', '$email', '$address', '$city', '$state', '$zip') ";

								$user_result= $connection->query($user_sql);

								print "<h3>Account created! You will be redirected to login screen to get started.</h3>";

								header("Refresh:5; url=login.php");

							}
						}
					}
				}	
?>			

				<form action="create_account.php" method="POST" target="">

					<div class="one-half column">
					
						<!--username-->
						<label for="username">
						Username: <input class="u-full-width" type="text" name="username" id="username" value= "<?php if (isset($_POST['username'])) echo $_POST['username'];?>"></label></br>
						<p style="color: red;"><?php if (isset($errors['username_empty'])) echo $errors['username_empty'];?></p>
						
						<!--password-->
						<label for="password">Password: <input class="u-full-width" type="password" name="password" id="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>"></label><br/>
						<p style="color: red;"><?php if (isset($errors['password_empty
						'])) echo $errors['password'];?></p>

						<!--email-->
						<label for="email">Email: <input class="u-full-width" type="text" name="email" id="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"></label><br/>
						<p style="color: red;"><?php if (isset($errors['email_empty'])) echo $errors['email_empty']; ?></p>

						<!-- full_name -->
						<label for="full_name">Full Name: <input class="u-full-width" type="text" name="full_name" id="full_name" value="<?php if (isset($_POST['full_name'])) echo $_POST['full_name']; ?>"></label><br/>
						<p style="color: red;"><?php if (isset($errors['full_name_empty'])) echo $errors['full_name_empty']; ?></p>						
						
					</div>

					<div class="one-half column">

						<!-- address -->
						<label for="address">Address: <input class="u-full-width" type="text" name="address" id="address" value="<?php if(isset($_POST['address'])) echo $_POST['address']; ?>"></label><br/>
	                    <p style="color: red;"><?php if (isset($errors['address_empty'])) echo $errors['address_empty']; ?></p>					
 						
 						<!-- city -->
                        <label for="city">City: <input class="u-full-width" type="text" name="city" id="city" value="<?php if(isset($_POST['city'])) echo $_POST['city']; ?>"></label><br/>
                        <p style="color: red;"><?php if (isset($errors['city_empty'])) echo $errors['city_empty']; ?></p>
                        <p style="color: red;"><?php if (isset($errors['city_error'])) echo $errors['cityError']; ?></p>

                        <!-- state -->
                        <label for="state">State: <input class="u-full-width" type="text" name="state" id="state" value="<?php if(isset($_POST['state'])) echo $_POST['state']; ?>"></label><br/>
                        <p style="color: red;"><?php if (isset($errors['state_empty'])) echo $errors['state_empty']; ?></p>
                        <p style="color: red;"><?php if (isset($errors['state_not_letters'])) echo $errors['state_not_letters']; ?></p>
                        <p style="color: red;"><?php if (isset($errors['state_error'])) echo $errors['state_error']; ?></p>

                        <!-- zip -->
                        <label for="zip">Zip: <input class="u-full-width" type="text" name="zip" id="zip" value="<?php if(isset($_POST['zip'])) echo $_POST['zip']; ?>"></label><br/>
                        <p style="color: red;"><?php if (isset($errors['zip_empty'])) echo $errors['zip_empty']; ?></p>
                        <p style="color: red;"><?php if (isset($errors['zip_not_number'])) echo $errors['zip_not_number']; ?></p>
                        <p style="color: red;"><?php if (isset($errors['zip_error'])) echo $errors['zip_error']; ?></p>
                        
                        <input class="u-pull-right button-primary" id="button" name="submit" id="submit" type="submit"></input>													
					</div>
				</form>
			 </div>
		</div>
<!-- /Body -->
		
<?php include 'includes/footer.php'; ?>