<?php
	
	$user_id=$_REQUEST["user_id"];

	include 'db2.php';

	mysqli_query($con,"update user set acc_balance=0 where user_id='".$user_id."';");

	header("location:bookspecialadminRecharge.php");
?>