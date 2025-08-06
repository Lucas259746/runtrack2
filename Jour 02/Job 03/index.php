<?php
for ($valeur = 0; $valeur <= 100; $valeur++) {
    if ($valeur <= 20) {
        echo "<i>$valeur</i><br>";
    } elseif ($valeur == 42) {
        echo "La Plateforme_<br>";
    } elseif ($valeur >= 25 && $valeur <= 50) {
        echo "<u>$valeur</u><br>";// && = entre 25 et 50
    } else {
        echo "$valeur<br>";
    }
}
?>