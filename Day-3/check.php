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
    $name=$_POST["name"];
    $age=$_POST["age"];
    if($name=="mohit"&&$age==17)
    {
        echo "Yes..!! Welcome Mohit";
    }
    else
    {
        echo "Sorry Wrong person";
    }
    ?>
</body>
</html>