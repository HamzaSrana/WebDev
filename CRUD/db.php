<?php
$servername="127.0.0.1:8081";
$username="team17";
$password="ypV5aQXJ";
$dbname ="default_team17";
// creating connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
    die("Connection failed: ".$conn->connect_error);
?>
