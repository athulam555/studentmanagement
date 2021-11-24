<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Address</th><th>
  Gender</th><th>State</th>
  <th>Designation</th><th>Salary</th><th>Email Id</th><th>Update</th><th>Delete</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["employee_name"]."</td><td> ".$row["address"]."</td><td>".$row["gender"]."</td><td>".$row["state"]."</td><td>".$row["designation"]."</td><td>".$row["salary"]."</td><td>".$row["employee_email"]."</td><td><a href='edit.php?id=".$row['id']."'>
    EDIT</a></td><td><a href='delete.php?id=".$row['id']."'>Delete</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
