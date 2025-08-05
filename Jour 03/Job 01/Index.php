<?php
// tableau des valeurs
$valeur = [200, 204, 173, 98, 171, 404, 459];

// foreach ($valeur as $nombre) = parcour des valeurs
foreach ($valeur as $TestPair) {
    // verification si paire
    if ($TestPair % 2 == 0) {
        echo "$TestPair est paire<br>";
    } else {
        echo "$TestPair est impaire<br>";
    }
}
?>