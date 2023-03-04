<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
          
// $sql = 'SELECT * from diagnosis WHERE username = '. $_SESSION['username'];
           
          


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <title>USER</title> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>USER | <?php echo strtoupper($_SESSION['username'] )?></title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/d676f25411.js" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" href="user_front.css"> -->

  </head>

<style>

body{
  margin: 0;
    padding: 0;
    font-family: montserrat;
    /* background:rgb(104, 228, 247); */
    background-image: url("https://images.pexels.com/photos/2847648/pexels-photo-2847648.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
 h1{
  
  color: white;
  color:black;
  padding-top:15px;
  padding-left:10%;
  font-size:25px;

 }
h1 span{
  font-size:35px;
}
h1{
background-color: aqua;
height: 70px;
width: 100%;
}

* {
  box-sizing: border-box;
  align-content: center;
}

form.example input[type=text] { 
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 40%;
  background: #f1f1f1;
}

form.example button {
  float:center;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}

form.example{
position: absolute;
top: 22%;
left: 60%;
transform: translate(-50%,-50%);
max-width: 100%;
padding: 15px;
border-radius: 5px;
display: flex;
width: 50%;
}


*{
  margin: 0px;
  padding: 0px;
}

.cards{
  width: 30%;
  display: inline-block;
  background-color: grey;
  border-radius: 5px;
  margin: 40px;
 cursor: pointer;
}

.cards:hover{
 box-shadow: 2px 2px 10px black;
}

.image img{
  width: 100%;
  height: 200px;
}

.title{
 text-align: center;
 padding: 5%;
}

.info{
  float: right;
 
  background-color:lightgrey;
  width: 300px;
  border:15px solid green;
  padding: 70px;
  margin: 20px;
}

.nav-area {
  float: right;
  list-style: none;
  margin-top: 30px;
}
.nav-area li {
  display: inline-block;
}
.nav-area li a {
  color: #fff;
  color:black;  
  text-decoration: none;
  padding: 10px 10px;
  margin-right:40px;
  font-family: poppins;
  font-size: 20px;
  text-transform: uppercase;
}
.nav-area li a:hover {
  background: #fff;
  color: #333;
  border-radius:20px;
}






</style>






  <body>
  
  <div class="menu-bar"><ul class="nav-area">
<li><a href="home.php">Home</a></li>
<li><a href="ourteam.html">About us</a></li>
<li><a href="feedback.php">Feedback</a></li>
<li><a href="login.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>

</ul>

      <h1>  <span><i class="fa-regular fa-circle-user"></i>   </span> <?php echo strtoupper($_SESSION['username'] )?> </h1>

<!-- <h2 allign center>WELCOME- <?php echo strtoupper($_SESSION['username'] );?> </h2> -->
  <br>
  <br>
  <br>
  <br>
  <br>

<div class="info"><p>Online diagnosis Appointment system is the system where the users can search the clinics that the needed for and also can take appointment. This system will make easy for the clinics and patients to see their list of clinics and their patients. Find & book appointments with  diagnostic tests, clinics.Users can even give their feedback to the system administration. Admin can manage clinics, tests.</p></div>



  <div class="main">
  <div class="cards">
         <div class="image">
         <img src="http://www.flexibleproduction.com/wp-content/uploads/2017/06/test-intelligenza-sociale.jpg">
         </div>

          <div class="title">
            <h2> <a href="book.php" >Book Test </a>
           </h2>
           </div>
  </div>


<div class="cards">
         <div class="image">
         <img src="https://www.chirayuhospital.org/images/hp.png">
         </div>

          <div class="title">
           <h2><a href="display.php" >View Clinics </a></h2>
           </div>
  </div>

<div class="cards">
         <div class="image">
         <img src="https://i2.wp.com/www.additudemag.com/wp-content/uploads/2006/12/GettyImages-1129223269.jpg?resize=1280%2C720px&ssl=1">
         </div>

          <div class="title">
           <h2><a href="reports.php" >REPORTS</h2>
           </div>
  </div>

  <div class="cards">
         <div class="image">
         <img src="https://images.everydayhealth.com/images/cancer/leukemia/cancer-diagnosis-and-tests-722x406.jpg">
         </div>

          <div class="title">
           <h2><a href="display_test.php" >View Tests</h2>
           </div>
  </div>
 </div>
  </body>
</html>