<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
echo "$str<br>";
// La fonction "strlen()" calcule la longueur de la chaîne $str.
$len = strlen($str);

if ($len > 1) {
    // On crée la nouvelle chaîne en prenant la sous-chaîne à partir du 2e caractère
    // puis on ajoute le premier caractère à la fin
    $strDecale = substr($str, 1) . $str[0];
} else {
    // Si la chaîne ne contient qu'un seul caractère ou est vide, on la garde telle quelle
    $strDecale = $str;
}

echo $strDecale;
?>