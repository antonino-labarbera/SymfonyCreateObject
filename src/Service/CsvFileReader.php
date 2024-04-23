<?php

namespace App\Service;

/**
 * Class CsvFileReader
 *
 * A class for reading CSV files.
 */
class CsvFileReader{
    
    /**
     * Reads the contents of a CSV file and returns an array of data sets.
     *
     * @param string $excelFullPath The full path to the CSV file to be read.
     *
     * @return array An array containing data sets extracted from the CSV file.
     */
    public function readFile($excelFullPath){
        
        $file = fopen($excelFullPath, 'r');
        $booksData = [];
        $keys = fgetcsv($file);
        
        while(($data = fgetcsv($file)) !==false){
            $rowData = [];
            foreach ($keys as $index => $key) {
                $rowData[$key] = $data[$index] ?? '';
            }
            $booksData[] = $rowData ;
        }
        fclose($file);
        $dataSets = array_chunk($booksData, 1, true);

        return $dataSets;
    }
}