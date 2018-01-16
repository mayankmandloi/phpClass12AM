<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    th,td,table
    {
        border: 1px solid black;
        border-collapse:collapse;
    }
    th,td
    {
        padding:5px;
    
    }


    </style>
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
            $sql_query="SELECT * FROM `test` WHERE `name` LIKE '%m%' ";
            $result=mysqli_query($con,$sql_query);
            if(mysqli_num_rows($result)>0)
            {
                ?>
            <table>
            <thead>
            <tr>
            <th>Name</th>
            <th>Password</th>
            </tr>
            </thead>
            <tbody>
                <?php
                while($row=mysqli_fetch_assoc($result))
                {

                    echo "<tr> <td>".$row["name"]."</td> <td>".$row["password"]."</td></tr>";
                    
                }
                ?>
                </tbody>
                </table>
                <?php
            }
        }


    ?>
</body>
</html>