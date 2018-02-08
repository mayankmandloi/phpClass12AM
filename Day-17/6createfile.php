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
$myfile = fopen("test1.txt", "x");
$txt = "Mohit from Web Bhumi\n";
fwrite($myfile, $txt) or die("sorry ");
echo $txt;
$txt = "Shruti from Web Bhumi\n";
fwrite($myfile, $txt);
fclose($myfile);
?> 
</body>
</html>