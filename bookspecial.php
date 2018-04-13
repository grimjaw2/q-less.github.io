<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="JQuery.js"></script>
<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>

<?php 
	if(isset($_REQUEST['error']))
{
  	$err=$_REQUEST["error"];
  	echo '<script language="javascript">';

		echo "alert('".$err."')";
		echo '</script>';


}


		
?>


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
	.header{
		height: 150px;
		
		background-color: black;
		background-repeat: repeat;
		width: 100%;
		font-size: x-large;
		color:white;
	}
	.header2{
		height: 150px;
		background-color: black;
		width: 100%;
		color:white;
	}
	
	.backgr{
		width: 100%;
		background-image: url("CXurry/ll.jpg");
		
		height: 75%;
	}

	.b3{
		background-color: white;
		height: 400px;
		width: 100%;
		box-shadow: 10px 10px 10px #888888;

	}

	.b4{
		height: 400px;
		width: 100%;
		box-shadow: 10px 10px 10px #888888;
	}
	
	
	.blank{
		height:400px;
		width: 100%;
	}

	.scroller {
    overflow: scroll;
    padding: 5px;
    height: 100%;
  }

</style>


	
		<div class="row">
			<div class="col-sm-7">
				<div class="header">
					<br>
					<br><center>
					
					<b><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>MESS SPECIALS</center></u></b></center>

				</div>
			</div>
				<div class="header2">
				<br>
					<form action="checkpassword.php" method="post">
					
						<b>UserID</b><input type="text" name="user_id" id="u1">
						<b>Password</b><input type="password" name="password" id="p1">
						<input type="submit" name="button1" value="Sign In" onclick="check()">
						<br>
						<a href="http://localhost:81/projects/bookspecialfp.php"><b>Forgot Password?</b></a>
						
					</form>
				</div>
		</div>
		
<div class="backgr">		
		<div class="row">
			<marquee onmouseover="stop()" onmouseout="start()">IIIT BBSR : MESS SPECIALS</marquee>
		</div>
		<div class="row">
		<div class="col-sm-1">
			<div class="blank">
				
			</div>
		</div>
			<div class="col-sm-3">
				
				<div class="b3">
					<div class="scroller">
					<b><center>ORDERS IN QUEUE</center></b>
					<ul>
					<?php
									include  "db2.php";
									$result=mysqli_query($con,"select * from order_table where status='ready' order by order_id DESC");
									while($arr=mysqli_fetch_assoc($result)):
									?>
						<li><?php echo "$arr[order_id]" . '&nbsp;' . '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp'. '&nbsp'. '&nbsp'. '&nbsp'. '&nbsp' ; 
							
								echo " ID-:";	
								echo "$arr[user_id]";		 ?></a></li><br>

					<?php endwhile; ?>
					</ul>
					</div>
						
					</div>
			</div>
			<div class="col-sm-1">
			<div class="blank">
				
			</div>
		</div>
			<div class="col-sm-5">
				
				<div class="b4">
						
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active">
				<img src="CXurry/1.jpg" style="height:400px; width:100%;">
				<div class="carousel-caption">Learn Here</div>
				</div>

				<div class="item">
				<img src="CXurry/chk.jpg" style="height:400px; width:100%;" >
				</div>

				<div class="item">
				<img src="CXurry/ckicken.jpg" style="height:400px; width:100%;">
				</div>

				<div class="item">
				<img src="CXurry/11.jpg"  style="height:400px; width:100%;">
				</div>

				<div class="item">
				<img src="CXurry/12.jpg"  style="height:400px; width:100%;">
				</div>

				<div class="item">
				<img src="CXurry/chk.jpg"  style="height:400px; width:100%;">
				</div>

				<div class="item">
				<img src="CXurry/ll.jpg"  style="height:400px; width:100%;">
				</div>

				<div class="item">
				<img src="CXurry/PaneerTikka.jpg"  style="height:400px; width:100%;">
				</div>
				<div class="item">
				<img src="CXurry/cornm.jpg"  style="height:400px; width:100%;">
				</div>
				<div class="item">
				<img src="CXurry/12.jpg"  style="height:400px; width:100%;">
				</div>
				<div class="item">
				<img src="CXurry/ckicken.jpg"  style="height:400px; width:100%;">
				</div>
			</div>


	<a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span>
	</a>

	


			</div>
			
					
				
			</div>
			
			</div>
			
			
	</div>	
			
</body>
