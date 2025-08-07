<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>

<!-- Formulaire de connexion -->
<form method="POST" action="index.php">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Se connecter">
</form>

<?php

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Vérifie les identifiants
    if ($username == "John" && $password == "Rambo") {
        echo "<p>C’est pas ma guerre</p>";
    } else {
        echo "<p>Votre pire cauchemar</p>";
    }
   
?>

</body>
</html>