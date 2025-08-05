<?php
$chaine_de_caractere = "lucas";
$int = 24;
$bool = true;
$float = 1.5;


echo "<table border='1' cellpadding='10'>";
echo "<thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
     </thead>";

echo "<tbody>";

    echo "<tr>";
        echo "<td>" . gettype($chaine_de_caractere) . "</td>";
            echo "<td>chaine_de_caractere</td>";
        echo "<td>" . $chaine_de_caractere . "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>" . gettype($int) . "</td>";
            echo "<td>int</td>";
        echo "<td>" . $int . "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>" . gettype($bool) . "</td>";
            echo "<td>bool</td>";
        echo "<td>" . $bool . "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>" . gettype($float) . "</td>";
            echo "<td>float</td>";
        echo "<td>" . $float . "</td>";
    echo "</tr>";



echo "</tbody></table>";
?>