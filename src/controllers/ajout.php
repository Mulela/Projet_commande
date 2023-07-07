<?php
require_once("src/model.php");

function ajoutCommande()
{
    $statement = postPlat();
    require('templates/ajout_commande.php');

    

}
