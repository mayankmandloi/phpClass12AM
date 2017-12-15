<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Bhumi</title>
</head>
<body>
    <h1>PHP Variables Scope</h1>
    <ol>
        <li>Local variable</li>
        <li>Function parameters</li>
        <li>Global variable</li>
        <li>Static variables</li>
    </ol>

    <?php
    $var=20; 
    function test()
    {
        //GLOBAL $var;
        $var= 10;
        echo $var;
    }
    test();
    echo $var;
    ?>
    </br>
<?php

    function test1()
    {
        $var1=20;
        static $var2=20;
        $var1=$var1+1;
        $var2=$var2+1;
        echo $var1;
        echo "-----"; 
        echo $var2; 
        echo "</br>";
        
    }
    test1();
    test1();
    test1();
    test1();
    test1();


?>


</body>
</html>