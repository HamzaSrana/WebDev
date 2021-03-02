<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Donate with Paypal</title>
</head>
<style>
  body {
    background-color:black;
  }
  h1{
    color:white;
  }
</style>
<body>
<div class="box-shadow-preview">
<div>
    <nav class="navbar1">
  <ul class="nav-list">
      <div class="logo"><img src="imgs/logo1.png" alt="logo"></div>
    <li class="current"><a href="index.html">Home</a></li>
    <li ><a href="work.html">Our Work</a></li>
    <li><a href="participate.html">Participate</a></li>
   
  </ul>
</nav>
    </div>
    </div>

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
<img src="imgs/angels-of-hope.jpg" alt="">
<img src="imgs/dogi.jpg" alt="">
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
<form name="index" action="index.php" method="POST">
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

