<?php
$array = file_get_contents("./todolist.json");
$array = json_decode($array,true);
$timezone = date('Y-m-d');


?>