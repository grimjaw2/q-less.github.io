<?php
	$money=$_REQUEST["money"];
	$user_id=$_REQUEST["user_id"];
	$acc_balance=$_REQUEST["acc_balance"];
	$money=$money+$acc_balance;

	include 'db2.php';
	
	mysqli_query($con,"update user set acc_balance=".$money." where user_id='".$user_id."';");

	header("location:bookspecialadminRecharge.php");
?>