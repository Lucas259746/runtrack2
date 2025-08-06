<!DOCTYPE html>
<html>
<head>
    <title>Afficher $_POST dans un tableau</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

    <h2>Formulaire POST</h2>
    <form method="post" action="">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>

        <label for="email">Email :</label>
        <input type="text" id="email" name="email"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (!empty($_POST)) {
        echo "<h3>Arguments passés en POST :</h3>";
        echo "<table>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";

        // Parcours du tableau $_POST
        foreach ($_POST as $argument => $valeur) {
            // Sécurité : htmlspecialchars pour éviter injection HTML
            $arg = htmlspecialchars($argument);
            $val = htmlspecialchars($valeur);

            echo "<tr><td>$arg</td><td>$val</td></tr>";
        }

        echo "</table>";
    }
    ?>

</body>
</html>