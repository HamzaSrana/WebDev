<?php include 'db.php' ;
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$sql="insert into table1 (fname, lname, email)
values('$fname', '$lname', '$email')";

if($conn->query($sql) === TRUE) {
    echo "New record added";
    echo "<a href='update.php' class='top'>Home </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>