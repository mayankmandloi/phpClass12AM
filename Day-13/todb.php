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
        $name=$_POST["name"];
        $password=$_POST["password"];

        $con=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

        if($con)
        {
            $sql_query="INSERT INTO test(name,password) VALUES ('$name','$password')";
            $query=mysqli_query($con,$sql_query);
            if($query)
            {
                echo "<script>alert('saved');</script>";
            }
        }


    ?>
</body>
</html>