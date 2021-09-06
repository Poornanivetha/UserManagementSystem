<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
  <div class="header">
  	<h2>List of Users</h2>
  </div>
<table border="2" style="width=100%">
  <tr>
    
    <td>UserName</td>
    <td>Email ID</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from users"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
  
    <td style="width:32%"><?php echo $data['Username']; ?></td>
    <td><?php echo $data['email']; ?></td>    
    <td><a href="register.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>