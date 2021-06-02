<?php

$array = file_get_contents("./todolist.json");
$array = json_decode($array,true);


if (isset($_POST['name'])==true){
    array_push($array,$_POST);
    $array = json_encode($array,JSON_PRETTY_PRINT);
    file_put_contents('todolist.json', $array);
    
}
header('Location: index.php');
?>