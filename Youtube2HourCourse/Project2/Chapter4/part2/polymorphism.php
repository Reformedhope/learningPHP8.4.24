<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polymorphism</title>
</head>
<body>
    <?php
    require_once'JsonFileReader.php';
    require_once'StockManager.php';
    require_once'CsvFileReader.php';
    $stockManager = new StockManager();
    $csvFileReader = new CsvFileReader();
    $jsonFileReader = new JsonFileReader();
    $stockManager->updateStockfromFile('inventory.csv', $csvFileReader). '</br>';
    
    echo'hello';

    $stockManager->updateStockFromFile( 'inventory.json', $jsonFileReader) . '</br>';
    
    
    ?>
</body>
</html>