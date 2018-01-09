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

$mohit=[name=>"Mohit",number=>9752517403,email=>"mohitmandloi321@gmail.com",subject=>"PHP",marks=>["bio"=>52,"chem"=>34,"phy"=>27]];

$darshay=[name=>"Darshay",number=>9039287744,email=>"darsh710@gmail.com",subject=>"PHP",marks=>["maths"=>87,"accounts"=>98,"bs"=>88]];

$meenal=[name=>"Meenal",number=>8871497488,email=>"meenalsaxsena@gmail.com",subject=>"PHP",marks=>["DS"=>67,"NS"=>65,"MP"=>62]];

$person=[$mohit,$darshay,$meenal];
echo var_dump($person);

    ?>
</body>
</html>