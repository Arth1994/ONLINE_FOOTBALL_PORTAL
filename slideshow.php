<html>
<head>
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style.css">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
<title>
Homepage
</title>
</head>
<body>
<div id="header">
    <?php include 'header.php'; ?>
	</div>
<div class="main">
<div class="slider">
<script language="JavaScript">
var i = 0;
var path = new Array();
 
// LIST OF IMAGES
path[0] = "images/si.jpg";
path[1] = "images/logo.jpeg";
path[2] = "images/tuchel.jpg";


function swapImage()
{
   document.slide.src = path[i];
   if(i < path.length - 1) i++; else i = 0;
   
   setTimeout("swapImage()",3000);
}
window.onload=swapImage;
</script>
<img  name="slide" src="image_1.gif" width="100%" height="100%" />
</div>
<!--<?php include 'footer.php'; ?>-->
</body>
</html>