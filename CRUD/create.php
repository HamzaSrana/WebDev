<?php include 'db.php' ;
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$city= $_POST['email'];
$groupid= $_POST['groupid'];
$sql="insert into table11 (fname, lname, email)
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