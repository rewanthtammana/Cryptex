<?php

	error_reporting(0);
	include '';

	session_unset();
	session_destroy();

	echo "<center><h1><font color='green'>Successfully logged out</font></h1></center>";
	header("refresh:1;url='../FRONTPAGE/frontpage.html'");

?>