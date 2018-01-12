
<!DOCTYPE html>
<html>
<body>
<style>
.menu
{
    list-style-type:none;
}
.menu>li
{
    float:left;
    padding:0px 3px;
}
</style>
<ul class="menu">
<?php

echo "<li><a href='#'>" . $_REQUEST["sub1"] . "</a></li> <li><a href='#'>" . $_REQUEST["sub2"] . "</a></li><li><a href='#'>" . $_REQUEST["sub3"] . "</a></li><li><a href='#'>" . $_REQUEST["sub4"] . "</a></li>";
?>
</ul>
</body>
</html>
