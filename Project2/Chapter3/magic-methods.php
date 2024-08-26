<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    require 'Connection.php'; 

    $connection1 = new Connection();
    $connection2 = new Connection();
    unset($connection2);

//display the value in magic- methods.php
    echo 'Here is the current number you are at ' . $connection1->getCount();
    
    ?>
</body>
</html>