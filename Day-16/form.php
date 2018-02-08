<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
    <input type="date" name="date" id="">
    <input type="submit"  value="submit" name="" id="">
    </form>

    <?php
    // if(isset($_POST["submit"]))
    {
        $dd=$_POST['date'];
        
        echo "<p>".date('d-m-y',strtotime($dd))."</p>";
        echo "<p>$dd</p>";
        echo "<script>window.alert($dd)</script>";
    }
    ?>
</body>
</html>