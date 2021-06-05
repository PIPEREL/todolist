<?php
$array = file_get_contents("./todolist.json");
$array = json_decode($array,true);


$remove = $_POST['indexes'];
$newarray = [];

for ($i = 0; $i < count($array) ; $i++){
    if(in_array($i, $remove) == false){
        array_push($newarray, $array[$i]);
    }
}


 $newarray = json_encode($newarray,JSON_PRETTY_PRINT);
 file_put_contents('todolist.json', $newarray);
 header("Location: index.php");

?>