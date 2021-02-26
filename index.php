<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Donate with Paypal</title>
</head>
<style>h1{
  text-align: center;
  }
  #main {
  width: 950PX;
  margin: 50PX auto;
  font-family: raleway;
  }
  #container {
  width: 834px;
  float: left;
  border-radius: 10px;
  font-family: raleway;
  border: 2px solid #ccc;
  padding: 10px 40px 11px;
  margin: 16PX;
  }
  h2 {
  background-color: #FEFFED;
  text-align: center;
  border-radius: 10px 10px 0 0;
  margin: -10px -40px;
  padding: 15px;
  }
  hr {
  border: 0;
  border-bottom: 1px solid #ccc;
  margin: 10px -40px;
  margin-bottom: 30px;
  }
  input[type=submit]{
  width: 100%;
  margin-top: 20px;
  background-color: #FFBC00;
  color: white;
  border: 1px solid #FFCB00;
  padding: 10px;
  font-size: 20px;
  cursor: pointer;
  margin-bottom: 0px;
  transition: all .2s ease-in-out;
  }
  input[type=number]{
  width: 90%;
  padding: 10px;
  margin-top: 20px;
  border: 1px solid #ccc;
  padding-left: 5px;
  font-size: 17px;
  font-family: raleway;
  }
  input[type=submit]:hover{
  transform: scale(1.1);
  }
  .box-shadow-preview{
  position: relative;
  background-color: #FFFFFF;
  border-width: 7px;
  border-style: solid;
  border-color: white;
  border-radius: 0px;
  box-shadow: 0px 5px 17px 1px #99A3AD, 0px 0px 40px #EEEEEE;
  }
  .charity{
  background-color: #fff;
  border: 1% solid #ccc;
  width: 23%;
  height: 250px;
  margin-left: 1%;
  margin-right: 1%;
  box-shadow: 0 0 5px rgba(0, 121, 193, 1);
  float: left;
  }
  .donate{
  margin-bottom: 30px;
  width: auto;
  height: 250px;
  }
  .charity img{
  width: 150px;
  height: 100px;
  padding: 25px 25px 0 25px;
  }
  .charity p{
  text-align: center;
  }
  .charity p a {
  text-decoration: none;
  color: rgb(0, 92, 132);
  font-weight: 600;
  }
  .simplePopup {
  display:none;
  position:fixed;
  border: 4px solid #FD703F;
  background:#fff;
  z-index:3;
  width: 290px;
  min-width: 290px;
  padding: 12px;
  text-align: center;
  }
  
  .simplePopupClose {
  float:right;
  cursor:pointer;
  margin-left:10px;
  margin-bottom:10px;
  }
  .simplePopup h3{
  text-align: center;
  font-family: raleway;
  }
  .simplePopup b{
  font-size: 30px;
  }
  .simplePopup img{
  position: relative;
  background-color: #FFFFFF;
  border-width: 7px;
  border-style: solid;
  border-color: rgb(253, 112, 63);
  border-radius: 0px;
  width: 100px;
  }
  .simplePopupBackground {
  display:none;
  background:#000;
  position:fixed;
  height:100%;
  width:100%;
  top:0;
  left:0;
  z-index:1;
  }
  
  #return {
  width: 492px;
  height: 350px;
  float: left;
  border-radius: 10px;
  font-family: raleway;
  border: 2px solid #ccc;
  padding: 10px 40px 11px;
  margin: 16PX;
  }
  #return h3#success {
  text-align: center;
  font-size: 24px;
  margin-top: 50px;
  color: green;
  }
  #return P {
  margin-left: 122px;
  }
  #return .back_btn {
  margin-top: 51px;
  text-align: center;
  }
  #btn {
  width: 100%;
  background-color: #FFBC00;
  color: white;
  border: 2px solid #FFCB00;
  padding: 10px 70px;
  font-size: 20px;
  cursor: pointer;
  border-radius: 5px;
  margin-bottom: 15px;
  
  }
  a{
  text-decoration:none;
  color: cornflowerblue;
  }
  #formget{
  float: right;
  }
  #return h3#fail{
  text-align: center;
  font-size: 24px;
  margin-top: 50px;
  color: red;
  }</style>
<body>
<div id = "main">
<h1>Donate With PayPal</h1>
<div>
    <img src="imgs/p.png" alt="">
</div>
<div id = "container">
<h2>Save the Children Needs Your Support To Bring Back Smiles</h2>
<hr/>
<!-- Place somewhere in the <body> of your page -->
<div class="flexslider">
<!-- image slider start here -->
<ul class="slides">
<li>
<div class="box-shadow-preview">
<img src="imgs/gandibachi.jpg"/>
</div>
</li>
<li>
<div class="box-shadow-preview">
<img src="imgs/pray.jpg" />
</div>
</li>
<li>
<div class="box-shadow-preview">
<img src="imgs/kali bachi.jpg" />
</div>
</li>
<li>

<div class="donate">
<!-- 1st charity container -->
<div class="charity">
<a href=""><img src="imgs/housing.png"></a>
<form action="process.php" method="POST">
<input type="hidden" name="id" value="<?php echo base64_encode(1); ?>">
<input type="submit" value="Donate $25" name="submit">
</form>
<p>Or give <a href="process.php" onclick="show('<?php echo base64_encode(1); ?>');" class="show2">any amount</a>.</p>
</div>
<!-- 2nd charity container -->
<div class="charity">
<a href=""><img src="imgs/pls.jpg"></a>
<form action="process.php" method="POST">
<input type="hidden" name="id" value="<?php echo base64_encode(2); ?>">
<input type="submit" value="Donate $25" name="submit">
</form>
<p>Or give <a href="process.php" onclick="show('<?php echo base64_encode(2); ?>');">any amount</a>.</p>
</div>
<!-- 3rd charity container -->
<div class="charity">
<a href=""><img src="imgs/chil.jpg"></a>
<form action="process.php" method="POST">
<input type="hidden" name="id" value="<?php echo base64_encode(3); ?>">
<input type="submit" value="Donate $25" name="submit">
</form>
<p>Or give <a href="process.php" onclick="show('<?php echo base64_encode(3); ?>');">any amount</a>.</p>
</div>
<!-- 4th charity container -->
<div class="charity">
<a href=""><img src="imgs/africa.png"></a>
<form action="process.php" method="POST">
<input type="hidden" name="id" value="<?php echo base64_encode(4); ?>">
<input type="submit" value="Donate $25" name="submit">
</form>
<p>Or give <a href="process.php" onclick="show('<?php echo base64_encode(4); ?>');">any amount</a>.</p>
</div>
</div>
</div>
</div>
<div id="pop2" class="simplePopup">
<h3>Donate and start helping today!</h3>
<form action="process.php" method="POST">
<img src="imgs/paypal.jpg">
<br/>
<b>$</b><input type="hidden" name="id" id='charity_id' value=''>
<input type="number" value="" name="amount" required="required" step=".1">
<input type="submit" value="Donate Now" name="submit">
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<!-- code for sliders -->
<script type="text/javascript" charset="utf-8">
$(window).load(function() {
$('.flexslider').flexslider();
});</script>
<script src="js/jquery.simplePopup.js" type="text/javascript"></script>
<!-- call popup -->
<script type="text/javascript">
function show(id) {
$('#charity_id').val(id);
$('.box-shadow-preview').css("opacity", "0.1");
$('#pop2').simplePopup();
}
</script>   
</body>
</html>

