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
   <?php
      $firstname = strip_tags($_POST["firstname"]);
    $lastname = strip_tags($_POST['lastname']);
    $email = strip_tags($_POST['email']);
    $address1 = strip_tags($_POST["address1"]);
    $address2 = strip_tags($_POST["address2"]);
    $City = strip_tags($_POST["City"]);
    $State = strip_tags($_POST["State"]);
    $Zip = strip_tags($_POST["Zip"]);
    $phone = strip_tags($_POST["phone"]);
    $payment = strip_tags($_POST["payment"]);
    $date = strip_tags($_POST["date"]);
    $moabquantity = (int)$_POST["moabquantity"];
    $poolquantity = (int)$_POST["poolquantity"];
    $baseballquantity = (int)$_POST["baseballquantity"];
    $itemprice = strip_tags($_POST["itemprice"]);
    $totalamount = strip_tags($_POST["totalamount"]);
      $numberitems = $moabquantity + $poolquantity + $baseballquantity;
    $shipfirstname = strip_tags($_POST["shipfirstname"]);
    $shiplastname = strip_tags($_POST['shiplastname']);
    $shipemail = strip_tags($_POST['shipemail']);
    $shipaddress1 = strip_tags($_POST["shipaddress1"]);
    $shipaddress2 = strip_tags($_POST["shipaddress2"]);
    $shipCity = strip_tags($_POST["shipCity"]);
    $shipState = strip_tags($_POST["shipState"]);
    $shipZip = strip_tags($_POST["shipZip"]);
    $shipphone = strip_tags($_POST["shipphone"]);
      
   ?>
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
   <div id="maindiv">



      <br>

      <p></p>
      <div class="shopcart" id="shophead">
         <div style="font-size:19px; text-align:left;display:inline-block; "> 
            
            <?php print $firstname; print ", you have "; print $numberitems;?> item(s) in your order
         </div>
<br>
<br>
      <div class="item">Order Review</div>
      <div class="" id="price">Price</div>
      <div class="" id="quantity">Quantity</div>
      </div>
      <div>

      </div>
      <br>
<br>
<br>
<hr>
      <form action="confirmation.php" id="payment-form" method="post">
<?php if ($moabquantity != 0){
print "         <div class=\"item\">";
print "            <img src=\"images/rafting.png\" width=\"125\"/>";
print "         </div>";
print "         <div class=\"itemdesc\" style=\"height:130px;margin-left:170px;\">";
print "            <p class=\"itemName\">Trip to Moab to go river rafting</p>";
print "            <p class=\"itemPrice\">$10.95</p>";
print "            <input class=\"qtyinput\" size=\"5\" name=\"moabquantity\" value=\""; print $moabquantity;
print "\" onInput=\"checkNum(this.value,'invalidNum1')\"/>";
print "            <div class=\"qtytooltip\">";
print "               <span class=\"qtytooltiptext\" id=\"invalidNum0\">Please contact us directly if you require more than 99</span>";
print "            </div>";
print "            <hr>";
print "            <!--<p>Rafting Description</p>-->";
print "         </div>";
//print "         <br>";
//print "         <hr>";
}
if ($poolquantity != 0){
print "         <hr>";
print "         <div class=\"item\" >";
print "            <img src=\"images/swimming.jpg\" width=\"125\"/>";
print "         </div>";
print "         <div class=\"itemdesc\" style=\"height:100px;margin-left:170px;\">";
print "            <p class=\"itemName\">Swimming in the pool</p>";
print "            <p class=\"itemPrice\">$11.95</p>";
print "            <input class=\"qtyinput\" size=\"5\" name=\"poolquantity\" value=\"";print $poolquantity; 
print "\" onInput=\"checkNum(this.value,'invalidNum1')\"/>";
print "            <div class=\"qtytooltip\">";
print "            <span class=\"qtytooltiptext\" id=\"invalidNum1\">Please contact us directly if you require more than 99</span>";
print "            </div>";
print "";
print "            <hr>";
print "            <!--<p>Swimming Description</p>-->";
print "         </div>";
//print "         <br>";
//print "         <hr>";
}
if ($baseballquantity != 0){
print "         <hr>";
print "         <div class=\"item\">";
print "            <img src=\"images/rough_riders_gallery.png\" width=\"125\"/>";
print "         </div>";
print "         <div class=\"itemdesc\" style=\"height:100px;margin-left:170px;\">";
print "            <p class=\"itemName\">Baseball Game</p>";
print "            <p class=\"itemPrice\" name=\"itemprice\">$1.22</p>";
print "            <input class=\"qtyinput\" size=\"5\" name=\"baseballquantity\" value=\"";print $baseballquantity; 
print"\" onInput=\"checkNum(this.value,'invalidNum2')\"/>";
print "            <div class=\"qtytooltip\">";
print "               <span class=\"qtytooltiptext\" id=\"invalidNum2\">Please contact us directly if you require more than 99</span>";
print "            </div>";


print "            <hr>";
print "            <!--<p>Baseball Game description</p>-->";
print "         </div>";
//print "         <br>";
//print "         <hr>";
//print "         <br>";
}
?>
         <div class="total" id="shopfoot">

            <div class="" id="subtotal">Subtotal</div>
            <div class="" id="totalamount1"><input id="totalamount" name="totalamount" size="8" value="<?php print $totalamount; ?>" readonly/> </div>
         </div>
      <br>
      <br>

<?php
print "<p> Thank you $firstname $lastname. Please confirm the shipping and billing information below and confirm your order.</p>
<br> ";
?>
<div id="billing-info" style="line-height:.2; display:inline-block;min-width:40%;">
<br>
<?php
print "<p><b>Billing Information</b></p>
<p>$firstname $lastname </p>
<p>$address1</p>
<p>$address2</p>
<p>$City, $State $Zip</p>
<p>$phone</p>
<br>
<div style=\"display:inline-block;max-width:40%;\">
<p>Payment method</p>
<p>$payment</p>
</div>
<div style=\"display:inline-block;max-width:40%;\"><p> Exp. Date</p>
<p>$date</p>
</div>
";
?>
</div>
<div id="shipping-info" style="line-height:.2; display:inline-block;min-width:40%;">

<?php
print "<br> ";
print "<p><b>Shipping Information</b></p>
<p>$shipfirstname $shiplastname </p>
<p>$address1</p>
<p>$address2</p>
<p>$City, $State $Zip</p>
<p>$phone</p>
<br>
<div style=\"display:inline-block;max-width:40%;\">
<p></p>
<p></p>
</div>
<div style=\"display:inline-block;max-width:40%;\"><p><br></p>
<p><br></p>
</div>

";
?>

</div>
<br>
<form action="confirmation.php">
<input type = "submit" name = "verify" id = "action" value = "Confirm">
<input type = "submit" name = "verify" id = "action" value = "Cancel">
</form>
<br>
<br>

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
