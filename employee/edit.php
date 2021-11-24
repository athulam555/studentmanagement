<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "<pre>";print_r($_GET['id']);die();
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE employee set employee_name='" . $_POST['employee_name'] . "', address='" . $_POST['address'] . "', gender='" . $_POST['gender'] . "', state='" . $_POST['state'] . "' ,designation='" . $_POST['designation'] . "' , salary='" . $_POST['salary'] . "' , employee_email='" . $_POST['employee_email'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM employee WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
<!-- </div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div> -->
<h2>PROFILE UPDATION</h2>
<table>
<tr><td>Employee Id</td>
<td><input type="text" name="id" class="txtField" value="<?php echo $row['id']; ?>" readonly>
</td></tr>
<tr><td>Name</td>
<td><input type="text" name="employee_name" class="txtField" value="<?php echo $row['employee_name']; ?>">
</td></tr>
<tr><td>Address </td>
<td><textarea name="address" value="address"><?php echo $row['address']; ?></textarea> </td></tr>

<tr><td>District</td>
<td><select name="state"  class="form-control"  id="dis">
	                        
	                         <option value="Trivandram">Trivandram</option>
                          <option value="Pathanamthitta">Pathanamthitta</option>
                          <option value="Alapuzha">Alapuzha</option>
                           <option value="Kottayam">Kottayam</option>
                          <option value="Edukki">Edukki</option>
                           <option value="Ernakulam">Kollam</option>
                          <option value="Thrissur">Thrissur</option>
                           <option value="Kozhikode">Kozhikode</option>
                          <option value="palakade">Palakade</option>
                            <option value="malapuram">Malapuram</option>
                          <option value="Wayanade">Vayanade</option>

                            <option value="Kannur">Kannur</option>
                          <option value="Kasargode">Kasargode</option></select>
   
	                        <option value="{$b.state}"></option>
	                        
</td></tr>
<tr><td>Designation</td>
<td><input type="text" name="designation" class="txtField" value="<?php echo $row['designation']; ?>">
</td></tr>
<tr><td>salary</td>
<td><input type="text" name="salary" class="txtField" value="<?php echo $row['salary']; ?>">
</td>
<tr><td>Email Id</td>
<td><input type="text" name="employee_email" class="txtField" value="<?php echo $row['employee_email']; ?>">
</td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Update" class="button"></td></tr>
</table>
</form>
</body>
</html>


<!-- <input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>"> -->
