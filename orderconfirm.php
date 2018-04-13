<?php
	
	$sum=$_REQUEST["sum"];
	$user_id=$_REQUEST["user_id"];
	$i=$_REQUEST["i"];

	include 'db2.php';

	$result=mysqli_query($con,"select * from user where user_id='".$user_id."';");

	$arr=mysqli_fetch_assoc($result);
	$balance=$arr["acc_balance"];
	if($balance>=$sum)
	{
		
		$ordername=json_decode(file_get_contents('array1.json'), true);
		
		mysqli_query($con,"insert into givedate values(CURDATE());");
		$result=mysqli_query($con,"select * from givedate;");
		$arr=mysqli_fetch_assoc($result);
		$date=(string)$arr["dd"];
		mysqli_query($con,"delete from givedate;");



		$result=mysqli_query($con," select * from order_table order by date DESC,order_id DESC;");
		$arr=mysqli_fetch_assoc($result);
		$date2=(string)$arr["date"];
		$order_id=$arr["order_id"];

		echo "$date";
		echo "$date2";

		if(strcmp($date,$date2)==0)
		{
		
		}
		else{
			$order_id=0;
		}

		$oids=[];
		for($z=0;$z<$i;$z++)
		{
			$order_id=$order_id+1;
			$result=mysqli_query($con," select * from items where item_name='".$ordername[$z]."';");
			$arr=mysqli_fetch_assoc($result);
			$item_code=$arr["item_code"];



			mysqli_query($con,"insert into order_table values('".$user_id."',CURDATE(),".$order_id.",'".$item_code."','pending');");
		
			$oids[$z]=$order_id;
		}
		$balance=$balance-$sum;
		mysqli_query($con,"update user set acc_balance='".$balance."' where user_id='".$user_id."';");
			
			header("location:bookspecial.php?error=Your ORDER IS PLACED ORDER_ID=".$oids[0]." to ".$oids[$i-1]." ");
		
		
	}
	
	

?>