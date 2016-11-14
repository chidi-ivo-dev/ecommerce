<?php
	// destroy all sessions
	if (session_destroy()) {
		// redirect to the home page
		header("location: home.php");
	}
?>