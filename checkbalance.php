<?php 
	  	$user_id=$_REQUEST["user_id"];
  			include 'db2.php';
			$result=mysqli_query($con,"select * from user where user_id='".$user_id."';");
			$arr=mysqli_fetch_assoc($result);
			$username=$arr["username"];
			$balance=$arr["acc_balance"];

			header("location:bookspecialadminRecharge.php?username=".$username."&user_id=".$user_id."&acc_balance=".$balance."");


?>	

	