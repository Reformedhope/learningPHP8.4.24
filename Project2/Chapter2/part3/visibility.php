<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visibility</title>
</head>
<body>
    <?php
    require 'FileReader.php';
    require 'CsvFileReader.php';

    $fileReader = new FileReader();

    
    ?>
    <p><?php  echo  $fileReader->getData();
    ?></p>
    
</body>
</html>