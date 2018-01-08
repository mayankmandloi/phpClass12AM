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
    
    $mohit=array("Mohit",9752517403,"mohitmandloi321@gmail.com","PHP","12:00PM");

    for($i=0;$i<5;$i++)
    $mohit[count($mohit)]="new value".$i;
    print_r($mohit);
    
    

    ?>
</body>
</html>