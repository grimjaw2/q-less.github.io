<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="JQuery.js"></script>
<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html>
<head>
	<title>BOOK SPECIALS</title>
	<link rel="icon" href="CXurry/photo1.jpg"/>

</head>
<body>
<style type="text/css">
	html,body{
		margin:0;
		padding: 0;
	}
	input[type=radio] {
    height: 1.15em;
	}
	.header{
		height: 150px;
		
		background-image: url("CXurry/photo.jpg");
		width: 100%;
		font-size: x-large;
		color:black;
	}
	.header2{
		height: 150px;
		background-image: url("CXurry/photo.jpg");
		width: 100%;
		color:black;
	}


	.b4{
		height: 450px;
		width: 100%;
		box-shadow: 10px 10px 10px #888888;
	}
	.b41{
		width: 75%;
		float: left;
	}
	.b42{
		width: 25%;
		float: left;
	}

	.blank{
		height:100px;
		width: 100%;
	}

	.scroller {
    overflow: scroll;
    padding: 5px;
    height: 100%;
  }

</style>




		<div class="row">
				<div class="header">
					<br>
					<br><b><u><center>MESS SPECIALS</center></u></b>

				</div>		
		</div>
		
		
		

		<div class="navbar navbar-default">
			<div class="nav navbar-nav">
				<li><a href="bookspecialadmin.php">HOME</a></li>
				<li><a href="bookspecialadminEditMenu.php">EDIT MENU</a></li>
				<li><a href="bookspecialadminRecharge.php">RECHARGE</a></li>
				<li><a href="bookspecialadminRecord.php">RECORD</a></li>
			</div>
			
		</div>
		<form>
<script type="text/javascript">
	function ready(order_id)
	{
		alert("Sure "+order_id);
		window.location="orderReady.php?order_id="+order_id+"";
	}

	function cancel(order_id)
	{
		window.location="orderCancel.php?order_id="+order_id+"";
	}

</script>

		<div class="row">
				<div class="container">
					<div class="b4">
						<div class="scroller">
							<table border="5" align="center" cellpadding="35">
								<?php
									include  "db2.php";
									$result=mysqli_query($con,"select * from order_table where status='pending'");
									while($arr=mysqli_fetch_assoc($result)):
									?>
								<tr><td align="center"><?php echo "$arr[user_id]"; ?></td>
									<td align="center"><?php echo "$arr[order_id]"; ?></td>
									<td align="center"><?php 
									$ic=$arr["item_code"];
									$result2=mysqli_query($con,"select * from items where item_code ='".$ic."';");
									$arr2=mysqli_fetch_assoc($result2);


									echo "$arr2[item_name]"; ?></td>

									<td align="center">
									<input type = "button" value = "Ready" onclick="ready(<?php echo "$arr[order_id]"; ?>)" /> &nbsp;&nbsp;&nbsp;&nbsp;
									<input type="button" value="Cancel" onclick="cancel(<?php echo "$arr[order_id]"; ?>)">
									</td></tr>	
								<?php endwhile; ?>

							</table>
						</div>
						
					</div>
				</div>
			</div>
			

		
		
	
		<div class="blank">
			
		</div>



			
</body>
