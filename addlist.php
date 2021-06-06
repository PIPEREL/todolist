<?php


$success= 2;

include './constantes.php';
include './fileManager.php';


function addTask($taskToAdd, $dataArray){
    array_push($dataArray,$taskToAdd);
    saveJson(JSON_PATH,$dataArray);

}


function add(){
    $taskToAdd = $_POST;
    $dataArray = readJson(JSON_PATH);
    return addTask($taskToAdd, $dataArray);
}

if (!empty($_POST['name'])){
    add();
    $success=1;

}



// $array = file_get_contents("./todolist.json");
// $array = json_decode($array,true);
// $success= 2 ;

// if (!empty($_POST['name'])){
//     array_push($array,$_POST);
//     $array = json_encode($array,JSON_PRETTY_PRINT);
//     file_put_contents('todolist.json', $array);
//     $success = 1;
// }
header("Location: index.php?success=".$success);
?>