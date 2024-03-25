<!DOCTYPE html>
<html lang="fr">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carte</title>
  <link rel="stylesheet" href="../../../Public/Assets/CSS/bootstrap.css">
  <link rel="stylesheet" href="../../../Public/Assets/CSS/main.css">
  
</head>
<body>

  <?php require_once '../Components/Header.php'; ?>

  <main>
    <div>
        <p>Code d'erreur : <?= $errorCode; ?></p>
        <p>Message d'erreur : <?= htmlspecialchars($errorMessage); ?></p>
    </div>
  </main>

  <?php require_once '../Components/Footer.php'; ?>

</body>
</html>