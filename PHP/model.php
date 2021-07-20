<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//CSS/RESET.css">
    <title>Pervious year question papers</title>
    
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="..//CSS/index.css">
    <link rel="stylesheet" href="..//CSS/question1.css">
    
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
                <a href="http://localhost/FEguide//MINI PROJECT/PHP/questionpaper.php">Question Papers</a>
                <a href="http://localhost/FEguide/MINI PROJECT/PHP/model.php">Question Papers solutions</a>
                <div class="nright">
                <a href="..//HTML/FinalAboutUs.html">About us</a>
                <a href="http://localhost/FEguide/MINI%20PROJECT/PHP/connect.php">Contact us</a>  
                </div>          
        </nav>    
    </header>    
    <div class="container">
        
        <div class="right">
        <form action="" method="POST">
        <select id="subject" name="search">
        <option value="Applied Mathematics 1">Applied Maths 1</option>
        <option value="Applied Physics 1">Applied Physics 1</option>
        <option value="Applied Chemistry 1">Applied Chemistry 1</option>
        <option value="Engineering Mechanics">Mechanics</option>
        <option value="Basic Electrical engineering">BEE</option>
        <option value="Applied Mathematics 2">Applied Maths 2</option>
        <option value="Applied Physics 2">Applied Physics 2</option>
        <option value="Applied Chemistry 2">Applied Chemistry 2</option>
        <option value="Engineering Graphics">Engineering Graphics</option>
        <option value="C programming">C programming</option>
        </select>
        <div class="btn"><input type="submit" name="btn" value="Search by name"/></div>
        </form>
            <div class="res">
            <?php
             $sub=$_POST['search'];
             echo $sub;
    $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,'mini_project');
    if(isset($_POST['btn']))
    {
        $id=$_POST['search'];
        $query="SELECT * FROM `model_solutions_` where subject='$id' "; 
        $result= mysqli_query($con,$query);
    }
    while($row =mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        ?>
        <br><br><a href="<?php echo $row['dec19'];?>">Dec-2019</a><br>
        <a href="<?php echo $row['may19'];?>">May-2019</a><br>
        <a href="<?php echo $row['dec18'];?>">Dec-2018</a><br>
        <a href="<?php echo $row['may18'];?>">May-2018</a><br>
        <a href="<?php echo $row['dec17'];?>">Dec-2017</a><br>
        <a href="<?php echo $row['may17'];?>">May-2017</a><br>
        <a href="<?php echo $row['dec16'];?>">Dec-2016</a><br>
        <?php
    }
    ?>
    
    </div>
    </div>
    <div class="left">
        
        </div>
    
</div>


</body>
</html>