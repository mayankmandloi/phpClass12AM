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

        $con=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

        if($con)
        {
            $sql_query="SELECT * FROM `test` ";
            $result=mysqli_query($con,$sql_query);
            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    echo $row["name"]." ".$row["password"];
                    echo "<hr>";
                }
            }
        }


    ?>
</body>
</html>