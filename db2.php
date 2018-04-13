<?php
	$con=mysqli_connect("localhost","root","","db2");
	
	
	if(!$con)
	{
		die("connection error ".mysqli_connect_error());
	}
	
?>