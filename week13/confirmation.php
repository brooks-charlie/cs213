<!DOCTYPE html>
<html>
<head>
   <script type="text/javascript" src="213.07.Ponder.js"></script>
   <title>Brooks Corporation</title>
   <link rel="stylesheet" type="text/css" href="week07.css">
   <style> /*<!-- One internal style -->*/
   img{
      float: left;
   }
   </style>
</head>
<body onscroll="showSlogan()" onload="resetValues()">
<header>
   <div id="cornerlogo">
      <a href="home.html"><img src="images/brooks_corp_logo_white.gif"></a>
      <h2 class="hide" id="topbar">Where Good Things Happen</h2>
   </div>
   <div id="title"></div>
   <div id="corptext">
      <img class="logo" src="images/brooks_corp_logo.gif"/>
      <h2 id="logo">Where Good Things Happen </h2>

   </div>

   <nav>
      <ul>
         <a href="home.html"><li>Home</li></a><!-- One inline style -->
         <a href="team.html"><li>The Team</li></a>
         <a href="index.html"><li style="background: linear-gradient(navy, cornflowerblue);">Shopping</li></a>
         <!--<li>Where Good Things Happen</li>-->
      </ul>
   </nav>
</header>

<main>
<br>
<br>
<div>
<?php
$verify = $_POST["verify"];
if ($verify == "Cancel"){
print "<p>Your order has been cancelled. </p>";
}
else
{
print "<p>Your order has been confirmed.</p>";
}
?>
</div>

   <div id="footer">
      <hr>
      <ul>
         <li><a href="#">Contact Us</a></li>
         <li><a href="#">Legal</a></li>
         <li><a href="team.html">About Us</a></li>
         <li><a href="#">Site Map</a></li>
      </ul>

   </div>
   </div>

</main>

</body>

</html>

