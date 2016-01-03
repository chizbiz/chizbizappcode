<?php
//require'../../journey1/admin.php';
//require 'dbconnection.php';
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, 'post_data');
//if($connect && mysql_select_db($mysql_db) or die($connect_error))
//{

//}
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
<body onload="hide();hide_signup();">


<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
	<div class="row">
			<!-- <h1 align="center">wel-come in your home</h1> -->
			<div style="display:inline-block;z-index:7; background-color:green; width:100%; height:100px; margin-top:1%;"> 
			</div>

					<div style="z-index:10;">
					<a href="index.php"><div style="margin-left:20%;position:absolute; margin-top:-6%;" class="btn btn-success">&nbsp Store &nbsp</div></a>
					<a href="feed.php"><div style="margin-left:40%;position:absolute; margin-top:-6%;" class="btn btn-success">&nbsp Feed &nbsp &nbsp</div></a>
					<div style="margin-left:60%;position:absolute; margin-top:-6%;" class="btn btn-success">Information:</div>
					</div>


				<div style="position:absolute; margin-left:83%; margin-top:-6%;">
					<div class="btn btn-info" onclick="show_form();">Login</div>&nbsp
					<div class="btn btn-info" onclick="show_signup();">Signup</div>
				</div>

<!-- star of form of user login -->
<form class="well-lg" style="margin-top:4%;background-color:lightgreen; margin-left:70%; position:absolute;z-index:5; " method="POST" action="login.php" id="show-hide">
			<fieldset> 
			<legend>Login form:</legend>
					User name:<br>
					<input type="text" name="adname" class="input-sm" placeholder="USER NAME:">
					<br><br>
					Enter password:<br>
					<input type="password" name="pass" class="input-sm" placeholder="ENTER PASSWORD:">
					<br><br>
					<input type="submit" value="login" class="btn btn-info">
			</fieldset>
			</form>

<!-- end of the user login -->


<!-- start of the user signup -->

			<form class="well-lg" style="position:absolute;margin-top:4%; background-color:lightgreen; margin-left:70%;z-index:5;" method="POST" action="signup.php" id="signup_form">
			<fieldset> 
			<legend><h4>Signup now!</h4><h6>It is free and always will be:</h6></legend>
					
					<input type="text" name="fname" class="input-lg" placeholder="FIRST NAME:">
					<br><br>
				
					<input type="text" name="lname" class="input-lg" placeholder="LAST NAME:">
					<br><br>
			
					<input type="email" name="email" class="input-lg" placeholder="YOUR EMAIL ID:">
					<br><br>
			
					<input type="text" name="phone" class="input-lg" maxlength="10" placeholder="YOUR PHONE NO:">
					<br><br>

					DOB<br/>
     <select class="dob" name="dob">
<option>Day</option>
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
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>
<select class="dob">
<option>Month</option>
<option>Jan</option>
<option>Feb</option>
<option>Mar</option>
<option>Apr</option>
<option>May</option>
<option>Jun</option>
<option>Jul</option>
<option>Aug</option>
<option>Sep</option>
<option>Oct</option>
<option>Nov</option>
<option>Dec</option>
</select>
<select class="dob">
<option>Year</option>
<option>1915</option>
<option>1916</option>
<option>1917</option>
<option>1918</option>
<option>1919</option>
<option>1920</option>
<option>1921</option>
<option>1922</option>
<option>1923</option>
<option>1924</option>
<option>1925</option>
<option>1926</option>
<option>1927</option>
<option>1928</option>
<option>1929</option>
<option>1930</option>
<option>1931</option>
<option>1932</option>
<option>1933</option>
<option>1934</option>
<option>1935</option>
<option>1936</option>
<option>1937</option>
<option>1938</option>
<option>1939</option>
<option>1940</option>
<option>1941</option>
<option>1942</option>
<option>1943</option>
<option>1944</option>
<option>1945</option>
<option>1946</option>
<option>1947</option>
<option>1948</option>
<option>1949</option>
<option>1950</option>
<option>1951</option>
<option>1952</option>
<option>1953</option>
<option>1954</option>
<option>1955</option>
<option>1956</option>
<option>1957</option>
<option>1958</option>
<option>1959</option>
<option>1960</option>
<option>1961</option>
<option>1962</option>
<option>1963</option>
<option>1964</option>
<option>1965</option>
<option>1966</option>
<option>1967</option>
<option>1968</option>
<option>1969</option>
<option>1970</option>
<option>1971</option>
<option>1972</option>
<option>1973</option>
<option>1974</option>
<option>1975</option>
<option>1976</option>
<option>1977</option>
<option>1978</option>
<option>1979</option>
<option>1980</option>
<option>1981</option>
<option>1982</option>
<option>1983</option>
<option>1984</option>
<option>1985</option>
<option>1986</option>
<option>1987</option>
<option>1988</option>
<option>1989</option>
<option>1990</option>
<option>1991</option>
<option>1992</option>
<option>1993</option>
<option>1994</option>
<option>1995</option>
<option>1996</option>
<option>1997</option>
<option>1998</option>
<option>1999</option>
</select>
<br>
<input type="radio"/>Female <input type="radio"/>Male<br/><br/>
					<!-- DOB:<br> -->
					<!-- <input type="date" name="date" class="input-lg" placeholder="YOUR DOB"> -->
					
					<input type="password" name="pass" class="input-lg" placeholder="YOUR PASSWORD:">
					<br><br>
					<input type="password" name="conpass" class="input-lg" placeholder="CONFIRM PASSWORD:">
					<br><br>
					<input type="submit" value="login" class="btn btn-info">
			</fieldset>
			</form>
