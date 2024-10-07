<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Practice</title>
</head>
<body>
<?php

$name = "Arnie";
$food = "Pizza";
$email = "arnietricia@gmail.com";
$age = 12;
$num = 23;
$quantity = 3;
$price = 80;

$active = true;
$not_active = false;

$total = null;

echo"Hello World <br>";
echo"Im {$name} <br>";
echo"I like {$food} <br>";
echo"My email is {$email} <br>";
echo"Im {$age} years old. <br>";
echo"The pizza cost \${$price} <br>";

echo"Number of users are active: {$active} <br>";
echo"This some users are not active: {$not_active}";


echo"You have order {$quantity}x of {$price}<br>";

$total = $quantity * $price;

echo"The total cost is: \${$total}";
// Singleline comment
/* Multiline comment */



?>
</body>
</html>