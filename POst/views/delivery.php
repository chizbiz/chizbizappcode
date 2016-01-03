<?php
include 'dbconnection.php';
if($connect && mysql_select_db($mysql_db) or die($connect_error))
		{
				$fnm=$_POST['country'];
				$lnm=$_POST['city'];
				$eml=$_POST['state'];
				$phn=$_POST['zip_code'];
				$pass=$_POST['local'];
				$conpass=$_POST['dele'];
			
				
						//if(!empty($fnm)&&!empty($lnm)&&!empty($eml)&&!empty($phn)&&!empty($pass)&&!empty($conpass))
						//{	
			                $query="INSERT INTO delivery(country,city,state,zip_code,local,delevery) VALUES('$fnm','$lnm','$eml','$phn','$pass','$conpass')";
							$query_run=mysql_query($query);
							
											if(!$query_run) {echo'Sorry! entry failed.';}
									else {echo'Registered successfully'; echo'<script type="text/javascript">window.location.href="index.php";</script>'; 
										//header('location:admin_page.php');
								}
						//}else{echo 'sorry: this field may be empty.'; //echo'<script type="text/javascript">window.location.href="../admin_page.php";</script>';
					//}
		}
?>