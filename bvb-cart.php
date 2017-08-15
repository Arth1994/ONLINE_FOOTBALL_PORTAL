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
 <title>
  Your Cart
 </title>
<style>
table td,th{
	text-align:center;
	border: 1px solid black;
	font:16px arial,sans serif;
}
p{
	text-align:center;;
	font:16px arial,sans serif;
}
</style>
</head>
<?php include "user-header.php"?>
<body>
<div class="left">
 </div>
 <div class="right">
 </div><?php 
 if(isset($_POST['pro_id'])){
	
if(!mysql_connect("localhost","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("dbtest"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
$pro1=$_POST['pro_id1'];
$pro2=$_POST['pro_id'];

 $res= mysql_query("select * from playercart");
 $userRow=mysql_fetch_array($res);
}?>
<br>
<table cellpadding=20 align="center">
<tr>
<th>Cart Number</th>
<th>Product Id</th>
<th>Cost</th>
</tr>
<tr>
<td><?php echo  $userRow['cartno'];?></td>
<td><?php echo  $userRow['productid'];?></td>
<td><?php echo  $userRow['ccost'];?></td>
</tr>
</table>
<p><A HREF="Bvb.php">CONTINUE SHOPPING</A></p>
<form action="Bvb.php" style="text-align:center">
<input type="submit" value="Confirm Order"/>
</form>
</body>
</html>