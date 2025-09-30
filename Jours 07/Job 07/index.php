<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Transformations de chaîne</title>
</head>
<body>

<form method="post">
    <label for="str">Texte :</label>
    <input type="text" name="str" id="str" required>

    <label for="fonction">Transformation :</label>
    <select name="fonction" id="fonction" required>
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>

    <label for="decalage">Décalage (si César) :</label>
    <input type="number" name="decalage" id="decalage" value="2">

    <button type="submit">Appliquer</button>
</form>

<?php
// Fonction gras : mettre en gras les mots commençant par une majuscule
function gras($str) {
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (ctype_upper(substr($mot, 0, 1))) {
            $mot = "<b>$mot</b>";
        }
    }
    return implode(" ", $mots);
}

// Fonction césar : décaler les lettres (a-z, A-Z)
function cesar($str, $decalage = 2) {
    $resultat = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $car = $str[$i];
        if (ctype_alpha($car)) {
            $ascii = ord($car);
            $is_upper = ctype_upper($car);
            $base = $is_upper ? ord('A') : ord('a');
            $car = chr(($ascii - $base + $decalage) % 26 + $base);
        }
        $resultat .= $car;
    }
    return $resultat;
}

// Fonction plateforme : ajouter un "_" aux mots finissant par "me"
function plateforme($str) {
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (str_ends_with($mot, "me")) {
            $mot .= "_";
        }
    }
    return implode(" ", $mots);
}

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $str = $_POST["str"];
    $fonction = $_POST["fonction"];
    $decalage = isset($_POST["decalage"]) ? (int)$_POST["decalage"] : 2;

    switch ($fonction) {
        case "gras":
            echo "<p>Résultat : " . gras($str) . "</p>";
            break;
        case "cesar":
            echo "<p>Résultat : " . cesar($str, $decalage) . "</p>";
            break;
        case "plateforme":
            echo "<p>Résultat : " . plateforme($str) . "</p>";
            break;
        default:
            echo "<p>Transformation inconnue.</p>";
    }
}
?>

</body>
</html>