<?php
include '../dbconnection.php';

if(isset($_POST['feed']) )			
{

		if($connect && mysql_select_db($mysql_db) or die($connect_error))
		{
				$fdd=$_POST['feed'];
				$id=$_POST['id'];
			
				
						if(!empty($fdd))
						{	
			                $query="INSERT INTO feed(id,Feed) VALUES('$id','$fdd')";
							$query_run=mysql_query($query);
											if(!$query_run) {echo'Sorry! entry failed.';}
									else {echo'Registered successfully'; echo'<script type="text/javascript">window.location.href="../admin_page.php";</script>'; 
										header('location:admin_page.php');}
						}else{echo 'sorry: this field may be empty.'; //echo'<script type="text/javascript">window.location.href="../admin_page.php";</script>';
					}
		}
}
else{echo'try to insert right data please!';}
?>