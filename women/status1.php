<?php
session_start();
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	
	$complain_no=$_POST['complain_no'];
	$_SESSION['complain_no']=$complain_no;
	
	
	$conn = mysqli_connect("localhost", "root", "", "db1");
	if($conn){
		$sql="select * from complain where complain_no = '$complain_no'";
		$result = mysqli_query($conn,$sql);
		if($result){
			if($row=mysqli_fetch_array($result)){
				header('Location: http://localhost/women/statuscheck.php');
			}else{
				header('location: http://localhost/women/statuswrong.html');
			}
		
		}else {
				echo mysqli_error($conn);
				
		}
	}
}

?>