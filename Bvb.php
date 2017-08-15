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
  FanShop
 </title>
 <style>
  body{
       background-color:black;
	}
  .left{
        background-color:black;
		float:left;
		width:13%;
		height:1000px;
		margin:0px;
    }
  .right{
         background-color:black;
		 float:right;
		 width:13%;
		 height:1000px;  
    }
  .a{
     float:left;
	 margin-left:35px;
	 margin-top:10px;
    }
  .b{
     float:right;
	 margin-right:35px;
	 margin-top:10px;
	}
   .d{
      float:left;
	  margin-left:15px;
	  margin-top:10px;
    }
  .center{
          background-color:white;
          height:1000px;		  
        }
   a,p{
      color:black;
	  font:16px arial,sans serif;
	  text-decoration:none;
	  text-align:center;
	}
   .z{
          background-color:black;
		  color:yellow;
	      font:16px arial,sans serif;
	      text-align:center;
		  margin-left:45px;
          border-radius:5px;		  
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

 $query="insert 
 into playercart
 (forename,ccost,productid) values
 ( '$currentuser', '$pro1', '$pro2')";
 mysql_query($query);
  }?>
 <div class="center">
  <div class="a">
   <img src="images/sbp.jpg" style="width:400px;">
   <a href="">
   <p>BVB Home & Away Jerseys</p>
   </a>
  </div>
  <div class="b">
   <img src="images/Away.jpg" style="width:400px;">
   <a href="">
   <p>BVB Training Kits</p>
   </a>
  </div>
  <div class="d">
   <hr/>
   <img src="images/ball.jpg" style="width:180px;">
   <a href="">
   <p>BVB Retro Football<br/>
   <b>$26</b>
   </p>
   <form action="bvb-cart.php" method="post" >
   <input type= "hidden" name="pro_id" value="BVB Retro Football">
   <input type= "hidden" name="pro_id1" value="26">
   
   <input class="z" type="submit" value="Add to Cart">
   
   </form>
   </a>
  </div>
  <div class="d">
   <hr/>
   <img src="images/ball(1).jpg" style="width:180px;">
   <a href="">
   <p>BVB Carbon Football<br/>
   <b>$27</b>
   </p>
   </a>
    <form action="bvb-cart.php"method="post" >
   <input type= "hidden" name="pro_id" value="BVB Carbon Football">
   <input type= "hidden" name="pro_id1" value="27">
   
   <input class="z" type="submit" value="Add to Cart">
   
   </form>
  </div>  
  <div class="d">
   <hr/>
   <img src="images/bag.jpg" style="width:180px;">
   <a href="">
   <p>BVB Shoulder Bag<br/>
   <b>$30</b>
   </p>
   </a>
    <form action="bvb-cart.php"method="post" >
   <input type= "hidden" name="pro_id" value="BVB Shoulder Bag">
   <input type= "hidden" name="pro_id1" value="30">
   
   <input class="z" type="submit" value="Add to Cart">
   
   </form>
  </div> 
  <div class="d">
   <hr/>
   <img src="images/sz1.jpg" style="width:180px;">
   <a href="">
   <p>BVB Size 1 ball<br/>
   <b>$35</b>
   </p>
   </a>
    <form action="bvb-cart.php"method="post" >
   <input type= "hidden" name="pro_id" value="BVB Size 1 Ball">
   <input type= "hidden" name="pro_id1" value="35">
   
   <input class="z" type="submit" value="Add to Cart">
   
   </form>
  </div>
  <div class="d">
   <hr/>
   <img src="images/bottle.jpg" style="width:180px;">
   <a href="">
   <p>BVB Water Bottle<br/>
   <b>$30</b>
   </p>
   </a>
    <form action="bvb-cart.php"method="post" >
   <input type= "hidden" name="pro_id" value="BVB Water Bottle">
   <input type= "hidden" name="pro_id1" value="30">
   
   <input class="z" type="submit" value="Add to Cart">
   
   </form>
  </div>
  <div class="d">
   <hr/>
   <img src="images/cap.jpg" style="width:180px;">
   <a href="">
   <p>BVB Cap<br/>
   <b>$10</b>
   </p>
   </a>
    <form action="bvb-cart.php"method="post" >
   <input type= "hidden" name="pro_id" value="BVB Cap">
   <input type= "hidden" name="pro_id1" value="10">
   
   <input class="z" type="submit" value="Add to Cart">
   
   </form>
  </div>
  <div class="d">
   <hr/>
   <img src="images/wallet.jpg" style="width:180px;">
   <a href="">
   <p>BVB Wallet<br/>
   <b>$30</b>
   </p>
   </a>
    <form action="bvb-cart.php"method="post" >
   <input type= "hidden" name="pro_id" value="BVB Wallet">
   <input type= "hidden" name="pro_id1" value="30">
   
   <input class="z" type="submit" value="Add to Cart">
   
   </form>
  </div>
  <div class="d">
   <hr/>
   <img src="images/wb.jpg" style="width:180px;">
   <a href="">
   <p>BVB Wrist Bands<br/>
   <b>$15</b>
   </p>
   </a>
    <form action="bvb-cart.php"method="post">
   <input type= "hidden" name="pro_id" value="BVB Wrist Bands">
   <input type= "hidden" name="pro_id1" value="15">
   <input class="z" type="submit" value="Add to Cart">
   </form>
  </div>
  </div>
 </body>
</html>