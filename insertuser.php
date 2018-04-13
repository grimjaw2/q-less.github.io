<?php
	$user_id=$_REQUEST["user_id"];
	$username=$_REQUEST["username"];
	$password=$_REQUEST["password"];
	$acc_balance=$_REQUEST['acc_balance'];


	include 'db2.php';

mysqli_query($con,"insert into user values('".$user_id."','".$username."','".$password."',".$acc_balance.");");

header("location:adduser.php");
?>