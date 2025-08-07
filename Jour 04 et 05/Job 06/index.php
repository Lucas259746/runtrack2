<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test de Parité</title>
</head>
<body>

<!-- Formulaire pour tester si un nombre est pair ou impair -->
<form method="GET" action="index.php">
    <label for="number">Nombre :</label>
    <input type="text" id="number" name="number" required><br><br>

    <input type="submit" value="Vérifier">
</form>

<?php
// Vérifie si un nombre a été soumis
if (isset($_GET['number'])) {
    $valeur = $_GET['number'];


    if (is_numeric($valeur)) {  // Vérifie si c'est bien un nombre
        if ($valeur % 2 == 0) { // verifie si le nombre est pair ou impair
           
            echo "$valeur est pair<br>"; // Affiche le résultat
        } else {
            echo "$valeur est impair<br>";// Affiche le résultat
        }
    } else {
        echo "Veuillez entrer un nombre valide.";
    }
}
?>

</body>
</html>