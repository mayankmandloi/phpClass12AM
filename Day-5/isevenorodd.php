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

    $input=$_POST["num"];
    if($input%2==0)
    {
        echo "given number is even number";
    }
    else
    {
        echo "given number is odd number";
    }
    ?>
</body>
</html>