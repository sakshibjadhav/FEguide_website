<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
      h1 {
            font-size: 360%;
            text-align:center;
      }
      h2 {
            font-size: 200%;
            text-align:center;
      }
      h3 {
            font-size: 150%;
            text-align:center;
      }
      h4{

        <font-size: 100px;
      }
      
   
      * {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  flex: 33%;
  padding: 0.0000001px;
      
}
input{

  width: 46%;
  margin:11px;
  padding:7px;
  font-size:15px;
  border: 3.2px solid black;
  text-align:center;
}
form{
      align-items:center;

}
  
    </style>
</head>
<body>

  <h1><img src="logo1.jpg" alt="logo" width="74" height="74">Question Paper Solutions <img src="logo1.jpg" alt="logo" width="74" height="74"></h1> 
  <div class="row">
    <div class="column">
      <img src="mechanics.jpg" alt="Snow" style="width: 97%;" width="70" height="216">
    </div>
    <div class="column">
      <img src="graphics.jpg" alt="Forest" style="width: 97%" width="70" height="216">
    </div>
    <div class="column">
      <img src="BEE.jpg" alt="Mountains" style="width: 97%;" width="70" height="216">
    </div>
    <img src="chemistry.jpg" alt="Mountains" style="width: 25%;" width="70" height="217">
  </div>
</div>
   
    
    <h2>Download all the previous year question paper solutions....</h2>
    <h3>   1.Enter the name of the subject.</h3>
    <h3>   2.Click on the submit button.</h3>
    <h3>   3.Click on the year.</h3>
    <h4> Subjects available:   1.Applied Mathematics 1   2.Applied Physics 1   3.Applied Chemistry 1   4.Engineering Mechanics   5.Basic Electrical Engineering   6.Applied Mathematics 2   7.Applied Physics 2   8.Applied Chemistry 2   9.Engineering Drawing   10.C Programming
    <div class="container">
    <form action="" method="POST">
      <input type="text" name="search" placeholder="Enter subject name"/>
      <input type="submit" name="btn" placeholder="Search"/>
      </form>













      <?php
    $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,'model_solutions');
    if(isset($_POST['btn']))
    {
        $id=$_POST['search'];
        $query="SELECT * FROM `model_solutions` where Subject='$id' "; 
        $result= mysqli_query($con,$query);
    }
    while($row =mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        ?>
        <a href="<?php echo $row['Dec-2019'];?>">Dec-2019</a><br>
        <a href="<?php echo $row['May-2019'];?>">May-2019</a><br>
        <a href="<?php echo $row['Dec-2018'];?>">Dec-2018</a><br>
        <a href="<?php echo $row['May-2018'];?>">May-2018</a><br>
        <a href="<?php echo $row['Dec-2017'];?>">Dec-2017</a><br>
        <a href="<?php echo $row['May-2017'];?>">May-2017</a><br>
        <a href="<?php echo $row['Dec-2016'];?>">Dec-2016</a><br>
        <?php
    }
    ?>
    
 
 
</body>
</html>