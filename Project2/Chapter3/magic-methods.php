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
    $connection1->setConnectionId('127.0.0.1');
    print $connection1; 
    

//display the value in magic- methods.php
    echo 'Here is the current number you are at ' . $connection1->getCount(). '</br>';
    echo 'This conference ID is  ' . $connection1->conferenceId . '</br>';
    echo 'This is the conference ID ' . $connection1->connectionId . '</br>';
    
    ?>
</body>
</html>