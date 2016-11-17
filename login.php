<?php
	include 'includes/header.php'; 
?>
<!-- Body -->
		<div class="container" id="content">
			<div class="row">
<?php
				if (isset($_SESSION['logged_in'])) 
				{
					print ("
						<div class='row login-container'>
							<div class='one-half column'>
								<h2>Log Out</h2>
								<p>You are logged in, " . $_SESSION['logged_first_name'] . ". Click here to logout: </p>
								<a href='logout.php'><input class='button-primary create-account-button' type='submit' value='Logout'></a>								
							</div>
						</div>
					");					
				} 
				else 
				{
					print ("
						<div class='row login-container'>
							<div class='one-half column'>
								<h2>Log In</h2>
								<form name='login' action='login.php' method='POST'>
									<b>Email: </b><input class='u-full-width' type='text' name='email'><br/>
									<b>Password: </b><input class='u-full-width' type='password' name='password'><br/>
									<input id='button' class='button-primary' name='submit' id='submit' type='submit' value='Login'>
								</form>
							</div>
							<div class='one-half column u-pull-right'>
								<h2>Create Account</h2>
									<p>Don't have an account? Create one here!</p>
									<a href='create_account.php'><input class='button-primary create-account-button' type='submit' value='Create Account'></a>
							</div>
						</div>
					");
					if ((isset($_POST['submit'])) && (!isset($_SESSION['logged_in']))) 
					{
<<<<<<< HEAD
						$email= mysql_real_escape_string($_POST['email']);
=======
						$username= mysql_real_escape_string($_POST['username']);
>>>>>>> e38309a3891b3852292a0fb819764bb8d87e1030
						$password= mysql_real_escape_string($_POST['password']);
						$sha_password = sha1($password);
						$login_sql= "SELECT * FROM clients";
						$login_result= $connection->query($login_sql);
						while ($row = $login_result->fetch_object()) 
						{
<<<<<<< HEAD
							if (($email == ($row->email)) && ($sha_password  == ($row->password)))
=======
							if (($username == ($row->username)) && ($sha_password  == ($row->password)))
>>>>>>> e38309a3891b3852292a0fb819764bb8d87e1030
								{ 
								$_SESSION['logged_in'] = true;
								$_SESSION['logged_first_name']	= $row->first_name;
								$_SESSION['logged_user_level'] 	= $row->user_level;
<<<<<<< HEAD
								$_SESSION['logged_email'] 		= $row->email;
=======
								$_SESSION['logged_username'] 	= $row->username;
>>>>>>> e38309a3891b3852292a0fb819764bb8d87e1030
								$_SESSION['logged_client_idl'] 	= $row->client_id;
								} 
						}
						if (isset($_SESSION['logged_in']))
							{
							print "<h3>You are now logged in " . $_SESSION['logged_first_name'] . ". You will be redirected to the homepage in 5 seconds.</h3>";
									header("Refresh:5; url=home.php");
							}
						else 
							{
							print "<h3>The login information you entered is incorrect, please try again.<h3>";
							}

					}
				}
?>
			 </div>
		</div>
<!-- /Body -->
		
<?php include 'includes/footer.php'; ?>