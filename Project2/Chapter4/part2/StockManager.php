<?php

require_once'CsvFileReader.php';
class StockManager {


    public function updateStockFromFile(string $filename, FileReaderInterface $fileReader){
        $stockItems = $fileReader->readFileAsAssociativeArray($filename);
        foreach($stockItems as $stockItem){
            print'updating the database with the item' . $stockItem['name'] . PHP_EOL;
        }
    }
}




