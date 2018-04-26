<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Case management system</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body>
<a href="front.html"><img src="helpline.jpg" style="width:210px;height:100px;"></a>
<img src="my gov logo.png" style="width:300px;height:100px;">
<img src="swatch.jpg" align="right" style="width:250px;height:100px;" >
<img src="satyamev.jpg"width="80"height="100" align="right">
<nav class="navbar navbar-inverse"> 
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
	  
        <li><a href="front.html">HOME</a></li>
        <li class="active"><a href="complain.html">COMPLAINT FORM</a></li>
        <li><a href="status.html">COMPLAINT STATUS</a></li>
		      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">LEGAL RIGHTS<span class="caret"></span></a>
			  <ul class="dropdown-menu">
           <li><a href="women welfare.html">WOMEN WELFARE ACTS</a></li>
          <li><a href="women related.html">WOMEN-RELATED LEGISLATIONS</a></li>
         
        </ul>
      </li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span>ADMIN LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>
<h1>RECORD SAVED</h1>

</body>
</html>

<?php
echo "your complain no is: " . $_SESSION['complain_no'];
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
$field1=$_SESSION['field1'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT complain_no FROM complainant WHERE field1=$field1 ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)) {
		        echo "<br> complain no= ". $row["complain_no"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
	*/
?>