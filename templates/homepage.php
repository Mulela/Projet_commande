<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Affichage des commandes</title>
    <link rel="stylesheet" href="assets/css/affichage.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">

            <div class="pt-5">
            <a href="index.php?action=addCommande"><input type="submit" value="Ajouter une commande" class="btn-ajout"></a>

            </div>
                <table class="center col-10 offset-1">
                    <tr>
                        <th>Numero du client</th>
                        <th>Nom du client</th>
                        <th>Plats du client</th>
                        <th>Quantite</th>
                        <th>A emporter</th>
                    </tr>
                    <?php
                    foreach ($plats as $plat) {
                    ?>
                        <tr>
                            <td><?= $plat['numero_client'] ?></td>
                            <td><?= $plat['nom_client'] ?></td>
                            <td><?= $plat['plat'] ?></td>
                            <td><?= $plat['quantite'] ?></td>
                            <td><?= $plat['emporter'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>