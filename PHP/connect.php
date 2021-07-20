<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="..//CSS/RESET.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="../CSS/index.css">
<style>
    .left{
    float: left;
    height:600px;
    width: 50%;
    overflow-x: hidden;
    background-image: url(..//IMAGES/ContactUs.jpg);
    background-repeat: no-repeat;
    background-size: 1000px;
    align-items: center;
    z-index: -1;
    }
    .right form label{
        margin:15px;
        font-size: large;
    }
    .right form input{
        margin:15px;
        padding-top:5px;
        padding-right:550px;
        padding-bottom:5px;
        
    }
</style>
</head>
<body>
  <header>
    <h1 style = "font-size: 48px;"> <i class='fas fa-laptop-house'></i> FE GUIDE</h1>
    <br>
    <nav>
            <a href="..//HTML/index.html"><i class='fas fa-home'></i></a>
   
            <div class="dropdown">
                <a class="dropbtn">Syllabus
                  <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-content">
                  <a href="..//HTML/SEM1.html">Sem 1</a>
                  <a href="..//HTML/SEM2.html">Sem 2</a>
                  
                </div>
                
            </div>
            <a href="..//HTML/FinalStudyNotes.html">Study Notes</a>
            <a href="http://localhost/FEguide/MINI PROJECT/PHP/questionpaper.php">Question Papers</a>
            <a href="http://localhost/FEguide/MINI PROJECT/PHP/model.php">Question Papers solutions</a>
            <div class="nright">
            <a href="..//HTML/FinalAboutUs.html">About us</a>
            <a href="..//HTML/FinalContactUs.html">Contact us</a>  
            </div>          
    </nav>    
  </header>
  <div class="container">
    <div class="left">
    </div>
    <div class="right">
        <form action="" method="post">
            <br><label for="firstName">First Name</label>
            <br><input type="text" id="firstName" name="firstName" placeholder="Your first name.."><br>
            <br><label for="lastName">Last Name</label>
            <br><input type="text" id="lastName" name="lastName" placeholder="Your last name.."><br>
            <br><label for="emailId">Email-id</label>
            <br><input type="text" id="emailId" name="emailId" placeholder="Your Email-id.."><br>
            <br><label for="college">College name</label>
            <br><input type="text" id="college" name="college" placeholder="Your college name.."><br>
            <br><label for="comment">Comment</label>
            <br><input type="text" id="comment" name="comment" placeholder="write something.."><br>
            <br><input style=text-align:center; type="submit" name="submit"><br>
          </form>
    </div>
  </div>

<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="feguide";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    //echo "connection ok";
}
else{
    echo "connection failed".mysqli_connect_error();
}
$fn=$_POST['firstName'];
$ln=$_POST['lastName'];
$em=$_POST['emailId'];
$no=$_POST['college'];
$com=$_POST['comment'];

$query="INSERT INTO CONTACTUS VALUES ('$fn','$ln','$em','$no','$com')";
$data=mysqli_query($conn,$query);
if($data)
{
    //echo " Feedback submission successful";
}
else{
    echo "failed";
}
?>
</body>
 <footer>
    <div style=text-align: center;>
        &COPY;
    </div>
    </footer>
</html>