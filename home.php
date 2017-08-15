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
</style>    
</head>
<body>
    <?php include 'user-header.php'; ?>
    <p style="font:16px arial,sans serif;">Hi <?php echo $userRow['forename']; ?>&nbsp;<?php echo  $userRow['surname'];?>&nbsp;</p>
    <!--<a href="logout.php?logout">Sign Out</a>-->
    <?php include 'footer.php'; ?> 
</body>
</html>