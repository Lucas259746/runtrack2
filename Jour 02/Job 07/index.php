<?php

$hauteur = 5; // Modifiable

echo "<pre>"; // Préserve les espaces et les retours à la ligne
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
echo "</pre>";
?>