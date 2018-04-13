<?php
	$item_code=$_REQUEST["item_code"];
	$price=$_REQUEST["price"];

	echo "$price";
	echo "$item_code";

	include 'db2.php';
	mysqli_query($con,"update items set price=".$price." where item_code='".$item_code."';");
	header("location:bookspecialadminEditMenu.php");
?>