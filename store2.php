<?php
	
	include 'db.php';
	$fname=$_REQUEST['fname'];
	$sname=$_REQUEST['sname'];
	$mno=$_REQUEST['mno'];
	$password=$_REQUEST['password'];
	
	$day=$_REQUEST['day'];
	$month=$_REQUEST['month'];
	$year=$_REQUEST['year'];

	$gender=$_REQUEST['gender'];
	mysqli_query($con,"insert into record2 values('$fname','$sname','$mno','$password','".$day."/".$month."/".$year."','$gender')");
	header("location:newfb2.php?fname=$fname");

?>
