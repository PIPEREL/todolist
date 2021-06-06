<?php

include './constantes.php';
include './fileManager.php';

$array = readJson(JSON_PATH);

include './index.phtml';

?>