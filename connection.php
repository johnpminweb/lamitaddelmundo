<?php

	$servername = "localhost";
	$db_user = "root";
	$db_password = "root";
	$db_name = "test";

	$conn = new mysqli($servername, $db_user, $db_password, $db_name);

	if($conn->connect_error){
		die("Error: Connection to Database adorted. " . $conn->connect_error);
	}

?>