<?php
for ($valeur = 0; $valeur <= 100; $valeur++) {
    if ($valeur % 15 == 0) {
        echo "FizzBuzz<br>";// % 15 = multiple de 15
    } elseif ($valeur % 3 == 0) {
        echo "Fizz<br>";
    } elseif ($valeur % 5 == 0) {
        echo "Buzz<br>";
    } else {
        echo "$valeur<br>";
    }
}
?>