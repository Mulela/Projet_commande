<?php
require_once('src/controllers/homepage.php');
require_once("src/controllers/ajout.php");

if (isset($_GET['action']) && $_GET['action'] !== '') {

    if ($_GET['action'] === 'addCommande') {

        ajoutCommande();
    }else{
        echo "Erreur 404 : la page n'existe pas. ";
    }
    
}else{
    homepage();
}