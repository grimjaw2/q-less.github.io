<?php

	include "db2.php";

	$V1=$_REQUEST["V1"];
	$V2=$_REQUEST["V2"];
	$V3=$_REQUEST["V3"];
	$V4=$_REQUEST["V4"];
	$V5=$_REQUEST["V5"];
	$V6=$_REQUEST["V6"];
	$V7=$_REQUEST["V7"];
	$V8=$_REQUEST["V8"];
	$V9=$_REQUEST["V9"];
	$V10=$_REQUEST["V10"];
	$V11=$_REQUEST["V11"];
	$V12=$_REQUEST["V12"];
	$V13=$_REQUEST["V13"];
	$V14=$_REQUEST["V14"];
	$V15=$_REQUEST["V15"];
	$V16=$_REQUEST["V16"];
	$V17=$_REQUEST["V17"];
	$V18=$_REQUEST["V18"];
	$V19=$_REQUEST["V19"];
	$V20=$_REQUEST["V20"];
	$V21=$_REQUEST["V21"];


	$NV1=$_REQUEST["NV1"];
	$NV2=$_REQUEST["NV2"];
	$NV3=$_REQUEST["NV3"];
	$NV4=$_REQUEST["NV4"];
	$NV5=$_REQUEST["NV5"];
	$NV6=$_REQUEST["NV6"];
	$NV7=$_REQUEST["NV7"];
	$NV8=$_REQUEST["NV8"];
	$NV9=$_REQUEST["NV9"];
	$NV10=$_REQUEST["NV10"];
	$NV11=$_REQUEST["NV11"];
	$NV12=$_REQUEST["NV12"];
	$NV13=$_REQUEST["NV13"];
	$NV14=$_REQUEST["NV14"];
	$NV15=$_REQUEST["NV15"];
	$NV16=$_REQUEST["NV16"];
	$NV17=$_REQUEST["NV17"];
	$NV18=$_REQUEST["NV18"];
	
	


	$BN1=$_REQUEST["BN1"];
	$BN2=$_REQUEST["BN2"];
	$BN3=$_REQUEST["BN3"];
	$BN4=$_REQUEST["BN4"];
	$BN5=$_REQUEST["BN5"];
	$BN6=$_REQUEST["BN6"];
	$BN7=$_REQUEST["BN7"];
	$BN8=$_REQUEST["BN8"];
	$BN9=$_REQUEST["BN9"];




	$RP1=$_REQUEST["RP1"];
	$RP2=$_REQUEST["RP2"];
	$user_id=$_REQUEST["user_id"];
	
	$ordername=[];
	$orderprice=[];
	$i=0;
	
	if($V1=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V1';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
	if($V2=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V2';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V3=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V3';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V4=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V4';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V5=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V5';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V6=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V6';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V7=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V7';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V8=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V9';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V9=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V9';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V10=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V10';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V11=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V11';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V12=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V12';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V13=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V13';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V14=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V14';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V15=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V15';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V16=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V16';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V17=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V17';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V18=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V18';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		
		if($V19=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V19';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V20=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V20';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
		if($V21=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='V21';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}




if($NV1=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV1';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV2=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV2';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV3=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV3';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV4=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV4';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV5=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV5';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV6=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV6';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV7=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV7';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV8=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV8';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV9=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV9';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV10=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV10';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV11=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV11';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV12=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV12';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV13=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV13';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV14=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV14';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV15=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV15';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV16=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV16';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV17=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV17';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($NV18=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='NV18';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}




if($BN1=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='BN1';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($BN2=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='BN2';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($BN3=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='BN3';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($BN4=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='BN4';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($BN5=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='BN5';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($BN6=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='BN6';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($BN7=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='BN7';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($BN8=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='BN8';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}
if($BN9=="yes")
		{
			$result=mysqli_query($con,"select * from items where item_code='BN9';");
			$result=mysqli_fetch_assoc($result);
			$ordername[$i]=$result["item_name"];
			$orderprice[$i]=$result["price"];
			$i=$i+1;
		}


		file_put_contents("array1.json",json_encode($ordername));
		file_put_contents("array2.json",json_encode($orderprice));



	header("location:bookspecialorder.php?RP1=".$RP1."&RP2=".$RP2."&i=".$i."&user_id=".$user_id."");


	
	
?>