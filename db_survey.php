<?php
	$dbhost = "localhost";
	$dbuser = "UPDATE_USERNAME";
	$dbpass = "UPDATE_PASSWORD";
	$dbname = "UPDATE_DATABASE";
	$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if(mysqli_connect_errno()) {
		die( "Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
	}
?>