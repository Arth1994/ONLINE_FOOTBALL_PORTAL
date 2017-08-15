<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: sigin.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
p{

	font:16px arial,sans-serif;
	text-align:center;
}
</style>
</head
   <?php include 'user-header.php'; ?>
    <h1>Your Details are</h1>
	<p>Forename:<?php echo $userRow['forename']; ?></p> <br/><br/>
	<p>surname:<?php echo $userRow['surname']; ?></p> <br/><br/>
	<p>DOB:<?php echo $userRow['date']; ?></p> <br/><br/>
	<p>Contact No:<?php echo $userRow['number']; ?></p><br/><br/>
	<p>Email:<?php echo $userRow['email']; ?></p><br/><br/>
  <?php include 'footer.php'; ?> 
 </body>
</html>