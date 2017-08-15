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
<meta  content="text/html; charset=utf-8" />
<title>News</title>
<style>
.section {
	clear: both;
	padding: 20px;
	margin: 0px;
}

.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}

    .col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}

.col:first-child { margin-left: 0; }
       body { padding:2em; font : 100%/1.4 'Helvetica Neue', arial, helvetica, helve, sans-serif;
           
 }

.col { background:black; padding:1em 0; text-align:center;}
    
img{
float:left;
}    

.span_3_of_3 {
	width: 100%; 
}

.span_2_of_3 {
	width: 66.13%; 
}

.span_1_of_3 {
	width: 32.26%; 
	height:400px;
}

@media only screen and (max-width: 480px) {
	.span_3_of_3 {
		width: 100%; 
	}
	.span_2_of_3 {
		width: 100%; 
	}
	.span_1_of_3 {
		width: 100%;
	}
}   

 body, div, span, object,
 section{
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}

body {
    line-height: 1;
    background-color:#f4f41f;
}
img{
padding:10px;
}
b{
color:yellow;
}
p{
color:white;
font:16px arial,sans serif;
font-size:12px;    
}
.img{
margin-left:80px;
}
.info{
padding:10px;
float:right;

}
table{
color:white;
font-size:12px;
}
</style>
</head>
<body>
	<!-- Header -->
	<div id="header">
    <?php include 'user-header.php'; ?>
	</div>
	<!-- End Header -->
<div class="section group">
					<div class="col span_1_of_3">
                    <div class="img">
                    <img src="images/news1.jpg"/>
                    </div>    
                    <div class="info">
                     <b>Tuchel to give team defensive solutions</b>
                    <p>Can a team which earned a point away to Schalke in Gelsenkirchen and secured a victory in Leverkusen still consider themselves to be the biggest underdogs in Bundesliga history? "Of course they can," said Thomas Tuchel in the run-up to the clash with SV Darmstadt 98. But nobody is underestimating the surprise package from Hesse, with the coach saying before the match: "We know how difficult and how complicated it's going to be."</p>    
                    </div>                      
                     </div>
					<div class="col span_1_of_3">
				 <div class="img">
                    <img src="images/news4.jpg"/>
                    </div>    
                    <div class="info">
                     <b>Team disappointed at failure to extend winning run</b>
                    <p>Though still unbeaten this season after drawing their twelfth competitive game of 2015/16 1-1 away to TSG Hoffenheim last night, BVB were unable to extend their winning run under Thomas Tuchel to 12 games in Sinsheim, carving out only a few chances in the first half despite their dominance and not being clinical enough in front of goal in the second.
                    </p>    
                    </div>
					</div>
					<div class="col span_1_of_3">
					 <div class="img">
                    <img src="images/news5.jpg"/>
                    </div>    
                    <div class="info">
                     <b>"It was a different story after the break"</b>
                    <p>The BVB players were not overly satisfied with the team's performance in Sinsheim, especially in the first 45 minutes: "Our performance in the first period wasn't good enough," said Marcel Schmelzer. In the second half they felt their performance improved significantly, however: "It's annoying that we didn't perform like we did in the second half from the very start," concluded Julian Weigl. Here are the match reactions.
                    </p>    
                    </div>
					</div>
				</div>
    
<div class="section group">
<div class="col span_1_of_3">
					 <div class="img">
                    <img src="images/news3.jpg"/>
                    </div>    
                    <div class="info">
                     <b>Hartmann to officiate BVB match against Darmstadt</b>
                    <p>Robert Hartmann, a 36 year old graduate of Business Economics from Wangen in Allgäu, will officiate a Bundesliga match involving Borussia Dortmund for the first time on Sunday.
                    </p>    
                    </div>
					</div>
    <div class="col span_1_of_3">
				 <div class="img">
                    <img src="images/news2.jpg"/>
                    </div>    
                    <div class="info">
                     <b>BVB on winning run at home reminiscent of the Hitzfeld era</b>
                    <p>Seven home league wins in a row! The last time the Black and Yellows achieved that feat was under the leadership of Ottmar Hitzfeld almost 20 years ago. Across all competitions, BVB have now won their last eleven matches at home - and will be aiming for no. 12 on Sunday when they take on Darmstadt 98, who have yet to lose on the road this season. Here are the match facts.
                    </p>    
                    </div>
					</div>
