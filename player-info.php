<?php 

include_once 'dbconnect.php';

$res=mysql_query("SELECT * FROM players WHERE id=".$_GET["id"]);
$userRow=mysql_fetch_array($res);
?>
<html>
<head>
<title>Player-Info</title>
<style>
body{
background-color:#fff;
}
table, th, td {
    margin-left:25%;
    font:16px arial,sans serif;
    border: 1px solid black;
}
</style>
</head>
<body>
<?php include "header.php"?>
<h2><b>Player Info</b></h2>  
<hr>  
<table  cellpadding="20">
  <tr>
    <th>Name</th>
    <th>Country</th>
    <th>Jersey</th>
    <th>Position</th>
    <th>Age</th>  
  </tr>
  <tr>
    <td><?php echo $userRow['name']; ?></td>
    <td><?php echo $userRow['country']; ?></td>
    <td><?php echo $userRow['jersey']; ?></td> 
    <td><?php echo $userRow['position']; ?></td>
    <td><?php echo $userRow['age']; ?></td>  
  </tr>
</table><br>
</body>
</html>