<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Affichage des commandes</title>
    <link rel="stylesheet" href="../css/affichage.css">
</head>

<body>
    <?php
    //connexion a la base de donnees

    //instanciation d'un objet PDO pour creer une connexion a la base de donnee
    $bdd = new PDO("mysql:host=localhost;dbname=resto", "root", "");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req = "SELECT * FROM commandes ORDER BY id ASC"; //ASC ordre croissant
    $resultat = $bdd->query($req);

    if (!$resultat) {
        echo "La recuperation des donnees a rencontre un probleme";
    } else {
        $nbre_commandes = $resultat->rowCount();
    }
    ?>

    <div class="filter">

    </div>

    <table>

        <tr>
            <th>Numero du client</th>
            <th>Nom du client</th>
            <th>Plats du client</th>
            <th>Quantite</th>
            <th>A emporter</th>
        </tr>

        <?php
        while ($ligne = $resultat->fetch(PDO::FETCH_NUM)) {
            echo "<tr>";
            foreach ($ligne as $valeur) {
                echo "<td>$valeur</td>";
            }

            echo "</tr>";
        }
        ?>
        <?php
        $resultat->closeCursor(); //liberer la connexion pour permettre a d'autre requete sql de discuter sans probleme
        ?>
    </table>

</body>

</html>