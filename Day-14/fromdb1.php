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
            $sql_query="SELECT * FROM `students`";
            $result=mysqli_query($con,$sql_query);
            if(mysqli_num_rows($result)>0)
            {
                ?>
            <table>
            <thead>
            <tr>
            <th>rollNo</th>
            <th>firstName</th>
            <th>lastname</th>
            <th>username</th>
            <th>password</th>
            <th>email</th>
            <th>address</th>
            <th>contact</th>
            <th>subject</th>
            <th>timing</th>
            <th>Edit</th>
            </tr>
            </thead>
            <tbody>
                <?php
                while($row=mysqli_fetch_array($result))
                {

                    echo "<tr> 
                    <td>".$row["rollNo"]."</td> 
                    <td>".$row["firstName"]."</td>
                    <td>".$row["lastname"]."</td>
                    <td>".$row["username"]."</td>
                    <td>".$row["password"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["address"]."</td>
                    <td>".$row["contact"]."</td>
                    <td>".$row["subject"]."</td>
                    <td>".$row["timiing"]."</td>
                    <td> <a href='edit.php?rollNo=".$row["rollNo"]."'>Edit</a></td>
                    
                    </tr>";
                    
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