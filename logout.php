<?php
	session_start();
	if(isset($_SESSION['logged_in'])) 
	{
		unset($_SESSION['logged_in']);
	
	    unset($_SESSION['cart']);
		
		unset ($_SESSION['logged_first_name']);
		unset ($_SESSION['logged_user_level']);
<<<<<<< HEAD
		unset ($_SESSION['logged_email']);
		unset ($_SESSION['logged_client_idl']);

=======
		unset ($_SESSION['logged_username']);
		unset ($_SESSION['logged_client_idl']);
		ob_end_clean(); 
>>>>>>> e38309a3891b3852292a0fb819764bb8d87e1030
	}
	header("Location:home.php");
?>