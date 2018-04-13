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

	
	.backgr{
		width: 100%;
		background:linear-gradient(white,rgb(2, 187, 254));
		height: 75%;
	}

	
	.b4{
		height: 400px;
		width: 60%;
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
				<div class="header">
					<br>
					<br><b><u><center>MESS SPECIALS</center></u></b>			
				</div>	
		</div>

		<div class="row">
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-6">
				<div class="b4">
					<br>
					<center>
					
						<script type="text/javascript">
							function send1()
							{
							
								var user_id=document.getElementById('user_id').value;

								window.location="fp.php?user_id="+user_id+"";
							}
						</script>
					
												
						ENTER YOUR USER_ID:
						<input type="text" name="user_id" id="user_id"><br><br>
						<button class="btn btn-info btn-lg" onclick="send1()">SUBMIT <span class="glyphicon glyphicon-arrow-right" >
						</span></button>
					</center>
					
					
				</div>
			</div>
		</div>
			
</body>
