<?php
$str = "Les choses que l'on possede finissent par nous posseder.";
echo "$str<br>";
// "strlen($str) - 1" donne l’index du dernier caractère
// La boucle descend de cet index jusqu’à 0 "($i--)"
for ($texte = strlen($str) - 1; $texte >= 0; $texte--) {// fonction pour parcourir la chaîne à l'envers
    echo $str[$texte];
}
?>