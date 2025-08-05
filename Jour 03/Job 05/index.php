<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

echo "$str<br>";
// Tableau des voyelles
$voyelles = "aeiouyAEIOUY";

// Initialisation du dictionnaire
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    $caractere = $str[$i];

    // Vérifie si c'est une lettre alphabétique
    if (ctype_alpha($caractere)) { // ctype_alpha($caractere) : Vérifie si le caractère est une lettre alphabétique (ignore les espaces, apostrophes, etc.)
        if (strpos($voyelles, $caractere) !== false) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}
?>

<!-- Affichage du tableau HTML -->
<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $dic["voyelles"] ?></td>
            <td><?= $dic["consonnes"] ?></td>
        </tr>
    </tbody>
</table>