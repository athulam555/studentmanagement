<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "emp";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO employee (employee_name,address,gender,state,designation,salary,employee_email)
VALUES ('".$_POST["employee_name"]."','".$_POST["address"]."','".$_POST["gender"]."','".$_POST["state"]."',
'".$_POST["designation"]."','".$_POST["salary"]."','".$_POST["employee_email"]."')";

if ($conn->query($sql) === TRUE) {
  echo "New records insert successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
