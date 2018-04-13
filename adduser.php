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
	.header2{
		height: 150px;
		background-image: url("CXurry/photo.jpg");
		width: 100%;
		color:black;
	}
	
	.backgr{
		width: 100%;
		background:linear-gradient(white,rgb(2, 187, 254));
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
					<br><br>
					<br><b><u><center>MESS SPECIALS</center></u></b>

				</div>
			</div>


			<div>
				
				<form action="insertuser.php" method="post">
				<center>
					USER_ID:<center><input type="text" name="user_id"><br><br></center>
					USERNAME:<center><input type="text" name="username"><br><br></center>
					PASSWORD:<center><input type="password" name="password"><br><br></center>
					ACCOUNT:<center><input type="text" name="acc_balance"><br><br></center>
					
					<input type="submit">
</center>
					</form>

				</center>
			</div>
</body>
</html>