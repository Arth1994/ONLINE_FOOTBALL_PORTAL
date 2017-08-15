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
    <meta charset="UTF-8">
    <title>Matches and Fixtures</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
body {
    color: #555;
  background-image:url("images/si.jpg");
  background-size:cover;
}

h1 {
  font-weight: 400;
}

p {
  margin: 0 0 20px;
  line-height: 1.5;
}

main {

 padding:0;  
  margin: 30px;
  background: #fff;
}
.y{
	width:200px;
}
section {
  display: none;
  padding: 20px 0 0;
  border-top: 1px solid black;
}


label {
  display: inline-block;
  margin: 0 0 -1px;
  padding: 15px 25px;
  font-weight: 600;
  text-align: center;
  color: black;
  border: 1px solid transparent;
}

label:before {
  font-family: fontawesome;
  font-weight: normal;
  margin-right: 10px;
}


label:hover {
  color: #888;
  cursor: pointer;
}

input:checked + label {
  color: #555;
  border: 1px solid #ddd;
  border-top: 2px solid yellow;
  border-bottom: 1px solid #fff;
}

#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
#tab4:checked ~ #content4 {
  display: block;
}
table {
    width:100%;
}
table, th, td {
    border: 0px;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align:center;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
a{
	text-decoration:none;
	color:black;
}
table#t01 th	{
    background-color: black;
    color: white;
}
.tab3{
	display:none;
}
.x{
	width:60px;
}
.z{
	text-align:center;
	color:yellow;
	background-color:black;
}

</style>
<script src="js/script.js"></script>
</head>
<?php include 'user-header.php'; ?>
<body>
<h2 class="underline" style="color:yellow;">Matches and Fixtures</h2>
<main>
  
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">Table</label>
    
  <input id="tab2" type="radio" name="tabs">
  <label for="tab2">Fixtures</label>
    
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">Previous Results</label>

    
  <section id="content1">
    
<table id="t01">
  <tr>
    <th class="x">Position</th>
    <th>Team</th>		
    <th>P</th>
	<th>W</th>
	<th>D</th>
	<th>L</th>
	<th>GD</th>
	<th>Points</th>
  </tr>
  
  <tr>
    <td class="x">1</td> 
    <td>FC Bayern Munchen</td>
	<td>5</td>
	<td>5</td>
	<td>0</td>
	<td>0</td>
	<td>6</td>
	<td>15</td>
  </tr>
  <tr>
    <td class="x">2</td> 
	<td>Borussia Dortmund</td>
	<td>5</td>
	<td>5</td>
	<td>0</td>
	<td>0</td>
	<td>3</td>
	<td>15</td>
  </tr>
  <tr>  
    <td class="x">3</td>
    <td>Dresden FC</td>
	<td>5</td>
	<td>4</td>
	<td>1</td>
	<td>0</td>
	<td>7</td>
	<td>13</td>
  </tr>
	<td class="x">4</td>
    <td>Wolfsburg FC</td>
	<td>5</td>
	<td>3</td>
	<td>1</td>
	<td>1</td>
	<td>3</td>
	<td>10</td>
  </tr>
  <tr>
    <td class="x">5</td>
    <td>VFB Stuggart</td>
	<td>5</td>
	<td>3</td>
	<td>0</td>
	<td>2</td>
	<td>1</td>
	<td>9</td>
  </tr>
  <tr>
    <td class="x">6</td>
    <td>Schalke 04</td>
	<td>5</td>
	<td>2</td>
	<td>1</td>
	<td>2</td>
	<td>-3</td>
	<td>5</td>
  </tr>
  <tr>
    <td class="x">7</td>
    <td>Werder Bremen</td>
	<td>5</td>
	<td>2</td>
	<td>0</td>
	<td>3</td>
	<td>1</td>
	<td>4</td>
  </tr>
  <tr>
    <td class="x">8</td>
    <td>Bayer Leverkuesen 04</td>
	<td>5</td>
	<td>2</td>
	<td>0</td>
	<td>3</td>
	<td>-1</td>
	<td>4</td>
  </tr>
  <tr>
    <td class="x">9</td>
    <td>Hertha Berlin</td>
	<td>5</td>
	<td>1</td>
	<td>1</td>
	<td>3</td>
	<td>3</td>
	<td>3</td>
  </tr>
  <tr>
    <td class="x">10</td>
    <td>Hannover FC</td>
	<td>5</td>
	<td>1</td>
	<td>0</td>
	<td>4</td>
	<td>-5</td>
	<td>3</td>
  </tr>
