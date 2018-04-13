<?php
	$item_code=$_REQUEST["item_code"];
	$item_name=$_REQUEST["item_name"];
	$category=$_REQUEST["category"];
	$price=$_REQUEST["price"];

	include 'db2.php';

	$result=mysqli_query($con,"select * from items;");
	$i=0;
	while($arr=mysqli_fetch_assoc($result))
	{
		if(strcmp($arr["item_code"],$item_code)==0)
		{
			$i=1;
			break;
		}
	}

	if($i==0)
	{
		mysqli_query($con,"insert into items values('".$item_code."','".$item_name."','".$category."',".$price.");");
		header("location:bookspecialadminEditMenu.php?error=ADDED SUCCESSFULLY");
	}
	else
	{
		header("location:bookspecialadminEditMenu.php?error=ITEM CODE EXISTS CHANGE ITEM CODE");
	}

?>