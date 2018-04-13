<?php 
	$user_id=$_REQUEST["user_id"];
	$password=$_REQUEST["password"];

	if($user_id=="")
	{
		header("location:bookspecial.php?error=Enter your id");
	}
	else if($password=="")
	{
		header("location:bookspecial.php?error=Enter your Password");
	}
	else{



	include "db2.php";
	
	$result=mysqli_query($con,"select * from user where user_id='".$user_id."';");
	
	if($arr=mysqli_fetch_assoc($result))
	{
		if($arr["password"]==$password)
		{
			
			header("location:bookspeciallogin.php?username=".$arr["username"]."&account=".$arr["acc_balance"]."&user_id=".$user_id."");
	
		}
		else{
			header("location:bookspecial.php?error=Wrong Password");
		}
	}
	else
	{
		header("location:bookspecial.php?error=No such user");
		
	}

}

 ?>