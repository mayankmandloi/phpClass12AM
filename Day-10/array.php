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
    // $mohit=["Mohit",9752517403,"mohitmandloi321@gmail.com","PHP","12:00PM"];
    $mohit=array("Mohit",9752517403,"mohitmandloi321@gmail.com","PHP","12:00PM");

    // echo $mohit;
    $mohit[10]="Web Bhumi";
    $mohit[7]="Hello";
    print_r($mohit);

    foreach($mohit as $val)
    {
        echo $val."</br>";
    }
    //echo var_dump($mohit);

    ?>
</body>
</html>