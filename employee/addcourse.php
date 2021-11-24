<?php
include('connection.php');
if (count($_POST) > 0) {
  $sql = "INSERT INTO courses (name)
  VALUES ('" . $_POST["course_name"] . "')";

  if ($conn->query($sql) === TRUE) {
    echo "New records insert successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();
?>
<html>
<title>Add course</title>

<head>

<body>
  <center><u><b>Add Course</b></u><br></center>
  <br>
  <form action="addcourse.php" method="post">
    <table align="center">
      <tr>
        <td>Course Name:</td>
        <td><input type="text" name="course_name" placeholder="Name...."></td>
      </tr>
      <tr>
        <td><input type="submit" value="submit"></td>
      </tr>
    </table>
  </form>
</body>
</head>

</html>