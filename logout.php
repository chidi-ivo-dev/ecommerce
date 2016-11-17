<?php
	session_start();
	if(isset($_SESSION['logged_in'])) 
	{
		unset($_SESSION['logged_in']);
	
	    unset($_SESSION['cart']);
		
		unset ($_SESSION['logged_first_name']);
		unset ($_SESSION['logged_user_level']);
		unset ($_SESSION['logged_client_id']);
		unset ($_SESSION['logged_username']);
		
		ob_end_clean(); 
	}
	header("Location:home.php");
?>