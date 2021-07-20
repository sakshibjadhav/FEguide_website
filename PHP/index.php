<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color:whitesmoke;
    }
    input{
        width:40px;
        height:5%;
        border:1px;
        border-radius:05px;
        padding: 8px 15px 8px 15px:
        margin :10px 0px 15px 0px;
        box-shodow :1px 1px 2px  1px grey;
    }
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="subject" placeholder="Enter subject name"><br>
    <input type="submit" name="search" value="Search data">
    </form>
    
<?php
    //$servername="localhost";
   // $username="root";
   // $password="";
  //  $database="que pap";
    //$conn=mysqli_connect($servername,$username,$password,$database);
   // if(!$conn)
   // {
   //     die("sorry we failed to connect ".mysqli_connect_error());
   // }
   // else
   // {
   //     echo"connection was successful<br>";
   // }
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,'que pap');
    if(isset($_POST['search']))
    {
        $sub=$_POST['subject'];

        $query="SELECT * FROM question papers where subjects='$sub' ";
        $query_run=mysqli_query($connection,$query);
        while($row=mysqli_fetch_array($query_run))
        {
            ?>
            <form action="" method="POST">
            <input type="hidden" name="subject" value="<?php echo $row['subject']?>"/><br>
            <input type="text" name="dec19" value="<?php echo $row['dec19']?>"/> <br>
            <input type="text" name="may19" value="<?php echo $row['may19']?>"/> <br>
            <input type="text" name="dec18" value="<?php echo $row['dec18']?>"/> <br>
            <input type="text" name="may18" value="<?php echo $row['may18']?>"/> <br>
            <input type="text" name="dec17" value="<?php echo $row['dec17']?>"/> <br>
            <input type="text" name="may17" value="<?php echo $row['may17']?>"/> <br>
            <input type="text" name="dec16" value="<?php echo $row['dec16']?>"/> <br>
            <input type="text" name="may16" value="<?php echo $row['may16']?>"/> <br>
            <input type="text" name="dec15" value="<?php echo $row['dec15']?>"/> <br>
            <input type="text" name="may15" value="<?php echo $row['may15']?>"/> <br>
            <input type="text" name="dec14" value="<?php echo $row['dec14']?>"/> <br>
            <input type="text" name="may14" value="<?php echo $row['may14']?>"/> <br>
            <input type="text" name="dec13" value="<?php echo $row['dec13']?>"/> <br>
            <input type="text" name="may13" value="<?php echo $row['may13']?>"/> <br>
            <input type="text" name="dec12" value="<?php echo $row['dec12']?>"/> <br>
            </form>
            <?php
        }
    }
    
?>
</body>
</html>
