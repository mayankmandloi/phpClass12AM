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

    $number1 = $_GET["num1"];
    $number2 = $_GET["num2"];
    $operator = $_GET["oper"];

    if($operator=="+")
    {
        echo $number1+$number2;
    }
    if($operator=="-")
    {
        echo $number1-$number2;
    }
    if($operator=="*")
    {
        echo $number1*$number2;
    }
    if($operator=="/")
    {
        echo $number1/$number2;
    }
    if($operator=="%")
    {
        echo $number1%$number2;
    }

    ?>
</body>
</html>