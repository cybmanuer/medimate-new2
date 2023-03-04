<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="rem_clinic.css">
    <meta charset="utf-8">
    <title>rem_test</title>
</head>
<body>
    <div class="center">
    <h1 align="center">REMOVE TEST</h1>
    <form action="rem_test.php" method="post">
    <div class="txt_field">
   <input type="text"  name= "t_id" required>
   <span></span>
   <label>TEST ID</label>
    </div>

     <input type="submit" name='delete' value="REMOVE TEST">
    <p class="login-register-text">Completed Deleting? <a href="adminf.php">Click Here</a>.</p>
        
    </div>
    </form>
    </div>  

</body>
</html>

<?php

    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, 'diagnosis');

    if(isset($_POST['delete']))
    {
      
         $t_id = $_POST['t_id'];

       $query ="DELETE FROM `test` WHERE t_id='$t_id' ";
       $query_run =mysqli_query($connection,$query);

       if($query_run)
       {
           echo "<script>alert('Test Deleted.')</script>";
       }
       else
       {
           
           echo "<script>alert('Test Not Deleted.')</script>";
       }
       
    }
?>