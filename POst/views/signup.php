<?php
include 'dbconnection.php';

//if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['pass'])isset($_POST['conpass']))			
//{

		if($connect && mysql_select_db($mysql_db) or die($connect_error))
		{
				$fnm=$_POST['fname'];
				$lnm=$_POST['lname'];
				$eml=$_POST['email'];
				$phn=$_POST['phone'];
				$pass=$_POST['pass'];
				$conpass=$_POST['conpass'];
			
				
						//if(!empty($fnm)&&!empty($lnm)&&!empty($eml)&&!empty($phn)&&!empty($pass)&&!empty($conpass))
						//{	
			                $query="INSERT INTO signup(first,last,email,phone,gender,password,conpassword) VALUES('$fnm','$lnm','$eml','$phn','$pass','$conpass')";
							$query_run=mysql_query($query);
							
											if(!$query_run) {echo'Sorry! entry failed.';}
									else {echo'Registered successfully'; echo'<script type="text/javascript">window.location.href="admin_page.php";</script>'; 
										//header('location:admin_page.php');
								}
						//}else{echo 'sorry: this field may be empty.'; //echo'<script type="text/javascript">window.location.href="../admin_page.php";</script>';
					//}
		}
//}
//else{echo'try to insert right data please!';}
?>