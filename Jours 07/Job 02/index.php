<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bonjour ou Bonsoir</title>
</head>
<body>

<form method="post">
    <button type="submit" name="saluer" value="1">Dire Bonjour</button>
    <button type="submit" name="reset" value="1">Réinitialiser</button>
</form>

<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Si l'utilisateur a cliqué sur "Réinitialiser"
if (isset($_POST['reset'])) {
    bonjour(false); // Réinitialisation → Bonsoir
}
// Sinon, s'il a cliqué sur "Dire Bonjour"
elseif (isset($_POST['saluer'])) {
    bonjour(true); // Bouton "Dire Bonjour" → Bonjour
}
// Sinon (chargement initial de la page)
else {
    bonjour(false); // Par défaut → Bonsoir
}
?>

</body>
</html>