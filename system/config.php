<?php 
	define("HOST","localhost");
	define("DB_USER","u862287489_lehmann");
	define("DB_PASS","Securelink143");
	define("DB_NAME","u862287489_lehmanndb");
	
	
	$conn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	
	if(!$conn)
	{
		die(mysqli_error());
	}
	
?>