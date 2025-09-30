<?php
function calcule($a, $operation, $b) {
    switch($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Erreur : division par zéro.";
            }
        case '%':
            if ($b != 0) {
                return $a % $b;
            } else {
                return "Erreur : division par zéro.";
            }
        default:
            return "Erreur : opération inconnue.";
    }
}

// Exemple d'utilisation :
echo calcule(10, '+', 5);  // Affiche 15
?>