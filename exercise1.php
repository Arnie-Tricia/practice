<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input form</title>
</head>
<body>
    <form method="POST">
    <h3>Please input your name:</h3>
    <input type="text" placeholder="Ex. Arnie" minlength="1" maxlength="30" name="name">
    <button>Submit</button>
    <form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {

        $name = $_POST['name'];
        echo"<h3> Hello $name</h3>";
    }
    
    ?>
    
</body>
</html>