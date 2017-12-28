<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Bhumi while loop</title>
</head>
<body>
    
<?php

$i=0;
$j=0;


while($i<5)
{
    $j=0;
    while($j<5)
    {
        echo "*";
        $j++;
    }
    echo"</br>";
    $i++;
}
?>

</body>
</html>