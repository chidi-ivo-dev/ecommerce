<?php
	session_start();
	if(isset($_SESSION['logged_in'])) 
	{
		unset($_SESSION['logged_in']);
	
	    unset($_SESSION['cart']);
		
		unset ($_SESSION['logged_first_name']);
		unset ($_SESSION['logged_user_level']);
		unset ($_SESSION['logged_username']);
		unset ($_SESSION['logged_client_idl']);
		ob_end_clean(); 
	}
	header("Location:home.php");
?>