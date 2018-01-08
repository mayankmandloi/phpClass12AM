<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Bhumi</title>
</head>
<body>


        <?php
        $n=$_GET["n"];
        for($i=0;$i<$n;$i++)
        {
            for($k=0;$k<$n-$i;$k++)
            {
                echo "&nbsp&nbsp";
            }
            for($j=0;$j<=$i;$j++)
            {
                echo "*&nbsp&nbsp";
            }
            echo "</br>";
        }
        ?>
</body>
</html>