</table>
</section>
<section id="content2">
     <h2  class="z">September</h2>
	 <hr>
	 <table>
	 <tr >
	 <th colspan="4" align="center">Sat 12th September</th>
	 </tr>
	 <tr>
	 <td class="x">Away</td>
	 <td class="y"><b>Bayern Munchen</b></td>
	 <td>14:30</td>
	 <td width="260px;"><b>Borussia Dortmund FC</b></td>
	 </tr>
	 <tr >
	 <td colspan="4" align="center"><a href="#">Bet on Sky Football</a></td>
	 </tr>
	 </table>
	 <hr>
	 <table>
	 <tr >
	 <th colspan="4" align="center">Sat 19th September</th>
	 </tr>
	 <tr>
	 <td class="x">Home</td>
	 <td class="y"><b>Borussia Dortmund FC</b></td>
	 <td>14:30</td>
	 <td width="260px;"><b>Borussia Dortmund</b></td>
	 </tr>
	 <tr >
	 <td colspan="4" align="center"><a href="#">Bet on Sky Football</a></td>
	 </tr>
	 </table>
	 <hr>
	 <table>
	 <tr >
	 <th colspan="4" align="center">Sat 26th September</th>
	 </tr>
	 <tr>
	 <td class="x">Home</td>
	 <td class="y"><b>Borussia Dortmund FC</b></td>
	 <td>14:30</td>
	 <td width="260px;"><b>Hannover FC</b></td>
	 </tr>
	 <tr >
	 <td colspan="4" align="center"><a href="#">Bet on Sky Football</a></td>
	 </tr>
	 </table>
	 <hr>
	 <h2 class="z">October</h2>
	 <hr>
	 <table>
	 <tr >
	 <th colspan="4" align="center">Sun 3th October</th>
	 </tr>
	 <tr>
	 <td class="x">Home</td>
	 <td class="y"><b>Borussia Dortmund FC</b></td>
	 <td>14:30</td>
	 <td width="260px;"><b>Borussia Dortmund</b></td>
	 </tr>
	 <tr >
	 <td colspan="4" align="center"><a href="#">Bet on Sky Football</a></td>
	 </tr>
	 </table>
	  <hr>
	 <table>
	 <tr >
	 <th colspan="4" align="center">Sun 10th October</th>
	 </tr>
	 <tr>
	 <td class="x">Away</td>
	 <td class="y"><b>Schalke 04</b></td>
	 <td>16:30</td>
	 <td width="260px;"><b>Borussia Dortmund FC</b></td>
	 </tr>
	 <tr >
	 <td colspan="4" align="center"><a href="#">Bet on Sky Football</a></td>
	 </tr>
	 </table>
	  <hr>
	 <table>
	 <tr >
	 <th colspan="4" align="center">Sun 17th October</th>
	 </tr>
	 <tr>
	 <td class="x">Away</td>
	 <td class="y"><b>Mainz FC</b></td>
	 <td>14:30</td>
	 <td width="260px;"><b>Borussia Dortmund FC</b></td>
	 </tr>
	 <tr >
	 <td colspan="4" align="center"><a href="#">Bet on Sky Football</a></td>
	 </tr>
	 </table>
	 <hr>
	 <h2 class="z">November</h2>
	 <hr>
	 <table>
	 <tr >
	 <th colspan="4" align="center">Sun 3rd November</th>
	 </tr>
	 <tr>
	 <td class="x">Home</td>
	 <td class="y"><b>Borussia Dortmund FC</b></td>
	 <td>14:30</td>
	 <td width="260px;"><b>Borussia Dortmund</b></td>
	 </tr>
	 <tr >
	 <td colspan="4" align="center"><a href="#">Bet on Sky Football</a></td>
	 </tr>
	 </table>
	  <hr>
	 <table>
	 <tr >
	 <th colspan="4" align="center">Sun 10th October</th>
	 </tr>
	 <tr>
	 <td class="x">Away</td>
	 <td class="y"><b>Schalke 04</b></td>
	 <td>16:30</td>
	 <td width="260px;"><b>Borussia Dortmund FC</b></td>
	 </tr>
	 <tr >
	 <td colspan="4" align="center"><a href="#">Bet on Sky Football</a></td>
	 </tr>
	 </table>
	  <hr>
	 <table>
	 <tr >
	 <th colspan="4" align="center">Sun 17th October</th>
	 </tr>
	 <tr>
	 <td class="x">Away</td>
	 <td class="y"><b>Mainz FC</b></td>
	 <td>14:30</td>
	 <td width="260px;"><b>Borussia Dortmund FC</b></td>
	 </tr>
	 <tr >
	 <td colspan="4" align="center"><a href="#">Bet on Sky Football</a></td>
	 </tr>
	 </table> 
