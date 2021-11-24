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

$sql = "SELECT * FROM country";
$result = $conn->query($sql);

if (count($_POST) > 0) {

    $sql = "INSERT INTO city (city_name,country_id)
    VALUES ('".$_POST["city_name"]."','".$_POST['country_name']."')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New records insert successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<html>
<title>City </title>
    <head>
    <body>
        <center><u><b>Add City</b></u><br></center>
        <br>
        <form action="addcity.php" method="post">
            <table align="center">
                <tr>
                    <td>Country Name:</td>
                    <td><select class="form-control" type="text" name="country_name" placeholder="Name....">
                        
                        <?php
                        foreach($result as $data)
                        { ?>
                            <option value="<?= $data['id']?>"><?= $data['country_name'] ?></option>
                        <?php }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>City name:</td>
                    <td><input type="text" name="city_name"> </td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit"></td>
                </tr>
            </table>
        </form>
    </body>
    </head>
</html>