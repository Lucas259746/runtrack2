<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bonjour ou Bonsoir</title>
</head>
<body>

<form method="post">
    <button type="submit" name="jour" value="1">jour</button>
    <button type="submit" name="nuit" value="1">nuit</button>
</form>

<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Si l'utilisateur a cliqué sur "nuit"
if (isset($_POST['nuit'])) {
    bonjour(false); // nuit → Bonsoir
}
// Sinon, s'il a cliqué sur "jour"
elseif (isset($_POST['jour'])) {
    bonjour(true); // Bouton "jour" → Bonjour
}
// Sinon (chargement initial de la page)
else {
    bonjour(false); // Par défaut → Bonsoir
}
?>

</body>
</html>