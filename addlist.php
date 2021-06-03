<?php

$array = file_get_contents("./todolist.json");
$array = json_decode($array,true);
$success =2;

if (!empty($_POST['name'])){
    array_push($array,$_POST);
    $array = json_encode($array,JSON_PRETTY_PRINT);
    file_put_contents('todolist.json', $array);
    $success = 1;
}
header("Location: index.php?success=".$success);
?>