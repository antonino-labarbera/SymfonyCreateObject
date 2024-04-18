<?php

namespace App\Service;


class BookService{
    
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
        return $booksData;
    }
}