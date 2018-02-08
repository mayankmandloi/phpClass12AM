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
$myfile = fopen("name.txt", "r");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo '"'.fgets($myfile).'"<br/>';
}
fclose($myfile);
?> 
</body>
</html>