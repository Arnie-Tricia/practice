 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milktea Shop</title>
 </head>
 <body>

 <form action="get_post.php" method="post">
    <label>Order:</label><br>
    <input type="text" name="order" minlength="1" maxlength="100">
    <br>
    <label>Quantity:</label><br>
    <input type="text" name="quantity" minlength="1" maxlength="100">
    <br>
    <input type="submit" value="total">
    <br>
 </form>
    
 </body>
 </html>

 <?php
 
//  $food = "Milktea";
 $order = $_POST["order"];
 $price = 50;
 $quantity = $_POST["quantity"];
 $total = null;


 $total = $price * $quantity;
 
 echo"<i> You ordered {$quantity} x {$order}'s <i><br>";
 echo"<i> The total Cost is \${$total} <i>";
 ?>