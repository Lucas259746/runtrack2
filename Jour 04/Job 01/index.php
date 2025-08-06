<!DOCTYPE html>
<html>
<head>
    <title>Test $_GET</title>
</head>
<body>

    <h2>Formulaire GET</h2>
    <form method="get" action="index.php">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <label for="email">Email :</label>
        <input type="text" name="email" id="email"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    // Partie 2 : Affichage du nombre d'arguments GET
    if (!empty($_GET)) {
        $nb_arguments = count($_GET);
        echo "<p>Nombre d'arguments passés en GET : <strong>$nb_arguments</strong></p>";
    }
    ?>

</body>
</html>