
<?php
require 'db.php'; 
$sql = "select * from studentsinfo";
$result = $conn->query($sql);?>
<html>
<head>
    <style>
        a.top {
            margin-right:20px;
            font-size:20px;
            color:red;
        }
        </style>
<title> Update Data</title>
</head>
<body>
    <a href="form.php" class="top">Create Data </a>
    <a href="update.php" class="top">Update/Delete Data </a>
    <a href="read.php" class="top">Retrieve Data </a>
<hr>
<table>
<tr>
<th>ID</th><th>First Name</th><th>Last Name</th>
<th>EMAIL</th> <th>Edit</th>
<th>Delete</th>
</tr>
<?php 
$sql="select * from table1";
$result = $conn->query($sql);  
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["fname"]; ?></td>
<td><?php echo $row["lname"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><a href="updatesingle.php?id=<?php echo $row['id']; ?>">Update</a></td>
<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>

<?php 
}

$conn->close();
?>
</table>
</body>
</html>