<?php
session_start();
?>
<html></html>

<?php  
$s=intval($_GET['unm'];
$r=$_SESSION['complain_no'];

$conn = mysqli_connect("localhost", "root", "", "db1");
	if($conn){
		$sql="UPDATE `complain`  SET `status`= '$s' WHERE complain_no='$r'";
		$result = mysqli_query($conn,$sql);


?>