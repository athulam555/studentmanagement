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

$sql = "SELECT * FROM courses";
$result = $conn->query($sql);
echo '<center>Courses';
if ($result->num_rows > 0) {
  echo "<table border='1'><tr><th>Course Name</th></tr>";


  while($row = $result->fetch_assoc()) {
    echo "<tr><td><center>".$row["name"]."</center></td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
echo '</courses>';
$conn->close();
?>
