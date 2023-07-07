<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/commande.css">
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
                    <option value="Pizza">Pizza</option>
                    <option value="Poulet">poulet</option>
                    <option value="pain au lait">pain au lait</option>
                    <option value="humburger">humburger</option>
                    <option value="shawarma au poulet">shawarma au poulet</option>
                    <option value="shawarma a la viande">shawarma à la viande</option>
                    <option value="Poulet Mayo">Poulet Mayo</option>
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
            <a href="index.php"><input type="button" value="Voir commande"></a>
        </form>

</body>

</html>