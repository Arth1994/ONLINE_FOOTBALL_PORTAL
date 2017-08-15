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
<html>
<head>
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
<title>
News
</title>
<style>
p{
	color:black;
	 display: block;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
	padding:0px 72px 0px 0px;
}

#Wallpapers{
	  font-size:22px;
    font-weight:700;
    text-transform:none;
	text-decoration:none;
	color:#00004c;
}
strong{
font-size:20px;
font-weight:bold;
}
body{
	background-image:url("images/si.jpg");
	background-size:cover;
}
a{
	color:yellow;
	text-decoration:none;
	margin-top:8px;
}
</style>
</head>
<?php include 'user-header.php'; ?>
<body>

<div  style="float:left;width:5%;height:1200px;"></div>
<div  style="float:right;width:5%;height:1200px;"></div>
<div>
<div style="margin-left:75px;height:225px;">
<br>
<span style="top:50px;font:40px arial,sans serif;margin-left:40px;color:white;" ><b>FANS</b></span>
<p style="margin-left:40px;color:yellow;font:16px arial,sans serif;">
Dortmund Football Club is nothing without its fans and this section is
 dedicated to our loyal supporters across the globe.<br>
It has been a pride to be in Dortmund with our fans supporting greatly.<br>
This is where you can connect with the Club and your fellow fans via
 social media,<br/> download exclusive wallpapers and have your say in
 the latest Dortmund poll.<br/>
And if you want to get closer to the Club, scroll down to find the<br/>
 supporters' group that suits you best.<br/>
</p>
</div>
</div>
<div >
<div style="background-color:black;float:left;width:600px;margin-left:50px;height:190px;padding-top:20px;">
<a href="Wallpapers.php" style="color:#fff;margin-left:30px;font:24px arial,sans serif;">WALLPAPERS OF BORUSSIA DORTMUND</a>
<p style="color:yellow;margin-left:30px;font:16px arial,sans serif;">Check out our range of fantastic wallpapers,
 with one released after every club victory and more.Brought to you by BT Sport.
Read more at DortmundFC.com</p>
<a href="Wallpapers.php"><li style="float:left;line-height:normal;color:yellow;margin-left:30px;font:16px arial,sans serif;">
Download Wallpapers</li>
</a>
</div>
<div style="float:right;margin-right:50px;">
<img src="images/bvb.jpg" style="width:350px;height:210px;" />
</div>
</div>
<div>
<div style="float:left;margin-left:50px;margin-top:20px;">
<img src="images/reus1.jpg" style="width:350px;height:210px;" />
</div>
<div style="float:right;background-color:black;margin-right:50px;margin-top:20px;padding-top:20px;width:600px;height:201px;">
<a href="Player.php" style="color:white;margin-left:30px;font:24px arial,sans serif;">VITALITY PLAYER OF THE MONTH</a><br>
<p style="font:16px arial,sans serif;color:yellow;margin-left:30px;">
 Cast your vote for the Vitality Player of the Month
 and be in with a chance of presenting the award 
 to the winner before a home game at Signal Iduna Stadium.</p>
</div>
</div>
<div>
<div style="background-color:black;float:left;width:600px;margin-left:50px;height:190px;margin-top:20px;padding-top:20px;">
<a href="Wallpapers.php" id="Wallpapers" style="color:#fff;margin-left:30px;font:24px arial,sans serif;">GET YOUR OWN FAN GEAR</a>
<ul style="font:16px arial,sans serif;">
 <li><a href="signin.php">Dortmund Scarves</a></li>
 <li><a href="signin.php">T7 Anthem Jacket</a></li>
 <li><a href="signin.php">Dortmund Polo T-Shirts</a></li>
 <li><a href="signin.php">Dortmund Souveiners</a></li>
 <li><a href="signin.php">Homewares</a></li>
 <li><a href="signin.php">Equipment</a></li>
</ul>
</div>
<div style="float:right;margin-right:50px;margin-top:20px; yellow;">
<img src="images/Kit.jpg" style="width:350px;height:210px;" />
</div>
</div>
<div >
<div style="float:left;width:300px;margin-left:30px;margin-top:20px;">
<img src="images/BVBD.jpg" style="width:350px;height:210px;" />
</div>
<div style="float:right;background-color:black;margin-top:20px;margin-right:50px;width:600px;padding-top:20px;height:190px;">
<a href="Player.php" id="Wallpapers" style="color:white;margin-left:30px;font:24px arial,sans serif;">FAN & FACILITATION CENTER</a><br>
<p style="font-size:16px;color:yellow;margin-left:30px;font:16px arial,sans serif;">
Borussia Dortmund’s fan and facilitation department was created in 2004 within BV.
 Dortmund to support the club in all matters as well as develop and implement fresh ideas  
 with all work being done in an honorary capacity.
 The department represents all members, fans and fan clubs inside and outside the club.<br/></p>
</div>
</div>
</body>
</html>