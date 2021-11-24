<html>
<title>title</title>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <head>

    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Students Management System </a>
                </div>
                <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Course
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="viewcourse.php">View Course</a></li>
                            <li> <a href="addcourse.php">Add Course</a></li>
                            <!-- <li><a href="#">Page 1-3</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Coutry
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li> <a href="addcountry.php">Add country</a></li>
                            <li>  <a href="viewcountry.php">View country</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">City
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li> <a href="addcity.php">Add city</a></li>
                            <li> <a href="viewcity.php">View city</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Student
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>  <a href="addstudent.php">Add Student</a></li>
                            <li> <a href="viewstudent.php">View Student</a></li>
                            <li>  <a href="liststudent.php">Student List</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="card text-center">
                    Welcome to Student Management System
            </div>
        </div>
    </body>
</html>