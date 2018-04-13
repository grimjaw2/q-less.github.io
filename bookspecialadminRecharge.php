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
		height: 400px;
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

			<div>
<form>
<script type="text/javascript">

	function show()
	{
		
		var user_id=document.getElementById('user_id').value;

		window.location="checkbalance.php?user_id="+user_id+"";
	}

	function addmoney()
	{
		
		var money=document.getElementById("money").value;
		var uid=document.getElementById("uid").value;
		var accbal=document.getElementById("accbal").value;
		
		alert("MONEY ADDED...");
		
		window.location="addmoney.php?money="+money+"&user_id="+uid+"&acc_balance="+accbal+"";
	}

	function clearaccount()
	{
		alert("ACCOUNT CLEARED...")
		var uid=document.getElementById("uid").value;
		window.location="clearaccount.php?user_id="+uid+"";
	}

	
</script>

				<center><b>USER_ID&nbsp;</b><input type="text" name="user_id" id="user_id">&nbsp;
				<input type="button" value="ENTER THE ID" onclick="show()">
                   </center>

        	<div class="container" id="d1">
        				<div class="b4" >
<?php 
			if(isset($_REQUEST['username']))
			{ 
				$username=$_REQUEST["username"];
				$user_id=$_REQUEST["user_id"];
				$acc_balance=$_REQUEST["acc_balance"];
				echo "<br><br>";
				echo "<h1><b><u>$username</u><b></h1> ";
				echo "<br><br>";
				echo "ACCOUNT BALANCE : ";
				echo "$acc_balance";
				echo "<br><br>";
				echo '&nbsp;
				<input type="text" name="money" id="money"><br><br>

				<input type="hidden" id="uid" value="';echo $user_id; echo '">
				<input type="hidden" id="accbal" value="';echo $acc_balance; echo '">

        		';


        	
}					

?>

					<input type="button" value="ADD MONEY" onclick="addmoney()">
					<input type="button" value="CLEAR ACCOUNT" onclick="clearaccount()">
        					
  </form>      					
        					

        				</div>
        	</div>

		
	
		<div class="blank">
			
		</div>


</div>
			
</body>
