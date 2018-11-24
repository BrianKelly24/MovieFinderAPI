<?php 

    //Glenn's week 6 lab code!
    $user = 'root';
	$pass = '';
	$db = 'Login';
	  
	//parameters for connecting to database 
	$conn = new mysqli('127.0.0.1', $user, $pass, $db) or die("Unable to connect");
	   
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

?>