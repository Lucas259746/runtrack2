<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>

    <h2>Données reçues via GET</h2>

    <?php
    if (!empty($_GET)) {
        echo "<p>Nombre d'arguments GET : " . count($_GET) . "</p>";

        echo "<ul>";
        foreach ($_GET as $cle => $valeur) {
            echo "<li><strong>" . htmlspecialchars($cle) . "</strong> : " . htmlspecialchars($valeur) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Aucune donnée reçue.</p>";
    }
    ?>

</body>
</html>