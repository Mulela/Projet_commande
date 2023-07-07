<?php

function dbconnect()
{
    //instanciation d'un objet PDO pour creer une connexion a la base de donnee
    $database = new PDO("mysql:host=localhost;dbname=resto", "root", "");
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $database;
}

function getPlat(): array
{
    $database = dbconnect();
    $statement = $database->query("SELECT * FROM commandes"); //ASC ordre croissant

    $plats = [];

    while ($row = $statement->fetch()) {
        $plat = [
            'numero_client' => $row['id'],
            'nom_client' => $row['nom_client'],
            'plat' => $row['plat'],
            'quantite' => $row['quantite'],
            'emporter' => $row['emporter'],
        ];

        $plats[] = $plat;
    }

    return $plats;
}
function postPlat()
{
    $database = dbconnect();
    //inserer les elements saisies dans la base de donnees
    if (!empty($_POST['nom_client'])) { //renvoie un booleen, verifier si l'element saisit est dans le tableau
        //inserer les element saisis dans la base de donnees
        $nom = $_POST['nom_client'];
        $plat = $_POST['plat'];
        $quant = $_POST['quantite'];
        //je peux afficher "oui" ou "non" si je change le type de ma donnee [emporter] en [varchar] dans la BD
        if ($emporter = !empty($_POST['emporter'])) {
            //$emporter = true;
            $emporter = "oui";
        } else {
            //$emporter = false;
            $emporter = "non";
        }

        $statement = $database->prepare("INSERT INTO commandes(nom_client, plat, quantite, emporter) VALUES(?,?,?,?)");

        $statement->execute([$nom, $plat, $quant, $emporter]);
    }
}
