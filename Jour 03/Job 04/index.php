<?php

$str = "Dans l'espace, personne ne vous entend crier";

echo "$str<br>";

$compteur = 0;
// isset($str[$texte]) vérifie qu’un caractère existe à la position $texte
for ($texte = 0; isset($str[$texte]); $texte++) {
    $compteur++;
}

echo "Le nombre de caractères est : " . $compteur;
?>