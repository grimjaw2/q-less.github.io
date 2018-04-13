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
	input[type=checkbox] {
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
	
	.backgr{
		width: 100%;
		background-color: white;
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

	.b5{
		height: 600px;
		width: 45%;
		box-shadow: 10px 10px 10px #888888;
		background-image: url("paneer4.jpg");
		background-size: 210%;
	}
	
	.b55{
		height: 600px;
		width: 45%;
		box-shadow: 10px 10px 10px #888888;
		background-image: url("chicken.jpg");
		background-size: 210%;
		
	}
	.b6{
		height: 300px;
		width: 45%;
		box-shadow: 10px 10px 10px #888888;
		float: left;
		background-image: url("biriyani2.jpg");
		background-size: 186%;
		
	}
	.b66{
		height: 300px;
		width: 45%;
		box-shadow: 10px 10px 10px #888888;
		float: left;
		background-image: url("roti.jpg");
		background-size: 100%;
		
	}
	.right{
		float: right;
	}
	.b7{
		float: left;
		width: 33%;
	}
	.b8{
		float: left;
		width: 40%;
	}
	.b9{
		float: left;
		width: 30%;
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
					<button class="btn btn-info">LOGOUT</span></button>
					
				</div>		
		</div>
		</form>
<div class="backgr">		
		<div class="row">
			<marquee onmouseover="stop()" onmouseout="start()">IIIT BBSR : MESS SPECIALS</marquee>
		</div>
		BALANCE:
		<?php $balance=$_REQUEST["account"];
				$user_id=$_REQUEST["user_id"];

			echo "Rs $balance/-"; ?>
		<center><u><b>WELCOME <?php $username=$_REQUEST["username"];
									echo $username;
									?></b></u></center><br>
<form>

<script type="text/javascript">

function orderfun()
{
	var j=0;

	var s="order.php?";
 	var sel = document.getElementsByTagName('input');
 	
 	for (var i=0; i<sel.length; i++) 
  	{
    	if(sel[i].checked==true)
     	{
     		s=s+sel[i].name+"=yes&";
     		j=1;

     	}
     	else
     	{
     		s=s+sel[i].name+"=no&";
     	}
    }

  if(j==0)
  {
  	alert("No Main Course Choosen");
  }
  else
  {
  	var uid="<?php echo $user_id; ?>";
  	var rp1=document.getElementById('RP1').value;
  	var rp2=document.getElementById('RP2').value;
  	s=s+"RP1="+rp1+"&RP2="+rp2+"&user_id="+uid+"";
  	window.location=s;

  }

  }

</script>



		<div class="row">
		<div class="col-sm-1"></div>

			<div class="col-sm-5">
			<div class="container">
			<div class="b5">
				<h1><u><b>Veg</b></u><br></h1>
			<div class="b8">
				<ul>

				<?php				include  "db2.php";
									$result=mysqli_query($con,"select * from items where category='VEG' order by price DESC");
									while($arr=mysqli_fetch_assoc($result)):
									?>
				<b>	<li><?php echo "$arr[item_name]";  ?></li>
				<?php endwhile; ?>						
				</b>
				</ul>
			</div>
			<div class="b9">
			<b>	<?php				include  "db2.php";
									$result=mysqli_query($con,"select * from items where category='VEG' order by price DESC");
									while($arr=mysqli_fetch_assoc($result)):
									?>	
					Rs<?php echo "$arr[price]"; ?>/-<br>
					
				<?php endwhile; ?>		
				</b>
				</div>
			
				<div class="b9">
				<?php				include  "db2.php";
									$result=mysqli_query($con,"select * from items where category='VEG' order by price DESC");
									while($arr=mysqli_fetch_assoc($result)):
									?>
					<input type="checkbox" name="<?php echo "$arr[item_code]"; ?>"><br>
								<?php endwhile; ?>							
				</div>
			
				
			</div>
			</div>
			</div>

			<div class="col-sm-5">
			<div class="container">
			<div class="b55">

				<h1><u><b>NonVeg</b></u><br></h1>
				<div class="b8">
					<ul><?php				include  "db2.php";
									$result=mysqli_query($con,"select * from items where category='NONVEG' order by price DESC");
									while($arr=mysqli_fetch_assoc($result)):
									?>
					<b><li><?php echo "$arr[item_name]";  ?></li>
					<?php endwhile; ?>	
				</ul>
				</div>
				
				<div class="b9">
				<b><?php				include  "db2.php";
									$result=mysqli_query($con,"select * from items where category='NONVEG' order by price DESC");
									while($arr=mysqli_fetch_assoc($result)):
									?>
						Rs<?php echo "$arr[price]"; ?>/-<br>
					<?php endwhile; ?>	
				</b>
				</div>
			
				<div class="b9">
				<?php				include  "db2.php";
									$result=mysqli_query($con,"select * from items where category='NONVEG' order by price DESC");
									while($arr=mysqli_fetch_assoc($result)):
									?>
					<input type="checkbox"  name="<?php echo "$arr[item_code]"; ?>"><br>
					<?php endwhile; ?>	
					
				</div>
			</div>
			</div>
			</div>

		</div>
		<div class="blank"></div>	
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-5">
			<div class="container">
			<div class="b6">
			<h1><u><b>Biriyani And Noodles</b></u><br></h1>
			<div class="b8">
				<ul><?php				include  "db2.php";
									$result=mysqli_query($con,"select * from items where category='BIRIYANI' order by price DESC");
									while($arr=mysqli_fetch_assoc($result)):
									?>
						<b><li><?php echo "$arr[item_name]";  ?></li>
						</b>
						<?php endwhile; ?>	
					</ul>
			</div>
			<div class="b9">
				<b><?php				include  "db2.php";
									$result=mysqli_query($con,"select * from items where category='BIRIYANI' order by price DESC");
									while($arr=mysqli_fetch_assoc($result)):
									?>
					Rs <?php echo "$arr[price]"; ?>/-<br>
					<?php endwhile; ?>	
				</b>
				</div>
			
				<div class="b9">
				<?php				include  "db2.php";
									$result=mysqli_query($con,"select * from items where category='BIRIYANI' order by price DESC");
									while($arr=mysqli_fetch_assoc($result)):
									?>
					<input type="checkbox"  name="<?php echo "$arr[item_code]"; ?>"><br>
					
					<?php endwhile; ?>	
				</div>		
			</div>
			</div>
			</div>
			
			<div class="col-sm-5">
			<div class="container">

			<div class="b66">
			<h1><u><b>Roti And Paratha</b></u><br></h1>
			<div class="b8">
				
				<u>
				<ul>
				<b>	
				<?php				include  "db2.php";
									$result=mysqli_query($con,"select * from items where category='ROTI' order by price DESC");
									while($arr=mysqli_fetch_assoc($result)):
									?>	
				<li><?php echo "$arr[item_name]";  ?></li>
					<?php endwhile; ?>	
				</b>
				</ul>
				</u>
			</div>

				<div class="b9">
				<b>
				<?php				include  "db2.php";
									$result=mysqli_query($con,"select * from items where category='ROTI' order by price DESC");
									while($arr=mysqli_fetch_assoc($result)):
									?>	
					Rs <?php echo "$arr[price]"; ?>/pc<br>
				<?php endwhile; ?>
				</b>
				</div>
			
				<div class="b9">
				<?php				include  "db2.php";
									$result=mysqli_query($con,"select * from items where category='ROTI' order by price DESC");
									while($arr=mysqli_fetch_assoc($result)):
									?>	
					<select name="RP1" id="<?php echo "$arr[item_code]"; ?>">
						<option>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
						<option>20</option>
					</select><br>
					<?php endwhile; ?>
					<br>
				</div>
			</div>
			
				</div>
				</div>
		</div>
	
		<div class="blank">
				<br>
				<center>
					<br><submit class="btn btn-info btn-lg" onclick="orderfun()">
          <span class="glyphicon glyphicon-arrow-right"><br>
          Place Your Order
        			</submit>

				</center>
				
		</div>
		</form>


</div>
			
</body>
