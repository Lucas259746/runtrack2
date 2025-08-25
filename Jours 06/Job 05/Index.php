<?php
  // On récupère le style sélectionné, ou "style1" par défaut
  $style = isset($_POST['style']) ? $_POST['style'] : 'style1';

  // Liste des styles autorisés (sécurité)
  $stylesAutorises = ['style1', 'style2', 'style3'];

  // Si le style sélectionné n'est pas dans la liste, on remet style1
  if (!in_array($style, $stylesAutorises)) {
    $style = 'style1';
  }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Changer le style en PHP</title>
  <!-- On insère dynamiquement la bonne feuille de style -->
  <link rel="stylesheet" href="<?php echo $style; ?>.css">
</head>
<body>

  <form method="POST" action="">
    <label for="style">Choisissez un style :</label>
    <select name="style" id="style">
      <option value="style1" <?php if($style == 'style1') echo 'selected'; ?>>Style 1</option>
      <option value="style2" <?php if($style == 'style2') echo 'selected'; ?>>Style 2</option>
      <option value="style3" <?php if($style == 'style3') echo 'selected'; ?>>Style 3</option>
    </select>
    <button type="submit">Appliquer le style</button>
  </form>

</body>
</html>
