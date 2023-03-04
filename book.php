<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $name = $_POST["name"];
    $phonenumber = $_POST["phonenumber"];
    $cname = $_POST["cname"];
    $tname = $_POST["tname"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $exists=false;
    
        $sql = "INSERT INTO `booking` ( `name`, `phonenumber`, `cname`, `tname`, `date`, `time`) VALUES ('$name','$phonenumber', '$cname', '$tname','$date','$time')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    
    else{
        $showError = "Something Went Wrong";
    }
}
    
?>

<?php
   $mysqli =NEW MySQLi ('localhost', 'root', '', 'diagnosis');
   $resultSet = $mysqli-> query("SELECT cname FROM clinic");

?>

<?php
   $mysqli =NEW MySQLi ('localhost', 'root', '', 'diagnosis');
   $results = $mysqli-> query("SELECT tname FROM test");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Booking</title>
<link rel="stylesheet" href="book.css">
<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>
<body>
     <?php
    if($showAlert){
    echo "<script>alert('Wow! Booking Completed.')</script>";
    }
    if($showError){
    echo "<script>alert('Woops! Try Again.')</script>";
    }
    ?>
	<div class="menu-bar">
<ul class="nav-area">
<li><a href="home.php">Home</a></li>
<li><a href="#">About us</a></li>
<li><a href="login.php">Log Out</a></li>
</ul>
</div>
 <h1>Diagnosis And Test Management System</h1>
 <form action="book.php" method="post">
<div class="container">
<div class="container-time">
<h2 class="heading">Time Open</h2>
<h3 class="heading-days">Monday-Friday</h3>
<p>9am - 5pm </p>

<h3 class="heading-days">Saturday and sunday</h3>
<p>10am - 6pm</p>


<hr>

<h4 class="heading-phone">Call Us: +91 8948569100</h4>
</div>

<div class="container-form">
<form action="#">
<h2 class="heading heading-yellow">BOOK APPOINTMENT</h2>

<div class="form-field">
<p>Your Name</p>
<input type="text" name="name"     placeholder="Your Name">
</div>


<div class="form-field">
<p>Your PhoneNumber</p>
<input type="text"  name="phonenumber"  placeholder="Your PhoneNumber">
</div>


<div class="form-field">
<p>Clinic Name</p>
<select name="cname" >
	
<option>Select Clinic </option>	
<?php
      
          while($rows = $resultSet->fetch_assoc())
          {
             $cname=$rows["cname"];
             echo "<option value= '$cname'> $cname </option>";
          }
      

?>
</select>
</div>

<div class="form-field">
<p>Select Test</p>
<select name="tname">
	
<option>Select Test</option>	
<?php
      
          while($rows = $results->fetch_assoc())
          {
             $tname=$rows["tname"];
             echo "<option value= '$tname'> $tname </option>";
          }
      

?>
</select>

</div>
<div class="form-field">
<p>Date</p>
<input type="date" name="date">
</div>

<div class="form-field">
<p>Time</p>
<input type="time" name="time">
</div>

<button class="btn"> BOOK </button>
</form>
</div>
</div>


</body>
</html>