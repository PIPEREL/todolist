<?php
include './constantes.php';  
include './fileManager.php';

function removeItem(array $indiceToRemove, array $dataArray){
    for($i=0; $i < count($indiceToRemove); $i++){
        $currentIndex  = $indiceToRemove[$i];
        unset($dataArray[$currentIndex]);

    }
    return array_values($dataArray);

}


function remove(){
    $indexToRemove = $_POST['indexes'];
    $dataArray = readJson(JSON_PATH); 
    return removeItem($indexToRemove, $dataArray);
}



if (!empty($_POST['indexes'])){
    $newArray = remove();
    saveJson(JSON_PATH,$newArray);
}


header("Location: index.php");









//const JSON_PATH = './todolist.json';

//$array= readJson(JSON_PATH); // $array = file_get_contents("./todolist.json");
                               // $array = json_decode($array,true);


// $remove = $_POST['indexes'];
// $newarray = [];

// for ($i = 0; $i < count($array) ; $i++){
//     if(in_array($i, $remove) == false){
//         array_push($newarray, $array[$i]);
//     }
// }




//  $newarray = json_encode($newarray,JSON_PRETTY_PRINT);
//  file_put_contents('todolist.json', $newarray);



?>