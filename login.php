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

					print ("<h2>Log In</h2>

							<form name='login' action='login.php' method='POST'>
								<b>Username:</b><input type='text' name='username'><br/>
								<b>Password:</b><input type='password' name='password'><br/>
								<input id='button' name='submit' id='submit' type='submit' value='Login'>
							</form>
					");

				}
?>
			 </div>
		</div>
<!-- /Body -->
		
<?php include 'includes/footer.php'; ?>