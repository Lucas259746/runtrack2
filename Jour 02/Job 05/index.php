<?php
function estPremier($nombre) {
    for ($valeur = 2; $valeur <= sqrt($nombre); $valeur++) {
        if ($nombre % $valeur == 0) {
            return false;
        }
    }
    return true;
}
for ($valeur = 2; $valeur<= 1000; $valeur++) {
    if (estPremier($valeur)) {
        echo $valeur . "<br />";
    }
}
?>