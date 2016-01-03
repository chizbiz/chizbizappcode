<?php
//include'index.php';
session_start();
ob_start();
$current_file=$_SERVER['SCRIPT_NAME'];
$http_referer=$_SERVER['HTTP_REFERER'];
function login()
{
		if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
		{
		 return true;
		}
		else{return false;}

}


include'dbconnection.php';
//admin login
if(isset($_POST['adname']) && isset($_POST['pass']))
{
	
		if($connect && mysql_select_db($mysql_db) or die($connect_error))
		{
				$admin_name=$_POST['adname'];
				$pass=$_POST['pass'];
			
						if(!empty($admin_name) && !empty($pass))
						{
					
					 		$query="SELECT*FROM password WHERE u_name='$admin_name'AND pass='$pass'";
								if($query_run=mysql_query($query))
								{
									$query_num_rows=mysql_num_rows($query_run);
										if($query_num_rows==0){echo'<p>INVALID user</p>';  header('location:index.php'); }


										else
										{
											$user_id=mysql_result($query_run,0,'id');
											$_SESSION['user_id']=$user_id;
										
										header('location:admin_page.php');
											
										}
								}
								else
								{
								}
				
						}
						else
						{
							header('location:index.php');	
						}
		}
}


?>
<html lang="en">
<head>
	<title></title>

<link href="../../APP/contents/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../APP/scripts/css/style.css">
<script src="../../APP/contents/js/bootstrap.min.js"></script>

<script src="../../APP/contents/js/jQuery.js"></script>
<script src="../../APP/scripts/js/my.js"></script>

</head>
	<body>
		
	</body>

</html>



