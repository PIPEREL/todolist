<?php  
$array = file_get_contents("./todolist.json");
$array = json_decode($array,true);
$affichage ="";
$timezone = date('Y-m-d');



// for ($i=0; $i< count($array); $i++){
//   if($timezone < $array[$i]['date']){
//     $affichage.= '<p><input class="paddinCheck" type="checkbox" id="check'.$i.'" name="check">'.$array[$i]['name']."</input></p>"; 
//     }else{
//     $affichage.= '<p><input class="paddinCheck" type="checkbox" id="check'.$i.'" name="check">'.$array[$i]['name']." ! EN RETARD</input></p>"; 
// }
// }


for ($i=0; $i< count($array); $i++){
    $affichage.= '<p><input class="paddinCheck" type="checkbox" id="check'.$i.'" name="check"><span class='.$array[$i]['prio'].'>'.$array[$i]['name']; 
    if($timezone > $array[$i]['date']){
      $affichage.=''." ! EN RETARD"; 
  }
  $affichage.= "</input></p>";
  }

?>
