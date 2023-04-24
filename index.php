<?php

$bdd = new PDO("mysql:host=localhost;dbname=resto", "root", ""); //cree la connexion avec la base de donnees

//var_dump($bdd);

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

    $req = $bdd->prepare("INSERT INTO commandes(nom_client, plat, quantite, emporter) VALUES(?,?,?,?)");

    $a =  $req->execute([$nom, $plat, $quant, $emporter]);

    //var_dump($a);
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/commande.css">
    <title>Commandes</title>
</head>

<body>

    <div class="center">
        <h1>commande(s)</h1>
        <form action="" method="post">
            <div class="txt_field">
                <input type="text" name="nom_client" required>
                <span></span>
                <label>Nom Client</label>
            </div>
            <div class="choix">
                <label>Plats</label>
                <select name="plat">
                    <option value="" disabled>choississez un plat</option>
                    <option value="kwanga + dindon">kwanga + dindon</option>
                    <option value="riz + poulet">riz + poulet</option>
                    <option value="fufu + pondu">fufu + pondu</option>
                    <option value="pizza">pizza</option>
                    <option value="pain au lait">pain au lait</option>
                    <option value="humburger">humburger</option>
                    <option value="shawarma au poulet">shawarma au poulet</option>
                    <option value="shawarma à la viande">shawarma à la viande</option>
                    <option value="ntaba">ntaba</option>
                    <option value="fumbwa + makayabu + fufu">fumbwa + makayabu + fufu</option>
                </select>
            </div>
            <div class="quant">
                <label>Quantité</label>
                <input type="number" name="quantite" min="1" required>
            </div>
            <div class="check">
                <label class="choix">A emporter ?</label>
                <input type="checkbox" name="emporter">
            </div>
            <input type="submit" value="Envoyer" name="envoyer">
            <a href="pages/affichage.php"><input type="button" value="voir commande"></a>
    </div>
    </form>
    </div>

</body>

</html>