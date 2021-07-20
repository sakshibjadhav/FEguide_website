<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color:grey;
    }
    .btn{
        width:10%;
        height:5%;
        font-size: 22px;
        padding:0px;
    }
    </style>
</head>
<body>
    <h1>Search from database</h1>
    <h2>Retrive from database</h2>
    <div class="container">
    <form action="" method="POST">
    <input type="text" name="search" placeholder="Enter subject name"/>
    <input type="submit" name="btn" value="Search by name"/>
    </form>
    </div>
<?php
$servername="localhost";
$username="root";
$password="";
$database="que pap";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
     die("sorry we failed to connect ".mysqli_connect_error());
}
else
{
    echo"connection was successful<br>";
}
$sql="SELECT * FROM `question papers`";
$result=mysqli_query($conn,$sql)

$num=mysqli_num_rows($result);
echo $num;
echo "records found in database<br>";
if($num>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        echo $row['dec19'].$row['may19'].$row['dec18'].$row['may18'].$row['dec17'].$row['may17'].$row['dec16'].$row['may16'].$row['dec15'].$row['may15'].$row['dec14'].$row['may14'].$row['dec13'].$row['may12'].$row['dec12']
    }
}
?>
</body>
</html>