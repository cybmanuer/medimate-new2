<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `email`, `phonenumber`, `password`) VALUES ('$username','$email', '$phonenumber', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="css/register.css">
    <title>SignUp</title>
  </head>
  <body>
      
      <?php
    if($showAlert){
    echo "<script>alert('Wow! User Registration Completed.')</script>";
    }
    if($showError){
    echo "<script>alert('Woops! Password not matched.')</script>";
    }
    ?>

     <div class= "container" >
    <div class="title">Registration</div>
    <form action="register.php" method="POST" >
  <div class="user-details">
  <div class="input-box">
     <span class="details">User Name</span>
     <input type="text" placeholder="Enter your username" name="username"  required>
  </div>
  <div class="input-box">
     <span class="details">Email</span>
     <input type="text" placeholder="Enter your email" name="email"  required>
  </div>
<div class="input-box">
     <span class="details">Phone Number</span>
     <input type="text" placeholder="Enter Your number" name="phonenumber"  required>
  </div>
  
  <div class="input-box">
     <span class="details">Password</span>
     <input type="Password" placeholder="Enter your Password" name="password"  required>
  </div>
    <div class="input-box">
     <span class="details">ConfirmPassword</span>
     <input type="Password" placeholder="Confirm your Password" name="cpassword" required >
  </div>
  </div>
 
  <div class="button">
    <input type="submit"  value="Register">
  </div>
<p class="login-register-text"> <a href="login.php">LOGIN</a></p>
    </form>
</div>
  </body>
</html>