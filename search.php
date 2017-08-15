<html>
<head><title>Search results</title></head>
<style>
body{
background-color:black;
height:100%;
}
table, th, td {
    margin-left:25%;
    font:16px arial,sans serif;
    border: 1px solid white;
    color:yellow;
}    
</style>    
<body>
<?php include "header.php" ?>
<h2 style="color:yellow;">Your Search Results:</h2>
<?php
include_once 'dbconnect.php';
mysql_select_db ("dbtest");

$term = $_POST['term'];

$sql = mysql_query("select * from players where name like '%".$term."%' or jersey like '%".$term."%' or country like '%".$term."%';");?>

        


<?php while ($row = mysql_fetch_array($sql)){ ?>
<table cellpadding="20">
<tr>
    <th>Name</th>
    <th>Country</th>
    <th>Jersey</th>
    <th>Position</th>
    <th>Age</th>  
  </tr>
<tr>    
 <td><?php  echo  $row['name'];?></td>
 <td><?php  echo  $row['country'];?></td>
 <td><?php  echo  $row['jersey'];?></td>
 <td><?php  echo  $row['position'];?></td>
 <td><?php  echo  $row['age'];?></td>
</tr>    
<?php } ?>
</table>
</body>
</html>