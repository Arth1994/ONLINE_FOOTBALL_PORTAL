<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: Bvb.php");
}
include_once 'dbconnect.php';
if(isset($_POST['btn-signup']))
{
 $forename = mysql_real_escape_string($_POST['forename']);
 $surname = mysql_real_escape_string($_POST['surname']);
  $date = mysql_real_escape_string($_POST['date']);
    $number = mysql_real_escape_string($_POST['number']);
    $email = mysql_real_escape_string($_POST['email']);
 $password = md5(mysql_real_escape_string($_POST['password']));
 
 if(mysql_query("INSERT INTO users(forename,surname,date,number,email,password) VALUES('$forename','$surname','$date','$number','$email','$password')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Signup</title>
<style>
input[type="text"],input[type="password"],input[type="date"],input[type="number"],input[type="email"]{
	border-radius:5px;
	font:18px arial,sans serif;
	text-align:center;
	margin-left:39%;
	}
.b{
	width:250px;
	border-radius:5px;
	font:18px arial,sans serif;
	background-color:yellow;
	color:black;
	margin-left:39%;
}
p{
	font:18px arial,sans serif;
	color:yellow;
	text-align:center;
}
body{
	background-image:url("images/si.jpg");
	background-size:contain;
}
</style>   
</head>
<body>
<?php include "header.php" ?>    
<br/><br/>
<div id="center"  >
<b style="color:yellow;font:34px arial,sans serif;margin-left:39%;">BE A FAN!!!</b>
<br/>
<div >
<form method="post">
<input type="text" name="forename" placeholder="User Name" required /><br/><br/>
<input type="text" name="surname" placeholder="User Name" required /><br/><br/>
<input type="date" name="date" placeholder="User Name" required /><br/><br/>    
<input type="number" name="number" placeholder="Your Number" required /><br/><br/>
<input type="email" name="email" placeholder="email" required /><br/><br/>
<input type="password" name="password" placeholder="Your Password" required /><br/><br/>
<button type="submit" name="btn-signup" class="b">Sign Me Up</button><br><br>
</div>
</body>
<?php include "footer.php" ?>
</html>