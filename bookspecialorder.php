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

<form action="bookspecial.php">
	
		<div class="row">
				<div class="header">
					<br>
					<br><b><u><center>MESS SPECIALS</center></u></b>
					<button class="btn btn-info" onclick="logout()">LOGOUT</span></button><br>

				</div>		
		</div>
</form>		
<div class="backgr">		
		<div class="row">
			<marquee onmouseover="stop()" onmouseout="start()">IIIT BBSR : MESS SPECIALS</marquee>
		</div>
		
		<div class="row">
			<div class="col-sm-3">
				

			</div>
<?php 
	
	$user_id=$_REQUEST["user_id"];
	
?>

<form>


			<div class="col-sm-6">
				<div class="b4">
					<div class="b41">
						<b><h1><u>Items</u></h1></b>
							<ol>
						<?php
							
							$ordername=json_decode(file_get_contents('array1.json'), true);
							$i=$_REQUEST["i"];

							for($z=0;$z<$i;$z++)
							{
							?>
					
							<li><?php echo $ordername[$z]; ?></li>
							
							<?php } ?>

							<?php $RP1=$_REQUEST["RP1"]; 
							if($RP1!=0)
							echo "<li>ROTI($RP1)</li>";  ?>
							<?php $RP2=$_REQUEST["RP2"]; 
							if($RP2!=0)
							echo "<li>Paratha($RP2)</li>";  ?>

						

							<br><br>
							<u><b>TOTAL</b></u>
							</ol>
					</div>
					<div class="b42">
						<b><h1><u>Price</u></h1></b>
							<ul>
							<?php
							$sum=0;
							
							$orderprice=json_decode(file_get_contents('array2.json'), true);
							
							for($z=0;$z<$i;$z++)
							{
							?>
					
							<?php echo $orderprice[$z]; $sum=$sum+$orderprice[$z]; ?>
							<br>
							<?php } ?>
							<?php 
							if($RP1!=0)
							{
								echo 3*$RP1;echo"<br>"; $sum=$sum+(3*$RP1);
							} ?>
							<?php 
							if($RP2!=0)
							{
								echo 5*$RP2;echo "<br>"; $sum=$sum+(5*$RP2);
							}
							 ?><br>
							
							<br><br>
							<u><b><?php echo "$sum"; ?></b></u>
							</ul>
					</div>
					
				</div>
			</div>
			<div class="col-sm-3">
				
			</div>
		</div>

<script type="text/javascript">
	function order()
	{
		var sum="<?php echo $sum; ?>";
		var uid="<?php echo $user_id; ?>";
		var i="<?php echo $i; ?>";
		var s="orderconfirm.php?sum="+sum+"&user_id="+uid+"&i="+i+"";
		window.location=s;
	}

</script>	
		<div class="blank">
				<br>
				<center>
					<br>
					<submit class="btn btn-info btn-lg" onclick="order()">
                   Confirm Your Order</span>
        			</submit> 
				</center>
		</div>
		</form>
</div>	
</body>