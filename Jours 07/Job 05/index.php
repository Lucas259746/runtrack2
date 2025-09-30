<?php
function occurrences($str, $char) {
    // Vérifie que $char est bien un seul caractère
    if (strlen($char) !== 1) {
        return false; // ou lancer une exception
    }

    // Utilise substr_count pour compter les occurrences
    return substr_count($str, $char);
}

// Exemple d'utilisation
$str = "Bonjour";
$char = "o";
echo "Le caractère '$char' apparaît " . occurrences($str, $char) . " fois dans la chaîne '$str'.";
?>