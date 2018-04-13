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
		height: 700px;
		width: 80%;
		box-shadow: 10px 10px 10px #888888;
	}
	.b3{
		height: 700px;
		width: 30%;
		box-shadow: 10px 10px 10px #888888;
	}
	
	

	.blank{
		height:100px;
		width: 100%;
	}

	.scroller {
    overflow: scroll;
    padding: 5px;
    height: 70%;
  }

</style>


	
		<div class="row">
				<div class="header">
					<br>
					<br><b><u><center>MESS SPECIALS</center></u></b>

				</div>		
		</div>
		
<div class="backgr">		
		

		<div class="navbar navbar-default">
			<div class="nav navbar-nav">
				<li><a href="bookspecialadmin.php">HOME</a></li>
				<li><a href="bookspecialadminEditMenu.php">EDIT MENU</a></li>
				<li><a href="bookspecialadminRecharge.php">RECHARGE</a></li>
				<li><a href="bookspecialadminRecord.php">RECORD</a></li>
			</div>
	
<?php

	include 'db2.php';
	?>



		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="container">
					<div class="b3">
						ORDER OF THE DAY: 
						<?php
							$result=mysqli_query($con,"SELECT
    item_code,
    count(item_code) AS 'item_code_frequency'
FROM
    order_table
    where date=CURDATE()

GROUP BY
    item_code
ORDER BY
    item_code_frequency DESC");
							$arr=mysqli_fetch_assoc($result);
							$ic=$arr["item_code"];
							$result=mysqli_query($con,"select * from items where item_code='".$ic."';");
							$arr=mysqli_fetch_assoc($result);
							echo "$arr[item_name]";


						?><br><br>
						
						
					</div>
				</div>
			</div>
			
<form>

<script type="text/javascript">
	function show()
	{
		var d1=document.getElementById('1').value;
		var m1=document.getElementById('2').value;
		var y1=document.getElementById('3').value;
		var d2=document.getElementById('4').value;
		var m2=document.getElementById('5').value;
		var y2=document.getElementById('6').value;
		window.location="record.php?d1="+d1+"&d2="+d2+"&m1="+m1+"&m2="+m2+"&y1="+y1+"&y2="+y2+"";


	}

</script>



			<div class="col-sm-7">
			<div class="b4">
				<br>
				<center><h1>ORDER HISTORY</h1><br></center>
				<center>
<select id="1">

<option hidden="true">Day</option>

<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>

		</select>

<select id="2">

<option hidden="true">Month</option>

<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>

		</select>


<select id="3">

<option hidden="true">Year</option>

<option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option><option>2017</option><option>2018</option>

</select> To
<select id="4">
<option hidden="true">Day</option>

<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>

		</select>

		<select id="5">

<option hidden="true">Month</option>

<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>

		</select>


		<select id="6">

<option hidden="true">Year</option>

<option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option><option>2017</option><option>2018</option>

</select>

				<input type="button" name="orderhistory" value="SHOW" onclick="show()">
</center>
				<center>
				<div class="scroller">
					
				<div id="ord">
				<table border="1" cellpadding="10">
					<tr>
						<th>DATE</th>
						<th>ITEM</th>
						<th>QUANTITY</th>
					</tr>
					<?php
$sum=0;
					if(isset($_REQUEST['d1']))
			{ 
					$d1=$_REQUEST["d1"];
					$d2=$_REQUEST["d2"];
					$m1=$_REQUEST["m1"];
					$m2=$_REQUEST["m2"];
					$y1=$_REQUEST["y1"];
					$y2=$_REQUEST["y2"];

					$date1=$y1."-".$m1."-".$d1;
					$date2=$y2."-".$m2."-".$d2;
					
					
							$result=mysqli_query($con,"SELECT
	 date,
    item_code,
    count(item_code) AS 'item_code_frequency'
FROM
    order_table
    where date BETWEEN '".$date1."' and '".$date2."'

GROUP BY
    item_code
ORDER BY
    item_code_frequency DESC");
							while($arr=mysqli_fetch_assoc($result)):
								?>
							<tr>
							<th><?php echo "$arr[date]"; ?></th>
							<th><?php $ic=$arr["item_code"];
							$result1=mysqli_query($con,"select * from items where item_code='".$ic."';");
							$arr1=mysqli_fetch_assoc($result1);
							$sum=$sum+($arr1["price"]*$arr["item_code_frequency"]);
							echo "$arr1[item_name]";    ?></th>
							
							<th><?php echo "$arr[item_code_frequency]"; ?></th>
							</tr>
						<?php endwhile;	}?>
					
						
						
						
						
					
					
				</table>

				</div>
				</div>
				<center>TOTAL : <?php echo "$sum"; ?></center>
				</center>
			</div>
			
</form>				
			</div>
		</div>
		
		
	
		<div class="blank">
			
		</div>


</div>
			
</body>
