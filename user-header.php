<html lang=''>
<head>
 <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="nav">
     <ul>
	   <li><a href="user-News.php">News</a></li>
	   <li><a href="user-Matches and Fixtures.php">Matches and Fixtures</a></li>
       <li><a href="user-fans.php">Fans</a></li>
       <li><a href="user-club.php">Clubs</a></li>
	   <li><a href="profile.php">User-profile</a></li>
       <li> <p style="font:16px arial,sans serif;color:#fff;">Hi <?php echo $userRow['forename']; $currentuser=$userRow['forename'];?>&nbsp;<?php echo  $userRow['surname'];?>&nbsp;</p></li>
         <li><form method="post" name="search" action="user-search.php"><input type="character" id="searchform" name="term" placeholder="search" action="user-header
		 .php?head" /> <input type="submit" name="submit" value="Search" /></form></li>
         <li><a href="logout.php?logout">Sign Out</a></li>
       </ul>
</div>

</body>
</html>


