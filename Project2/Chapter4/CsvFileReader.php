<?php
require_once 'FileReaderInterface.php';

class CsvFileReader implements FileReaderInterface
{
    public function readFileAsAssociativeArray(string $filename): array {
        // Get the rows from the file as arrays
        $rows = array_map('str_getcsv', file($filename));

        // Separate the header
        $header = array_shift($rows);

        // Initialize the $items array to avoid undefined variable issues
        $items = [];

        // Create an associative array, using header values as keys
        foreach ($rows as $row) {
            // Check if the current row has the same number of elements as the header
            if (count($header) === count($row)) {
                $items[] = array_combine($header, $row);
            } else {
                // Log the issue, skip the row, or handle the error in some other way
                continue;
            }
        }

        return $items; // Return the associative array
    }
}

// The following code should be outside the class definition:
$fileReader = new CsvFileReader();
$items = $fileReader->readFileAsAssociativeArray('inventory.csv');
print_r($items);
?>
