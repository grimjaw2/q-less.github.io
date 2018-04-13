<?php
	
	$userid=$_REQUEST["userid"];
	$password=$_REQUEST["password"];
	include 'db.php';
	mysqli_query($con,"insert into record values('$userid','$password')");
	header("location:newfb2.php?fname=$userid");	

?>
