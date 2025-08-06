<!DOCTYPE html>
<html>
<head>
    <title>Test $_post</title>
</head>
<body>

    <h2>Formulaire POST</h2>
    <form method="POST" action="">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <label for="email">Email :</label>
        <input type="text" name="email" id="email"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    // Partie 2 : Affichage du nombre d'arguments post
    if (!empty($_POST)) {
        $nb_arguments = count($_POST);
        echo "<p>Nombre d'arguments passés en post : <strong>$nb_arguments</strong></p>";
    }
    ?>

</body>
</html>