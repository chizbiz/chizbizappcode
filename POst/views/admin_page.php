<?php
require'login.php';
if(login())
{
echo'<p>login successful.</p>';
$ins_id=$_SESSION['user_id'];
//echo'<a href="logout.php"><button id="logout">Logout</button></a><style type="text/css">#login{display:none;}</style>>';
}
else
{
header('location:index.php');
}

include'dbconnection.php';
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, 'post_data');
			if($connect && mysql_select_db($mysql_db) or die($connect_error))
			{
			$query1="SELECT *FROM feed WHERE id='$ins_id' ORDER BY date_ins DESC";
			$res1=mysqli_query($con,$query1);
			}
			


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>

<link href="../../POst/contents/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../POst/scripts/css/style.css">
<script src="../../POst/contents/js/bootstrap.min.js"></script>

<script src="../../POst/contents/js/jQuery.js"></script>
<script src="../../POst/scripts/js/my.js"></script>


</head>
	<body onload="hide_panel();">

<div class="row">
<div style="display:inline-block; background-color:green; width:100%; position:fixed; z-index:6; height:63px; margin-top:-3%;"> 
					<!-- <div style="margin-left:20%;position:absolute; margin-top:1.5%;" class="btn btn-success">&nbsp Store &nbsp</div> -->
					<div style="margin-left:50%;position:absolute; margin-top:1.5%;" class="btn btn-success">&nbsp User Profile &nbsp &nbsp</div>
					<div style="margin-left:60%;position:absolute; margin-top:1.5%;" class="btn btn-success">Information:</div>
								<form class="navbar-form navbar-left" role="search" style="margin-left:4%; margin-top:1.5%;">
                                            <div class="form-group">
                                                    <input type="text" class="form-control" name="search_field" id="search_input" onkeyup="search_db();" placeholder="Search">
                                           </div>
                                                    <button type="submit" class="btn btn-default">Search</button>
                                                    <!-- <div id="suggest_text" onclick="rep_text()"></div> -->

                                          </form>
					<a href="logout.php">

						<input type="button" class="btn-primary" value="logout" style="float:right; margin-top:1.5%; margin-right:3%;">
					</a>
					
</div>
<div class="col-sm-1"></div>
<div class="col-sm-10">
	<div class="row">

		<!-- <h1 align="center">wel-come in your page <i>Bishwas</i>:</h1> -->
		<HR>
			<div class="col-sm-3">
				<div style="display:inline-block; margin-left:-25%; background-color:#000000; width:130%; height:250px;">
					<img src="../scripts/images/karela.jpg" style="margin-top:1px;height:248px;width:99.5%;margin-left:1px; margin-right:3px;">
				</div>
				<div class="btn btn-success" style="margin-top:3px; margin-left:15%;" onclick="show_panel();">Buy karela now!</div>

				<!--  -->
								<div style="display:inline-block;margin-top:5%; margin-left:-25%; background-color:#000000; width:130%; height:250px;">
					<img src="../scripts/images/banda.jpg" style="margin-top:1px;height:248px;width:99.5%;margin-left:1px; margin-right:3px;">
				</div>
				<div class="btn btn-success" style="margin-top:3px; margin-left:15%;" onclick="show_panel();">Buy banda now!</div>

				<!--  -->

				<!--  -->
								<div style="display:inline-block;margin-top:5%; margin-left:-25%; background-color:#000000; width:130%; height:250px;">
					<img src="../scripts/images/tomato.jpg" style="margin-top:1px;height:248px;width:99.5%;margin-left:1px; margin-right:3px;">
				</div>
				<div class="btn btn-success" style="margin-top:3px; margin-left:15%;" onclick="show_panel();">Buy tomato now!</div>

				<!--  -->


			</div>

			<div class="col-sm-9">
				<!-- <div style="color:red;position:absolute;margin-top:-2%;margin-left:20%;" id="mydiv"><i>response:</i></div> -->
							<form method="post" action="admin/insert.php" style="margin-top:-30%;">
							<input type="hidden" value="<?php echo $ins_id ?>" name="id">
							<textarea rows="4" cols="55" class="input-lg" name="feed" id="feed" style="left:8%;position:absolute;margin-top:30%;" placeholder="Post your view here:"></textarea>
								<!-- <input type="file" name="image" style="position:absolute;margin-top:43%; margin-left:29%;"> -->
							<input type="submit" value="&nbsp Post your view &nbsp" class="btn btn-primary" style=" position:absolute;margin-top:42%;left:76%; margin-top:35%;">
							</form>



							<!-- start new program -->
								
		
			
		<div class="well"  style="position:absolute;margin-top:46%;margin-left:5%;width:100%;">
			<h4 style="margin-left:3%;">My posts:</h4>
	<?php 
	$var=0;
			while($data=mysqli_fetch_array($res1))
			{
	?>

	

			<div class="well" style="width:94%;">
					
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
							<!-- end of the new project -->
			</div>

			<!-- <div class="col-sm-4"></div> -->
			
	</div>





	
<!-- show hide admin pannel like eneter your username and password  -->
<!-- *************************************************************-->
<div class="row">
	<div class="col-sm-12">
					<div class="modal1" id="my_modal11" aria-hidden="true" style="background-color:lightgreen;z-index:20;margin-top:-66%;width:40%;position:fixed;">
								<div class="modal-header1">
									<h3>&nbsp &nbsp &nbsp Detail for home delivery:</h3>
								</div>
								<hr>
										<div class="modal-body1">
											<form action="delivery.php" method="POST" style="margin-left:7%;">
													<span style="font-size:24px;">Country:</span> <br><Select class="input-lg" name="country">
														<option>&nbsp -Select-&nbsp</option>
														<option selected="selected">Nepal</option>
														<option>India</option>
														<option>China</option>
													</Select>
												&nbsp &nbsp &nbsp
												<input type="text" class="input-lg" name="city" placeholder="Enter your city:" />

													<br><br>
												<input type="text" class="input-lg" name="state" style="width:40%;" placeholder="Enter your state:" />

													&nbsp &nbsp &nbsp
												<input type="text" style="width:39%;" name="zip_code" class="input-lg" placeholder="Enter your Zip-code:" />
													<br><br>
												<input type="text" style="width:83%;" name="local" class="input-lg" placeholder=" Your full local station for delivery:" />
													<br><br>
													<span style="font-size:24px;">&nbsp &nbsp &nbsp &nbsp Delivery date:</span>&nbsp
												<input type="date" name="dele" style="width:41%" class="input-lg" placeholder="Enter your city:" />
													<br><br>
												<input type="submit" style="margin-left:15%;" class="btn btn-primary" value="&nbsp Order now! &nbsp" />	
											&nbsp &nbsp &nbsp &nbsp<input type="reset" Value="Clear"class="btn">
											
											</form>
										</div>
										
										<hr>
										<div class="modal-footer1" style="background-color:lightblue;">    
												<button style="float:right; margin-right:10%; margin-bottom:3%;" class="btn btn-warning" data-dismiss="modal1" araia-hidden="true" onclick="hide_panel()">Close</button>
										</div>
					</div>
	</div>
</div>

<!-- *******************************************************************-->
<!-- end of the admin pannel username and password  -->

	


</div>
<div class="col-sm-1"></div>
		

</div>


	


	


	


	</body>

</html>