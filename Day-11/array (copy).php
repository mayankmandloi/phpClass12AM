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

    // echo $mohit;
    //print_r($mohit)

    foreach($mohit as $key=>$val)
    {
        if($key=="marks"){?>
            <ul><?php
        foreach($val as $subKey=>$subject)
        {?>
         <li><?php
            echo "marks in ".$subKey." are ".$subject;
            ?>
        </li><?php
        }
        ?>
        </ul>
        <?php
        }
        else
        {
            echo "<p>".$key." is ".$val."</p>";
        }
    }

    ?>
</body>
</html>