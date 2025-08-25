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

<form method="POST" action="test perso.php">
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
    $hauteur>$largeur/2?$hauteurToit=intval($largeur/2) :$hauteurToit=$hauteur;


    echo "<pre>";



   for ($i = 0; $i <= $largeur; $i++) {
    // Espaces avant
        echo str_repeat(' ', $largeur- $i);
        // Dessin du toit
            echo "/" . str_repeat("-",$i*2) . "\\";
            echo "<br>";  
   
   
   
    }



    // Dessin du corps
    for ($j = 0; $j < $hauteur; $j++) {
        echo "|";
        echo str_repeat("_", $largeur * 2);
        echo "|";
        echo "<br>";
    }


    echo "</pre>";
}
?>

</body>
</html>