<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = "aeiouyAEIOUY";

for ($texte = 0; $texte < strlen($str); $texte++) {
    if (strpos($voyelles, $str[$texte]) !== false) {
        echo $str[$texte];
    }
}
?>