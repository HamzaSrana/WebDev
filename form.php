<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form page</title>
</head>
<body>
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
    color:white;
}

 h3 {
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: medium;
 }
 aside{float:right;margin-left:20px} 
</style>
<aside>   
            <img src="https://picsum.photos/200/300" class="rounded float-start" alt="...">
        
        </aside>
    <h1>Join our hands ¤We are grateful to Have you¤</h1>
Name: <input type="text" name="name" value="<?php echo $name;?>">

E-mail: <input type="text" name="email" value="<?php echo $email;?>">

Website: <input type="text" name="website" value="<?php echo $website;?>">

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

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
  
</body>
</html>
