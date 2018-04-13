<?php
	$order_id=$_REQUEST["order_id"];
	include "db2.php";

	$result=mysqli_query($con,"update order_table set status='ready' where order_id=".$order_id.";");

	header("location:bookspecialadmin.php");




?>