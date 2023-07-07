<?php

require_once("src/model.php");

function homepage()
{
    $plats = getPlat();

    require('templates/homepage.php');
}
