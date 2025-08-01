<?php
// Déclaration de variables
$nom = "Jean";
$age = 30;
$estEtudiant = true;
$notes = [15, 12, 17];

// Stockage des variables dans un tableau associatif
$variables = [
    "nom" => $nom,
    "age" => $age,
    "estEtudiant" => $estEtudiant,
    "notes" => $notes
];

// Début du tableau HTML
echo "<table border='1' cellpadding='10'>";
echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";
echo "<tbody>";

// Boucle pour générer chaque ligne
foreach ($variables as $nomVar => $valeur) {
    echo "<tr>";
    echo "<td>" . gettype($valeur) . "</td>";
    echo "<td>" . $nomVar . "</td>";
    
    // Conversion des tableaux en chaîne lisible
    if (is_array($valeur)) {
        echo "<td>" . implode(", ", $valeur) . "</td>";
    } elseif (is_bool($valeur)) {
        echo "<td>" . ($valeur ? "true" : "false") . "</td>";
    } else {
        echo "<td>" . $valeur . "</td>";
    }
    echo "</tr>";
}

echo "</tbody></table>";
?>