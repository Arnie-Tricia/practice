
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_post1.php" method="POST">
    <label>x</label>
    <input type="text" name="x">
    <br>
    <label>y</label>
    <input type="text" name="y">
    <br>
    <label>z</label>
    <input type="text" name="z">
    <br>
    <input type="submit" value="Total">
    </form>
   
</body>
</html>
<?php 
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;



// $total = abs($x); //change the negative value into positive
// $total = round($x); //round to the nearest integer. ex. 3.7 = 4
// $total = floor($x); //round downwards. ex 3.7 = 3
// $total = ceil($x); //round upwards ex 3.2 = 4

// $total = pow($x, $y); //ex. 3**2 = 9
// $total = max($x, $y, $z);
// $total = min($x, $y, $z);
// $total = pi();
// $total = rand(2, 4); random


echo"<i>{$total}</i>";

?>
