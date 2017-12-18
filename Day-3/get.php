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
    echo "<p>Welcome ".$_POST["name"]."</p>";
    echo "<p>your number is ".$_POST["number"]."</p>";
    echo "<p>and your password is ".$_POST["password"]."</p>";
    ?>
</body>
</html>