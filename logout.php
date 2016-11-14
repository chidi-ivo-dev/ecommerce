<?php
	
	session_start();
	
	if (isset($_SESSION['logged_in'])) {

	    session_destroy($_SESSION['logged_in']);   // destroy session data in storage

		header("location:home.php");
		
	}

?>