<?php
	$con=mysqli_connect("localhost","root","","fb");
	
	
	if(!$con)
	{
		die("connection error ".mysqli_connect_error());
	}

?>