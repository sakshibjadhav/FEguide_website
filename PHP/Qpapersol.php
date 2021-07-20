<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color: pink;

    }
    .btn{
        width:10%;
        height: 5%;
        font-size:22px;
        padding:0px;
    }
    </style>
</head>
<body>
<h1>Fetch from Database.</h1>
<div class="container">
<form action="" method="POST">
<input type="text" name="search" placeholder="Enter subject name"/>
<input type="submit" name="btn" placeholder="Search"/>
</form>
</div>
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