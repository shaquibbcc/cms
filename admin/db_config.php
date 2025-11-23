<?php
	
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "cms_db";
	 
	$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

	if(mysqli_connect_errno()) {

		echo "Error: Could not connect to database.";
		exit;
	}