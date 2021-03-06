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
   <div id="maindiv">


      <br>

      <p></p>
      <div class="shopcart" id="shophead">
      <div class="item">Shopping Cart</div>
      <div class="" id="price">Price</div>
      <div class="" id="quantity">Quantity</div>
      </div>
      <div>

      </div>
      <br>
      <hr>
      <form action="cart.php" id="payment-form" method="post">

         <div class="item">
            <img src="images/rafting.png" width="275"/>
         </div>
         <div class="itemdesc">
            <p class="itemName">Trip to Moab to go river rafting</p>
            <p class="itemPrice">$10.95</p>
            <input class="qtyinput" size="5" name="moabquantity" value="0" onInput="checkNum(this.value,'invalidNum1')"/>
            <div class="qtytooltip">
               <span class="qtytooltiptext" id="invalidNum0">Please contact us directly if you require more than 99</span>
            </div>


            <hr>
            <p>Rafting Description</p>
         </div>
         <br>
         <hr>

         <div class="item">
            <img src="images/swimming.jpg" width="275"/>
         </div>
         <div class="itemdesc">
            <p class="itemName">Swimming in the pool</p>
            <p class="itemPrice">$11.95</p>
            <input class="qtyinput" size="5" name="poolquantity" value="0" onInput="checkNum(this.value,'invalidNum1')"/>
            <div class="qtytooltip">
            <span class="qtytooltiptext" id="invalidNum1">Please contact us directly if you require more than 99</span>
            </div>

            <hr>
            <p>Swimming Description</p>
         </div>
         <br>
         <hr>

         <div class="item">
            <img src="images/rough_riders_gallery.png" width="275"/>
         </div>
         <div class="itemdesc">
            <p class="itemName">Baseball Game</p>
            <p class="itemPrice" name="itemprice">$1.22</p>
            <input class="qtyinput" size="5" name="baseballquantity" value="0" onInput="checkNum(this.value,'invalidNum2')"/>
            <div class="qtytooltip">
               <span class="qtytooltiptext" id="invalidNum2">Please contact us directly if you require more than 99</span>
            </div>


            <hr>
            <p>Baseball Game description</p>
         </div>
         <br>
         <hr>


         <br>
         <hr>
         <div class="total" id="shopfoot">

            <div class="" id="subtotal">Subtotal</div>
            <div class="" id="totalamount1"><input id="totalamount" name="totalamount" size="8" value="$000.00" readonly/> </div>
         </div>
      <br>
      <hr>
   <h2>Billing information</h2>

<br>

      <fieldset>

            <ul class="tooltip">
               <li class="inline-left-label"><label for="firstname">First Name</label><span class="tooltiptext" id="invalidFirstName">First Name is required</span></li>
               <li class="inline-left">  <input type="text" name="firstname" id="firstname" size = "30" maxlength="80" value="<?php echo $firstname; ?>" onblur="checkData(this.value,'invalidFirstName')"></li>

               <li class="inline-right-label"><label for = "lastname">Last Name</label><span class="tooltiptext" id="invalidLastName">Last Name is required</span></li>
               <li class="inline-right"><input type = "text" name = "lastname" id = "lastname" size = "30" maxlength="80" value="<?php echo $lastname; ?>"  onblur="checkData(this.value,'invalidLastName')"></li>

               <li class="inline-left-label"><label for = "address1">Address</label><span class="tooltiptext" id="invalidAddress">a valid address is required</span></li>
               <li class="inline-left"><input type = "text" name = "address1" id = "address1" size = "70" value="<?php echo $address1; ?>"  onblur="checkData(this.value,'invalidAddress')"></li>

               <li class="inline-left-label"><label for = "address2">Address2 (Optional) Apartment, suite, floor, etc.</label></li>
               <li class="inline-left"><input type = "text" name = "address2" id = "address2" size = "70" value="<?php echo $address2; ?>" ></li>

               <li class="inline-left-label"><label for = "City">City</label><span class="tooltiptext" id="invalidCity">A valid City is required</span></li>
               <li class="inline-left"><input type="text" name = "City" id = "City" size = "30" value="<?php echo $city; ?>"  onblur="checkData(this.value,'invalidCity')">
                  </li>

               <li class="inline-middle-label"><label for = "State">State</label><span class="tooltiptext" id="invalidState">Please enter a valid state</span></li>
               <li class="inline-middle"><input type="text" name = "State" id = "State" size = "4" value="<?php echo $state; ?>"  onblur="checkState(this.value,'invalidState')"></li>

               <li class="inline-right-label"><label for = "Zip">Zipcode</label><span class="tooltiptext" id="invalidZip">Invalid Zip Code</span></li>
               <li class="inline-right"><input type="text" name = "Zip" id = "Zip" size = "12" maxlength="10" value="<?php echo $zipcode; ?>"  onblur="checkZip(this.value,'invalidZip')"></li>

               <li class="inline-left-label"><label for = "phone">Phone: xxx-xxx-xxxx</label><span class="tooltiptext" id="invalidPhone">Please enter a valid phone number</span></li>
               <li class="inline-left"><input type = "text" name = "phone" id = "phone" size = "20" value="<?php echo $phone; ?>" onblur="checkPhone(this.value,'invalidPhone')"></li>

               <li class="inline-right-label"><label for = "email">Email Address</label></li>
               <li class="inline-right"><input type = "email" name = "email" id = "email" size = "30" value="<?php echo $email; ?>" ></li>


               <li class="inline-left-label">
                  Would you like to be added to our mailing list?
                  <label for="mailing_list" style="float:none; margin-left: 20px">Yes</label>
                  <input type="checkbox" checked="checked" name="mailing_list" id="mailing_list" value="Yes">
               </li>
               <li class="inline-left-label">Payment Method</label></li>
               <li class="inline-left"><input type="radio" name = "payment" id = "visa" size = "20" value="<?php echo Visa; ?>">Visa
                  <input type = "radio" name = "payment" id = "mastercard"  value="<?php echo MasterCard; ?>">Master Card
                  <input type = "radio" name = "payment" id = "amex"  value="<?php echo Amex; ?>">America Express
                  <input type = "radio" name = "payment" id = "discover"  value="<?php echo discover; ?>">Discover
               </li>
               <li class="inline-left-label"><label for = "CCN">Credit Card Number</label><span class="tooltiptext" id="invalidCCN">Invalid credit card number</span></li>
               <li class="inline-left"><input type="text" size="22" name="CCN" id="CCN" value="<?php echo $CCN; ?>" onblur="checkCCN(this.value,'invalidCCN')" required /></li>

               <li class="inline-left-label"><label for = "date">Exp. Date</label><span class="tooltiptext" id="invaliddate">Invalid Date</span></li>
               <li class="inline-left"><input type="text"  name="date" value="<?php echo $date; ?>" id="date" onblur="checkDate(this.value,'invaliddate')"/></li>


               <li>
                  <label for = "action">&nbsp;
                  </label>


