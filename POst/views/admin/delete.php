<?php
$con=mysqli_connect('localhost','root',"");
mysqli_select_db($con, 'post_data');
$id=$_GET['id'];
$query="DELETE FROM feed WHERE date_ins='$id'";
mysqli_query($con, $query);
header("location:../admin_page.php");
?>