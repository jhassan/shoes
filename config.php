<?php
	$DB_Server = "localhost";
	$DB_Username ="root";
	$DB_Password = "";
	$DB_DBName = "shoes";

	// Create connection
	$conn = mysqli_connect($DB_Server, $DB_Username, $DB_Password,$DB_DBName);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	
	$strPath = "";
	$dTimeOffset = -36000;		// offset time 10 hrs reverse

	// login script relative path -- security is not checked on this page
	$strLoginScriptPath = "/shoes/index.php";
	
	// Shoes Size Group 
	$arrGroup[] = "02-05";
	$arrGroup[] = "01-13";
	$arrGroup[] = "06-11";
	$arrGroup[] = "36-41";
	$arrGroup[] = "39-45";

	// Party 
	$arrParty[] = "Bata";
	$arrParty[] = "Service";

?>