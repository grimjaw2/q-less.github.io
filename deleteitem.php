<?php
	$item_code=$_REQUEST["item_code"];
	

	include 'db2.php';
	mysqli_query($con,"delete from order_table where item_code='".$item_code."';");

	mysqli_query($con,"delete from items where item_code='".$item_code."';");
	header("location:bookspecialadminEditMenu.php");
?>