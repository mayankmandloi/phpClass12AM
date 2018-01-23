<!DOCTYPE html>
<html lang="en">
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
        $firstName=$_POST["firstName"];
        $lastname=$_POST["lastname"];
        $username=$_POST["username"];
        $password=$_POST["password"];
        $email=$_POST["email"];
        $address=$_POST["address"];
        $contact=$_POST["contact"];
        $subject=$_POST["subject"];
        $timiing=$_POST["timiing"];

        $con=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

        if($con)
        {
            $sql_query="INSERT INTO `students` (`rollNo`, `firstName`, `lastname`, `username`, `password`, `email`, `address`, `contact`, `subject`, `timiing`) VALUES (NULL,'$firstName','$lastname','$username','$password',' $email','$address','$contact','$subject','$timiing')";
            $query=mysqli_query($con,$sql_query);
            if($query)
            {
                echo "<script>alert('saved');</script>";
            }
        }


    ?>
</body>
</html>