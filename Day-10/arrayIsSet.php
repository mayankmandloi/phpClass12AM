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
    print_r($mohit);
    print_r("<br>");
    // $name = $mohit[0];
    // echo $name;
    // unset($name);
    unset($mohit[0]);
    // echo "Hello".$name;
    print_r($mohit);
    
    ?>
</body>
</html>