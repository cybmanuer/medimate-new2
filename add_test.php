<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $t_id = $_POST["t_id"];
    $tname = $_POST["tname"];
    $sample = $_POST["sample"];
    $duration = $_POST["duration"];
    $amount = $_POST["amount"];
    $exists=false;
    
        $sql = "INSERT INTO `test` (`t_id`, `tname`, `sample`, `duration`, `amount`) VALUES ('$t_id','$tname', '$sample', '$duration','$amount')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
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
    <title>add_test</title>
  </head>
  <body>
      
      <?php
    if($showAlert){
    echo "<script>alert('Wow! Test Added.')</script>";
    }
    if($showError){
    echo "<script>alert('Woops! ERROR IN ADDING.')</script>";
    }
    ?>

     <div class= "container" >
    <div class="title">ADD TEST</div>
    <form action="add_test.php" method="POST" >
  <div class="user-details">
  <div class="input-box">
     <span class="details">Test ID</span>
     <input type="text" placeholder="Enter T_ID" name="t_id"  required>
  </div>
  <div class="input-box">
     <span class="details">Test Name</span>
     <input type="text" placeholder="Enter your Test Name" name="tname"  required>
  </div>
<div class="input-box">
     <span class="details">Sample</span>
     <input type="text" placeholder="Enter details" name="sample"  required>
  </div>
  <div class="input-box">
     <span class="details">Duration</span>
     <input type="text" placeholder="Enter Duration" name="duration"  required>
  </div>
  
  <div class="input-box">
     <span class="details">Amount</span>
     <input type="text" placeholder="Enter your Amount" name="amount"  required>
  </div>
  </div>
 
  <div class="button">
    <input type="submit"  value="ADD TEST">
  </div>
<p class="login-register-text"><a href="clinicf.php">HOME</a></p>
    </form>
</div>
  </body>
</html>