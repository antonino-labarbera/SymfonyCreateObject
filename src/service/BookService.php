<?php

namespace App\Service;


class BookService{
    
    public function readFile($csvFile){
        
        $file = fopen($csvFile, 'r');
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
        return $booksData;
    }
}