<div class="col span_1_of_3" style="color:yellow;">
				   <table cellspacing="10" cellpadding="10">
                    <thead>UPCOMING FIXTURES</thead>   
                    <tr>
                    <td>1</td>    
                    <td>
                    Sat., 26.09.2015 11:00
                    </td>
                    <td>
                    BVB U17 - FC Schalke 04
                    </td>    
                    </tr>
                     <tr>
                     <td>2</td>     
                    <td>
                    Sat., 26.09.2015 13:00
                    </td>
                    <td>
                    Arminia Bielefeld - BVB U14
                    </td>    
                    </tr>
                     <tr>
                     <td>3</td>     
                    <td>
                    Sat., 26.09.2015 11:00
                    </td>
                    <td>
                    BVB U17 - FC Schalke 04
                    </td>    
                    </tr>
                     <tr>
                     <td>4</td>     
                    <td>
                    Sat., 26.09.2015 11:00
                    </td>
                    <td>
                    BVB U17 - FC Schalke 04
                    </td>    
                    </tr>   
                    </table>    
                    </div>
					
</div>
<div class="section group">
					<div class="col span_1_of_3">
                    <div class="img">
                    <img src="images/europa.jpg"/>
                    </div>    
                    <div class="info">
                     <b>BVB reacts to incidents away to PAOK Saloniki</b>
                    <p>Following the incidents that took place during the UEFA Europa League match away to PAOK Saloniki, Borussia Dortmund has withdrawn away season tickets for national and international matches from members of Desperados Dortmund 1999 with immediate effect.

According to current information, the members of the ultra group were largely responsible for the burning and throwing of pyrotechnics as well as the resulting confrontations.

Should the ongoing investigations reveal that people from other ultra or fan groups were involved in the incident, BVB will take equally decisive action against them.</p>    
                    </div>                      
                     </div>
					<div class="col span_1_of_3">
				 <div class="img">
                    <img src="images/news7.jpg"/>
                    </div>    
                    <div class="info">
                     <b>"Bayern's third goal determined the outcome of the match"</b>
                    <p>Mats, what's your take on the match?
We can definitely take positives from the first half. In the first 45 minutes we put in a good performance, I think it's fair to say that. We only gave away a few chances, but unfortunately Bayern converted the two we gave them. They were clinical today, you could see that from their third goal. That was a killer for us. Up until that point the match had been very balanced, played at a high level. It was worthy of a big match! The goal that came directly after the restart destabilised us somewhat. Then Bayern's fourth goal came from a situation when we were not attacking high up at any point, but each defender was always five metres away from his man. Bayern are obviously a great team, who really take advantage of such weaknesses.
                    </p>    
                    </div>
					</div>
					<div class="col span_1_of_3">
					 <div class="img">
                    <img src="images/news8.jpg"/>
                    </div>    
                    <div class="info">
                     <b>"We lost by too many goals"</b>
                    <p>"The other results did help us out a bit"
You set up the goal for Aubameyang…
We played the ball out from the back very well. "Miki" turned brilliantly in the middle of the park and then saw that I was free on the right. I saw that "Auba" was running in and played the pass to him. Ultimately, though, it doesn't matter who scores the goal or who sets it up. We wanted to get another after that. But unfortunately we didn't manage it.

Wolfsburg, Schalke and Leverkusen all dropped points on matchday 8 too. Is that a small consolation?
The other results did help us out a bit. But now we need to recover well over the international break. We hope that all our internationals come back injury-free. Then we have to face Mainz on the Friday. That will be just as tough."
                    </p>    
                    </div>
					</div>
				</div>   

	<!-- Footer -->
    <?php include 'footer.php'; ?>
	<!-- End Footer -->
</body>
</html>