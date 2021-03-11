<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate With PayPal</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<style>
  body {
    background-color:black;
    background-image: url(Imgs/4.png);
    background-repeat: no-repeat;
    background-size: 100% 250%;
  }
  h1{
    color:black;
  }
</style>

<?php

if (!empty($_REQUEST)) {
$product_no = $_REQUEST['item_number']; // Product ID
$product_transaction = $_REQUEST['tx']; // Paypal transaction ID
$product_price = $_REQUEST['amt']; // Paypal received amount value
$product_currency = $_REQUEST['cc']; // Paypal received currency type
$product_status = $_REQUEST['st']; // Paypal product status
}
?>
<div id="main">
<h1 style="margin-left: -37%;">Thank you for Trusting Us</h1>

<div id="return">

<h2>Payment Status </h2>
<hr/>
<div class="box-shadow-preview">
<?php
//Rechecking the product price and currency details
if ($_REQUEST['st'] == 'Completed') {
echo "<h3 id='success'>Thanks For Donation</h3>";
echo "<P>Transaction Status - " . $product_status . "</P>";
echo "<P>Transaction Id - " . $product_transaction . "</P>";
echo "<div class='back_btn'><a href='index.php' id= 'btn'><< Back</a></div>";
} else {
echo "<h3 id='fail'>Thanks for Donation</h3>";
echo "<P>Transaction Status - Completed</P>";
echo "<P>Transaction Id - " . $product_transaction . "</P>";
echo "<div class='back_btn'><a href='donate.php' id= 'btn'><< Back</a></div>";
}
?>
</div>
</div>
</div>
</div>
</body>
</html>