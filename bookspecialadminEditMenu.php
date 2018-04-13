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
<?php 
	if(isset($_REQUEST['error']))
{
  	$err=$_REQUEST["error"];
  	echo '<script language="javascript">';

		echo "alert('".$err."')";
		echo '</script>';


}


		
?>

	
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
		
					<div class="container">
					<div class="b4">
					<center>
					<div class="scroller">
						<table border="2"  cellpadding="35">

<form>
<script type="text/javascript">
	function edit(item_code)
	{
		
		var price=prompt("Enter the new price",item_code);
		if(price!=null)
		{
			window.location="changeprice.php?item_code="+item_code+"&price="+price+"";
		}
		else
		{
			alert("Invalid Entry");
		}
	}


	function del(item_code)
	{
		
		var i=confirm("Are you sure?");
		if(i==true)
		{
			window.location="deleteitem.php?item_code="+item_code+"";
		}
	}

</script>


								<tr><th align="center">ITEMS</th>
									<th align="center">PRICE</th>
									<th align="center">ACTION</th></tr>	
									<?php				
									include  "db2.php";
									$result=mysqli_query($con,"select * from items order by price DESC");
									while($arr=mysqli_fetch_assoc($result)):
									?>

						<tr><td align="center"><?php echo "$arr[item_name]"; ?></td>
							<td align="center"><?php echo "$arr[price]"; ?></td>
									
							<td align="center">
							
										
								
							<input type = "button" value = "Edit Menu" 
							onclick="edit('<?php echo "$arr[item_code]"; ?>')">&nbsp;&nbsp; 

							<input type = "button" value = "Delete" 
							onclick="del('<?php echo "$arr[item_code]"; ?>')">
							
							</td></tr>

							<?php  endwhile;  ?>
										
						
</form>									

							</table>
							
							</center>
							

				
			</div>
		</div>

				
		</div>
	
<form>		
<script type="text/javascript">
	function add()
	{
		document.getElementById("con1").hidden=false;
	}

	function additem()
	{
		var item_code=document.getElementById("item_code").value;
		var item_name=document.getElementById("item_name").value;
		var category=document.getElementById("category").value;
		var price=document.getElementById("price").value;


		window.location="additem.php?item_code="+item_code+"&item_name="+item_name+"&category="+category+"&price="+price+"";

	}

</script>	
		<div class="blank">
			<br/>
							<br/>	<center>
							<input type = "button" align = "center" value = " Add Item " onclick="add()" /></center>
							<div class="container" hidden="true" id="con1">
							<div class="b4">
								<center><br><br>
									ITEM_CODE:<input type="text" id="item_code"><br><br>
									ITEM_NAME:<input type="text" id="item_name"><br><br>
									CATEGORY:&nbsp;
									<select id="category">
									<option>VEG</option>
									<option>NONVEG</option>
									<option>BIRIYANI</option>
									<option>ROTI</option>
									</select>
									<br><br>
									ITEM_PRICE:<input type="text" id="price"><br><br>

										<input class="btn btn-info btn-lg" type="button" value="CLICK TO ADD" onclick="additem()">

								</center>
							</div>
							</div>
		</div>
</form>

</div>
			
</body>
