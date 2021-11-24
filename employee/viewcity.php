<?php
include('connection.php');

$sql = "SELECT * FROM city";
$result = $conn->query($sql);
echo '<center>City';
if ($result->num_rows > 0) {
  echo "<table border='1'><tr><th>Country Name</th><th>City Name</th></tr>";


  while($row = $result->fetch_assoc()) {
      $query = "SELECT * from country where id = '".$row['country_id']."' ";
    //   echo $query;
      $queryresult = $conn->query($query);
    //   echo $queryresult;
    echo "<tr><td><center>".$queryresult->fetch_assoc()['country_name']."</center></td>
    <td><center>".$row['city_name']."</center></td>
    </tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
echo '</courses>';
$conn->close();
?>