<!--                  <input type = "submit" name = "action" id = "action" value = "Submit">-->
               </li>

            </ul>

      </fieldset>
     <!-- </form>-->

      <h2>Shipping information</h2>


        <!-- <form action = "cart.php" id="shipping-form" onsubmit="submitForm()">-->
         <fieldset>
            <span>Copy Billing information to shipping</span>
            <input type="checkbox" id="copyBilltoShip" onclick="copy(this)">

            <ul class="tooltip">
               <li class="inline-left-label"><label for = "firstname">First Name</label><span class="tooltiptext" id="invalidshipFirstName">First Name is required</span></li>
               <li class="inline-left">  <input type = "text" name = "shipfirstname" id = "shipfirstname" size = "30" maxlength="80" value="<?php echo $shipfirstname; ?>"  oninput="checkData(this.value,'invalidFirstName')"></li>

               <li class="inline-right-label"><label for = "lastname">Last Name</label><span class="tooltiptext" id="invalidshipLastName">Last Name is required</span></li>
               <li class="inline-right"><input type = "text" name = "shiplastname" id = "shiplastname" size = "30" maxlength="80" value="<?php echo $shiplastname; ?>"  oninput="checkData(this.value,'invalidLastName')"></li>

               <li class="inline-left-label"><label for = "address1">Address</label><span class="tooltiptext" id="invalidshipAddress">Address is required</span></li>
               <li class="inline-left"><input type = "text" name = "shipaddress1" id = "shipaddress1" size = "70" value="<?php echo $shipaddress1; ?>"  oninput="checkData(this.value,'invalidAddress')"></li>

               <li class="inline-left-label"><label for = "address2">Address2 (Optional) Apartment, suite, floor, etc.</label></li>
               <li class="inline-left"><input type = "text" name = "shipaddress2" id = "shipaddress2" size = "70" value="<?php echo $shipaddress2; ?>" ></li>

               <li class="inline-left-label"><label for = "City">City</label><span class="tooltiptext" id="invalidCshipity">Please enter a city</span></li>
               <li class="inline-left"><input type="text" name = "shipCity" id = "shipCity" size = "30" value="<?php echo $shipCity; ?>"  oninput="checkData(this.value,'invalidCity')">
               </li>

               <li class="inline-middle-label"><label for = "State">State</label><span class="tooltiptext" id="invalidshipState">Invalid State</span></li>
               <li class="inline-middle"><input type="text" name = "shipState" id = "shipState" size = "4" value="<?php echo $shipState; ?>"  oninput="checkState(this.value,'invalidState')"></li>

               <li class="inline-right-label"><label for = "Zip">Zipcode</label><span class="tooltiptext" id="invalidshipZip">Invalid Zip Code</span></li>
               <li class="inline-right"><input type="text" name = "shipZip" id = "shipZip" size = "12" maxlength="10" value="<?php echo $shipZip; ?>"  oninput="checkZip(this.value,'invalidZip')"></li>

               <li class="inline-left-label"><label for = "phone">Phone</label></li>
               <li class="inline-left"><input type = "text" name = "shipphone" id = "shipphone" size = "20" value="" ></li>

               <li class="inline-right-label"><label for = "email">Email Address</label></li>
               <li class="inline-right"><input type = "email" name = "shipemail" id = "shipemail" size = "30" value="" ></li>



               <li>
                  <label for = "action">&nbsp;
                  </label>


                  <input type = "submit" name = "action" id = "action" value = "Submit">
               </li>

            </ul>

         </fieldset>
         </form>
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
