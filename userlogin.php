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
	.header{
		height: 150px;
		
		background-image: url("CXurry/photo.jpg");
		width: 100%;
		font-size: x-large;
		color:black;
	}
	.home1{
		height: 500px;
		width: 50%;
		background-color: white;
		color: red;
		font-size: x-large;
		box-shadow: 10px 10px 10px #888888;
		float: left;

	}

	.scroller {
    overflow: scroll;
    padding: 5px;
    height: 100%;
  }
</style>

<div class="row">
	<div class="header"><br><br>
		<b><center>SPECIALS</center></b>
	</div>
	
</div>
<div class="row">
			
				<nav class="navbar navbar-default">
					<ul class="nav navbar-nav">
						<li><a href="userlogin.php" onclick="home()">Home</a></li>
						<li><a href="veg.php" onclick="veg()">VEG</a></li>
						<li><a href="nonveg.php" onclick="nonveg()">NON-VEG</a></li>
						<li><a href="history.php" onclick="history()">HISTORY</a></li>
						<li><a href="submitorder.php" onclick="submit()">SUBMIT ORDER</a></li>
						
					</ul>
				</nav>
</div>
<div class="row">
	<div class="col-sm-2">
		
	</div>


	<div class="col-sm-8">
	<div class="container" hidden="false" id="con1">
	
		<div class="home1">
			<b>TODAYS VEG SPECIAL</b><br>
			<a href=""><img src="CXurry\13.jpg" style="height:300px; width:300px;"><br>
			<caption>Paneer Punjabi (70/-)</caption><br><caption>Click to Order</caption></a>
		</div>
	
	
		<div class="home1">
			<b>TODAYS NON-VEG SPECIAL</b><br>
			<a href=""><img src="CXurry\1.jpg" style="height:300px; width:300px; "><br>
			<caption>Chicken Malai (70/-)</caption><br><caption>Click to Order</caption></a>
		</div>
	
	</div>
	</div>
	


</div>


</body>
</html>