</section>
    
  <section id="content3">
  <h2  class="z">July</h2>
	 <hr>
	 <table>
	 <tr >
	 <th colspan="4" align="center">Sat 2th July</th>
	 </tr>
	 <tr>
	 <td class="x">Away</td>
	 <td class="y"><b>Hannover </b></td>
	 <td>3-0</td>
	 <td width="260px;"><b>Borussia Dortmund FC</b></td>
	 </tr>
	 <tr >
	 <td colspan="4" align="center"><a href="#">Bet on Sky Football</a></td>
	 </tr>
	 </table>
	 <hr>
	 <table>
	 <tr >
	 <th colspan="4" align="center">Sat 9th July</th>
	 </tr>
	 <tr>
	 <td class="x">Home</td>
	 <td class="y"><b>Borussia Dortmund FC</b></td>
	 <td>1-3</td>
	 <td width="260px;"><b>Hertha Berlin</b></td>
	 </tr>
	 <tr >
	 <td colspan="4" align="center"><a href="#">Bet on Sky Football</a></td>
	 </tr>
	 </table>
	 <hr>
	 <table>
	 <tr >
	 <th colspan="4" align="center">Sat 16th July</th>
	 </tr>
	 <tr>
	 <td class="x">Home</td>
	 <td class="y"><b>Borussia Dortmund FC</b></td>
	 <td>5-0</td>
	 <td width="260px;"><b>Bayer Leverkuesen</b></td>
	 </tr>
	 <tr >
	 <td colspan="4" align="center"><a href="#">Bet on Sky Football</a></td>
	 </tr>
	 </table>
	 <hr>
	 <h2 class="z">August</h2>
	 <hr>
	 <table>
	 <tr >
	 <th colspan="4" align="center">Sun 10th August</th>
	 </tr>
	 <tr>
	 <td class="x">Home</td>
	 <td class="y"><b>Borussia Dortmund FC</b></td>
	 <td>4-3</td>
	 <td width="260px;"><b>Werder Bremen</b></td>
	 </tr>
	 <tr >
	 <td colspan="4" align="center"><a href="#">Bet on Sky Football</a></td>
	 </tr>
	 </table>
	 <hr>
	 <table>
	 <tr >
	 <th colspan="4" align="center">Sun 17th August</th>
	 </tr>
	 <tr>
	 <td class="x">Home</td>
	 <td class="y"><b>Borussia Dortmund FC</b></td>
	 <td>4-2</td>
	 <td width="260px;"><b>Wolfsburg FC</b></td>
	 </tr>
	 <tr >
	 <td colspan="4" align="center"><a href="#">Bet on Sky Football</a></td>
	 </tr>
	 </table> 
  </section>

</main>
<?php include 'footer.php'; ?>
</body>
</html>
