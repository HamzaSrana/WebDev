<?php
include 'db.php';

$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM table1 WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
First Name: <br>
<input type="text" name="fname"  value="<?php echo $row['fname']; ?>">
<br>
Last Name :<br>
<input type="text" name="lname" value="<?php echo $row['lname']; ?>">
<br>
Email:<br>
<input type="text" name="email" value="<?php echo $row['email']; ?>">
<br>


<input type="submit" name="submit" value="Submit" >
</form>
<?php 
if($_POST['submit']){
    
    $fname = $_POST['fname'];
    $query = mysqli_query($conn,"UPDATE table1 set fname='$fname' where id='$a'");
    if($query){
        echo "Record Modified Successfully <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not modified";}
    }
    if($_POST['submit']){
    
        $lname = $_POST['lname'];
        $query = mysqli_query($conn,"UPDATE table1 set lname='$lname' where id='$a'");
        if($query){
            echo "Record Modified Successfully <br>";
            echo "<a href='update.php'> Check your updated List </a>";
            // if you want to redirect to update page after updating
            //header("location: update.php");
        }
        else { echo "Record Not modified";}
        }
        if($_POST['submit']){
    
            $email = $_POST['email'];
            $query = mysqli_query($conn,"UPDATE table1 set email='$email' where id='$a'");
            if($query){
                echo "Record Modified Successfully <br>";
                echo "<a href='update.php'> Check your updated List </a>";
                // if you want to redirect to update page after updating
                //header("location: update.php");
            }
            else { echo "Record Not modified";}
            }
$conn->close();
?>
</body>
</html>