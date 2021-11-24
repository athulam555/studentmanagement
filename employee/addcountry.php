<?php
include('connection.php');
if (count($_POST) > 0) {

    $sql = "INSERT INTO country (country_name)
    VALUES ('".$_POST["country_name"]."')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New records insert successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<html>
<title>Add Country</title>

<head>
<body>
    <center><u><b>Add Country</b></u><br></center>
    <br>
    <form action="addcountry.php" method="post">
        <table align="center">
            <tr>
                <td>Country Name:</td>
                <td><input type="text" name="country_name" placeholder="Name...."></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</head>
</html>