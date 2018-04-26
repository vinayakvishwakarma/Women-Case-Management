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
  <script src="update.js"></script>
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
        <li><a href="admincomplain.php">RECIEVED FORM</a></li>
		<li class="active"><a href="adminstatusupdate.html">UPDATE INFO</a></li>
		 </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="front.html"><span class="glyphicon glyphicon-log-in"></span>LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<h1>hello</h1>
<?php

$r=$_SESSION['complain_no'];

// Create connection
$conn = mysqli_connect("localhost", "root", "", "db1");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT status, comment FROM complain WHERE complain_no='$r'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)) {
echo "status:";
echo "<span id='unm_sp'>";
echo  $row["status"];
echo "</span>";
echo "<input type='text' id='unm_txt' class='hide'/>";
echo "<img src='edit.png' id='unm_edit' class='show' title='edit'/>";
echo "<img src='save.png' id='unm_save' class='hide' title='save'/>";
echo "<img src='cancel.png' id='unm_cancel' class='hide' title='cancel'/>";
echo "comment:" . $row["comment"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

</body>
</html>