<!-- end of the user signup -->


			<div class="well" style="margin-top:0%;width:100%; margin-right:1%; margin-left:0%;">
				<div style="display:inline-block; width:20%; margin-top:-1.5%; height:600px;margin-left:-1%; background-color:lightgreen;"><center style="margin-top:50%;">index</center></div>

			<div style="display:inline-block; position:absolute; width:19.5%; margin-top:610px; height:600px;margin-left:-19.5%; background-color:lightgreen;"><center style="margin-top:50%;">index</center></div>
				

				<form class="navbar-form navbar-left" role="search" style="position:absolute;margin-left:70%;top:10%;">
                                            <div class="form-group">
                                                    <input type="text" class="form-control" name="search_field" id="search_input" onkeyup="search_db();" placeholder="Search">
                                           </div>
                                                    <button type="submit" class="btn btn-default">Search</button>
                                                    <!-- <div id="suggest_text" onclick="rep_text()"></div> -->

                           </form>
                         <div style="position:absolute;top:10.5%;margin-left:3%; width:48%; height:30px; display:inline-block; " class="well">
                         	<div style="margin-top:-3.5%;position:absolute; height:6px; margin-left:10%; width:20%;"><a  style="position:absolute;margin-top:6%;">About us</a></div>
                         	<div style="position:absolute; left:35%; top:0%; width:20%;"><a style="position:absolute;margin-top:6%;">Our store</a></div>
                         	<div style="position:absolute; left:60%; top:0%; width:25%;"><a style="position:absolute;margin-top:6%;">Secure payment</a></div>
                         </div>
                         <div style="display:inline-block; margin-top:-5%; margin-left:2%; width:75%; height:500px; position:absolute;">
                         	<img src="../scripts/images/chizbiz.jpg" style="margin-top:16%;margin-left:1%; width:98%; height:330px; border-style:outset; border-color:lightgreen; border-width:5px;">
                         </div>  
                         <div class="well" style="margin-top:-13%; margin-left:22%; width:76%; height:60px; background-color:lightgreen;"></div>



                         <div class="well" style="margin-top:0%; margin-left:22%; width:76%; height:332px;">
                         <h5 style="position:absolute;margin-top:-1%; margin-left:1%; "><b>New products:</b></h5>
                         	<div style="margin-left:1%; height:252px; margin-top:1%; display:inline-block; background-color:#000000; width:30%;">
                         		<img src="../scripts/images/karela.jpg" style=" width:20.8%; margin-left:1px; margin-top:1px; height:250px; position:absolute; ">

                         	</div>
                         	<div style="margin-left:3.5%; height:252px; margin-top:1%; display:inline-block; background-color:#000000; width:30%;">
                         		<img src="../scripts/images/banda.jpg" style=" width:20.8%; margin-left:1px; margin-top:1px; height:250px; position:absolute; ">
                         	</div>
                         	<div style="margin-left:3.5%; height:252px; margin-top:1%; display:inline-block; background-color:#000000; width:30%;">
                         		<img src="../scripts/images/tomato.jpg" style=" width:20.8%; margin-left:1px; margin-top:1px; height:250px; position:absolute; ">
                         	</div>
                         	<!--  -->
                         	<div class="btn btn-success" style="margin-left:7%;" onclick="alert_msg();">Karela:Rs. 50 /kg.</div>
                         	<div class="btn btn-success" style="margin-left:14%;" onclick="alert_msg();">Banda:Rs. 40 /kg.</div>
                         	<div class="btn btn-success" style="margin-left:19%;" onclick="alert_msg();">Tomato:Rs. 35 /kg.</div>
                         	<!--  -->
                         </div>



                         <div class="well" style="margin-top:0%; margin-left:22%; width:76%; height:385px;">
                         	 <h5 style="position:absolute;margin-top:-1%; margin-left:1%; "><b>Featured products:</b></h5>
                         	<div style="margin-left:1%; height:252px; margin-top:1%; display:inline-block; background-color:#000000; width:30%;">
                         		<img src="../scripts/images/lauka.jpg" style=" width:20.8%; margin-left:1px; margin-top:1px; height:250px; position:absolute; ">
                         	</div>
                         	<div style="margin-left:3.5%; height:252px; margin-top:1%; display:inline-block; background-color:#000000; width:30%;">
                         		<img src="../scripts/images/pudina.jpg" style=" width:20.8%; margin-left:1px; margin-top:1px; height:250px; position:absolute; ">
                         	</div>
                         	<div style="margin-left:3.5%; height:252px; margin-top:1%; display:inline-block; background-color:#000000; width:30%;">
                         		<img src="../scripts/images/pyaj.jpg" style=" width:20.8%; margin-left:1px; margin-top:1px; height:250px; position:absolute; ">
                         	</div>

                         		<!--  -->
                         	<div class="btn btn-success" style="margin-left:7%;" onclick="alert_msg();">Lauka:Rs. 25 /kg.</div>
                         	<div class="btn btn-success" style="margin-left:15%;" onclick="alert_msg();">Pudina:Rs. 29 /kg.</div>
                         	<div class="btn btn-success" style="margin-left:20%;" onclick="alert_msg();">Pyaj:Rs. 76 /kg.</div>

                         	<div class="btn-info btn"style="margin-top:3%; margin-left:50%;">&nbsp More..&nbsp</div>
                         	<!--  -->
                         	
                         </div>
			</div>
	</div>
	</div>
	<div class="col-sm-1"></div>
</div>
					

					



		</body>
	</html>