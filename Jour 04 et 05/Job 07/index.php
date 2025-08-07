<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maison</title>
    <style>
        pre {
            font-family: monospace;
            line-height: 1.2;
        }
    </style>
</head>
<body>

<form method="POST" action="index.php">
    <label for="largeur">Largeur :</label>
    <input type="text" id="largeur" name="largeur" required><br><br>

    <label for="hauteur">Hauteur :</label>
    <input type="text" id="hauteur" name="hauteur" required><br><br>

    <input type="submit" value="Dessiner la maison">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $largeur = (int) $_POST['largeur'];
    $hauteur = (int) $_POST['hauteur'];

    // Vérifie que la largeur est paire et >= 2
    if ($largeur < 2 || $hauteur < 1) {
        echo "<p>Veuillez entrer une largeur >= 2 et une hauteur >= 1.</p>";
        exit;
    }

    if ($largeur % 2 !== 0) {
        $largeur += 1; // rendre paire
    }

    echo "<pre>";

for ($i = 1; $i <= $hauteur; $i++) {
    // Espaces avant
    echo str_repeat(' ', $hauteur - $i);

    if ($i == 1) {
        echo "/\\";
    } elseif ($i == $hauteur) {
        echo "/" . str_repeat("_", ($i - 1) * 2) . "\\";
    } else {
        echo "/" . str_repeat(' ', ($i - 1) * 2) . "\\";
    }

    echo "<br>"; 
}

    // Dessin du corps
    for ($j = 0; $j < $hauteur; $j++) {
        echo "|";
        echo str_repeat("_", ($i - 2) * 2);
        echo "|";
        echo "<br>";
    }

    echo "</pre>";
}
?>

</body>
</html>