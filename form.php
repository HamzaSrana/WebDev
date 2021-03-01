<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Form page</title>
</head>
<body>
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
<style>
  body {
    background-color: azure;
    font-family:cursive;
    font-size: medium;
    background-image: url(Imgs/hands1.jpeg);
    background-repeat: no-repeat;
    background-size: 100% 200%;
}
 h1 {
    text-align:center;
    color:black;
}

 h3 {
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: medium;
 }
 #input {
  height:50px;
    width:100px;
    background-color :grey;
    color: black;
    border-color:blue;
}
 aside{float:right;margin-left:20px} 
</style>
<aside>   
            <img src="https://picsum.photos/200/300" class="rounded float-start" alt="...">
        
        </aside>
    <h1>Join our hands ¤We are grateful to Have you¤</h1>
 <form action="form.php">
First Name: <input type="text" name="firstname" value="<?php echo $firstname;?>">

Last Name: <input type="text" name="lastname" value="<?php echo $lastname;?>">

E-mail: <input type="text" name="email" value="<?php echo $email;?>">



Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other
<input type="submit" id=input value="Submit">
</form> 
  
</body>
</html>
