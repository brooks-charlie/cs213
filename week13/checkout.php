<?php
print "<html>
   <head>
      <title>Week 12</title>
   </head>
   <body>
";
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

print "<p class='notify'>$reply</p>"; 
print "<p>Name is $firstname $lastname</p>";
print "<p>Address is $address1 $address2</p>";
print "<p>Phone is $phone</p>";
$numberitems = $moabquantity + $poolquantity + $baseballquantity;
print "<p>Items in cart is $numberitems</p>";
print "<p>Total cost is $totalamount</p>";
print "<p>Payment method is $payment</p>";
print "<p>Date is $date</p>";
print "<p>Item Price is $itemprice</p>";
if ($moabquantity != 0){
print "<p>Moab Quantity is $moabquantity</p>";}
if ($poolquantity != 0){
print "<p>Pool Quantity is $poolquantity</p>";}
var_dump($poolquantity);
if ($baseballquantity != 0){
print "<p>Baseball Quantity is $baseballquantity</p>";}
print "<p>Total Amount is $totalamount</p>";
print "   </body>

</html>
";
?>
