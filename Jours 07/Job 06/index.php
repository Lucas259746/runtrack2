<?php
function leetSpeak($str) {
    // Tableau de correspondance entre les lettres et les caractères leet
    $leet = [
        'A' => '4',
        'B' => '8',
        'E' => '3',
        'G' => '6',
        'L' => '1',
        'S' => '5',
        'T' => '7'
    ];

    // Remplacer les lettres (majuscules et minuscules) par leur équivalent leet
    $str = str_ireplace(array_keys($leet), array_values($leet), $str);

    return $str;
}

// Exemple d'utilisation
$phrase = "j'aime bien la pizza !";
echo leetSpeak($phrase);
?>