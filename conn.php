<?php
	$servername = "localhost";
	$username = "root";
	$password = "0886264604";
	$dbname = "cs";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	mysqli_set_charset($conn,"utf8");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>