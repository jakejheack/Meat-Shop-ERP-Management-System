<?php
	$conn = new mysqli('localhost', 'u862287489_lehmann', 'Securelink143', 'u862287489_lehmanndb');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>