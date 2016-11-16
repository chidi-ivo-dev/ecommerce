<?php
	$mysqli = new mysqli("sulley.cah.ucf.edu", "dig4530c_004", "knights123!", "dig4530c_004");
  //$mysqli = new mysqli("localhost", "user", "password", "database");
  
	
	if ($mysqli->error) 
		{
		print "Error connecting! Message:" .$mysqli->error;
		} 
		
		    elseif (($mysqli->error)==false){
        print("connected");
    }
 
		
?>	
	

