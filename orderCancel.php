<?php
	$order_id=$_REQUEST["order_id"];

	include 'db2.php';
	$result=mysqli_query($con,"select * from order_table where date=CURDATE() and order_id=".$order_id.";");
	$arr=mysqli_fetch_assoc($result);
	$user_id=$arr["user_id"];
	$item_code=$arr["item_code"];

	$result=mysqli_query($con,"select * from items where item_code='".$item_code."';");
	$arr=mysqli_fetch_assoc($result);
	$price=$arr["price"];

	$result=mysqli_query($con,"select * from user where user_id='".$user_id."';");
	$arr=mysqli_fetch_assoc($result);
	$balance=$arr["acc_balance"];
	$balance=$balance+$price;

	mysqli_query($con,"update user set acc_balance=".$balance." where user_id='".$user_id."';");

	mysqli_query($con,"delete from order_table where date=CURDATE() and order_id=".$order_id.";");

	header("location:bookspecialadmin.php");
?>