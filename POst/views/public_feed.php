<?php
include'dbconnection.php';
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, 'post_data');
			if($connect && mysql_select_db($mysql_db) or die($connect_error))
			{
			$query1="SELECT *FROM feed ORDER BY date_ins DESC";
			$res1=mysqli_query($con,$query1);
			}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>public feed:</title>

<link href="../../POst/contents/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../POst/scripts/css/style.css">
<script src="../../POst/contents/js/bootstrap.min.js"></script>

<script src="../../POst/contents/js/jQuery.js"></script>
<script src="../../POst/scripts/js/my.js"></script>


</head>
	<body>
		<h1 align="center">wel-come in your home</h1>
					<!-- <a href="logout.php"> -->

						<!-- <input type="button" class="btn-primary" value="logout" style="float:right;"> -->
					<!-- </a> -->
	
		<HR>	

		<br><br><br>
		<div style="color:red;position:absolute;top:16%;margin-left:10%; " id="mydiv"><i>response:</i></div>
			<form method="post" action="admin/insert.php">
				<input type="hidden" value="<?php echo $ins_id ?>" name="id">
				<textarea rows="6" cols="32" class="input-lg" name="feed" id="feed" style="left:5%;position:absolute;top:20%;" placeholder="Post your view here:"></textarea><br>
					<input type="file" name="image" style="position:relative;margin-top:9%; margin-left:7%;">
				<input type="submit" value="Post your view" class="btn btn-primary" style="position:absolute; top:47%; margin-left:22%;">
			</form>
		<div class="well"  style="margin-top:4%;margin-left:5%;width:30%;">
			<h4>History:</h4>
	<?php 
	$var=0;
			while($data=mysqli_fetch_array($res1))
			{
	?>

	

			<div class="well">
					
					<a style="color:blue;" href="#"><h5>  

					<?php
						$srh_id= $data['id'];
						if($connect && mysql_select_db($mysql_db) or die($connect_error))
								{
								$query2="SELECT u_name FROM password where id='$srh_id' LIMIT 1";
								$res2=mysqli_query($con,$query2);
									while($data1=mysqli_fetch_array($res2))
														{
															echo $data1['u_name'];
														}
								}
												
				


				        ?>

					</h5></a>
				<?php echo $data['Feed']; ?><br>
				<a style="color:gray;"><?php echo $data['date_ins'];?><br></a>
				<a href="#" style="text-decoration:none; color:blue; margin-left:5%;">Like</a>
					<a href="#" style="text-decoration:none; color:blue; margin-left:5%;">Comment</a>
					 <a href="admin/delete.php?id=<?php echo $data['date_ins'] ?>" style="margin-left:5%;color:blue;text-decoration:none;"> Delete</a>
				
					<br>
			</div>
			
	<?php 
			}
		?>

		</div>


	


	</body>

</html>