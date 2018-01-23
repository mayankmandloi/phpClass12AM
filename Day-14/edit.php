<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $servername="localhost";
    $dbusername="root";
    $dbpassword="root";
    $dbname="webbhumi";


    $roll = $_GET['rollNo'];
    echo $roll;
    $con=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

    //echo $con;
    if($con)
    {
        $sql_query="SELECT * FROM `students` WHERE `rollNo`=$roll";
        //echo $sql_query;
        $result=mysqli_query($con,$sql_query);
        while($row=mysqli_fetch_array($result))
        {
            ?>
        <form action="todb.php" method="post">
        <input type="text" name="firstName" value="<?php echo $row["firstName"] ?>">
        <input type="text" name="lastname" value="<?php echo $row["lastname"] ?>">
        <input type="text" name="username" value="<?php echo $row["username"] ?>">
        <input type="text" name="password" value="<?php echo $row["password"] ?>">
        <input type="text" name="email" value="<?php echo $row["email"] ?>">
        <input type="text" name="address" value="<?php echo $row["address"] ?>">
        <input type="text" name="contact" value="<?php echo $row["contact"] ?>">
        <input type="text" name="subject" value="<?php echo $row["subject"] ?>">
        <input type="text" name="timiing" value="<?php echo $row["timiing"] ?>">
        <input type="submit" name="submit" value="Submit">
        </form>
        <?php
        }
    }
    ?>
</body>
</html>