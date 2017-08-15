<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: Bvb.php");
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $pass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM users WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($pass))
 {
  $_SESSION['user'] = $row['user_id'];
     
$time = $_SERVER[‘REQUEST_TIME’];
/**
 * for a 30 minute timeout, specified in seconds
 */
$timeout_duration = 10;

/**
 * Here we look for the user’s LAST_ACTIVITY timestamp. If
 * it’s set and indicates our $timeout_duration has passed, 
 * blow away any previous $_SESSION data and start a new one.
 */
if (isset($_SESSION[‘LAST_ACTIVITY’]) && ($time - $_SESSION[‘LAST_ACTIVITY’]) > $timeout_duration) {
  session_unset();     
  session_destroy();
  session_start();    
}
    
/**
 * Finally, update LAST_ACTIVITY so that our timeout 
 * is based on it and not the user’s login time.
 */

$_SESSION[‘LAST_ACTIVITY’] = $time; 
  header("Location: Bvb.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}

?>
<html>
<head>
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>
Homepage
</title>
<style>
.signin-form{
background-image:url("images/si.jpg");
background-size:contain;    
height:70%;
}
.h{
align-self:center;
height:35px;
width:30%;
color:black;    
}
input[type="text"], input[type="password"]{
color: #000;	
border-radius:5px;
}
input[type="submit"]{
	font:14px arial,sans serif;
}
.b{
align-self:center;
background-color:#ccc;
height:30px;
width:15%;
color:#00004c;
display:inline-block;
margin-bottom:30px;
}
b{
align-self:center;
color:#fff;
font-size:25px;
}
a{
text-decoration:none;
color:yellow;
}
.left{
	width:10%;
	height:auto;
	float:left;
}
.right{
	width:10%;
	height:auto;
	float:right;
	background-color:yellow;
}
</style>
<script></script>
</head>
<body>
<?php include 'header.php'; ?>
<div class="signin-form">
<form  method="post">
<b>Email</b>
<br><br>
<input type="email" name="email" placeholder="username@gmail.com" class="h" required> 
<br><br>
<b>Password</b>
<br><br>
<input type="password" name="pass" placeholder="password" class="h" required>
<br><br>
<input type="submit" name="btn-login" value="submit" class="b">
<br>  
<strong><a href="signup.php">Not Yet Registered?</a></strong>    
</form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>