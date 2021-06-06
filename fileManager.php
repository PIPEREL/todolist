<?php


function readJson(string $filePath){
$jsonData = file_get_contents($filePath);
$convertedData = json_decode($jsonData,true);
return $convertedData;
}



function saveJson(string $filePath,  array $willBeSaved){
    $dataToJson = json_encode($willBeSaved,JSON_PRETTY_PRINT);
    file_put_contents($filePath, $dataToJson);

}



?>