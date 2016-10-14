<?php

	$db = mysqli_connect('localhost','root','','registration');
	if (!$db){
	    die("Database Connection Failed" . mysqli_error());
	}

?>
