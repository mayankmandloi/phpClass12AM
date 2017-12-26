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
 $age=$_POST["age"];
//if($age>=18)
if(!($age<18))
{
    echo "You are allowed";
}
else
{
    echo "you are not allowed";
}
?>
</body>
</html>