<html lang="en">
<head>
  <title>Admin page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">

table{
background-color:#FCF;
}

th{
width: 150px;
text-align: left;
}

</style>
  </head>
<body>
<a href="adminpage1.php"><img src="helpline.jpg" style="width:210px;height:100px;"></a>
<img src="my gov logo.png" style="width:300px;height:100px;">
<img src="swatch.jpg" align="right" style="width:250px;height:100px;" >
<img src="satyamev.jpg"width="80"height="100" align="right">

<nav class="navbar navbar-inverse "> 
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav">
	  
        <li><a href="adminpage1.php">HOME</a></li>
        <li class="active"><a href="admincomplain.php">RECIEVED FORM</a></li>
		<li><a href="adminstatusupdate.html">UPDATE INFO</a></li>
		 </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="front.html"><span class="glyphicon glyphicon-log-in"></span>LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$s = "SELECT complain_no, status, field22, field23, comment FROM complain ";
$r =  "SELECT field9, field10, field11, field12, field13, field14, field15, field16, field17 FROM victim ";
$q = "SELECT field18, field19, field20, field21 FROM against ";
$sql = "SELECT field1, field2, field3, field4, field5, field6, field7, field8 FROM complainant ";
$result = mysqli_query($conn, $s);
$result1 = mysqli_query($conn,$r);
$result2 = mysqli_query($conn,$q);
$result3 = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0 && mysqli_num_rows($result1) > 0 && mysqli_num_rows($result2) > 0 && mysqli_num_rows($result3) > 0) {
    // output data of each row
		echo"<table>";
echo "<tr><th>complain no.</th><th>status</th><th>Department</th><th>Complaint</th><th>comment</th></tr>";
	
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>";
echo $row['complain_no'];
echo "</td><td>";
echo $row['status'];
echo "</td><td>";
echo $row['field22'];
echo "</td><td>";
echo $row['field23'];
echo "</td><td>";
echo $row['comment'];
echo "</td></tr>";
    }
	echo "</table>";
	

/*****************************/

echo"<table>";
echo "<tr><th>Full name</th><th>Email</th><th>Mobile no.</th><th>Address</th><th>city</th><th>State</th><th>Pincode</th><th>Age</th><th>Gender</th></tr>";
	
    while($row = mysqli_fetch_assoc($result1)) {
        echo "<tr><td>";
echo $row['field9'];
echo "</td><td>";
echo $row['field10'];
echo "</td><td>";
echo $row['field11'];
echo "</td><td>";
echo $row['field12'];
echo "</td><td>";
echo $row['field13'];
echo "</td><td>";
echo $row['field14'];
echo "</td><td>";
echo $row['field15'];
echo "</td><td>";
echo $row['field16'];
echo "</td><td>";
echo $row['field17'];
echo "</td></tr>";
    }
	echo "</table>";
	
	/*******************************/
	
	echo"<table>";
echo "<tr><th>Name</th><th>Address</th><th>Mobile no.</th><th>Gender</th></tr>";
	
    while($row = mysqli_fetch_assoc($result2)) {
        echo "<tr><td>";
echo $row['field18'];
echo "</td><td>";
echo $row['field19'];
echo "</td><td>";
echo $row['field20'];
echo "</td><td>";
echo $row['field21'];
echo "</td></tr>";
    }
	echo "</table>";
	
	/**********************/
	echo"<table >";
echo "<tr><th>Full name</th><th>Email</th><th>Mobile no.</th><th>Address</th><th>City</th><th>State</th><th>Pincode</th><th>Gender</th></tr>";
	
    while($row = mysqli_fetch_assoc($result3)) {
        echo "<tr><td>";		
echo $row['field1'];
echo "</td><td>";
echo $row['field2'];
echo "</td><td>";
echo $row['field3'];
echo "</td><td>";
echo $row['field4'];
echo "</td><td>";
echo $row['field5'];
echo "</td><td>";
echo $row['field6'];
echo "</td><td>";
echo $row['field7'];
echo "</td><td>";
echo $row['field8'];
echo "</td></tr>";
    }
	echo "</table>";	

}

 else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>