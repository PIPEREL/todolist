<?php

$success="";

if (!empty($_GET['success'])){
    if (($_GET['success']==1)){
        $success = '<p class="alertsuccess">fichier envoyé avec succès!</p>';
    }else{
        $success = '<p class="alertError">erreur formulaire incomplet...</p>';
    }
}
include './printlist.php';
include './index.phtml';

?>