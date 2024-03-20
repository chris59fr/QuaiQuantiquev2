<?php

use Src\Controllers\ImageController;

require_once (__DIR__ . '../../../../autoloader.php');

$ImgControll = new ImageController;             // utiliser limage controle , instancier une nouveau nom de la class ImageControle et ensuite on n'est aller chercher la fonction SHOWALLID
$ids = $ImgControll->showAllId();


?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie</title>
    <link rel="stylesheet" href="../../../Public/Assets/CSS/bootstrap.css">
    <link rel="stylesheet" href="../../../Public/Assets/CSS/main.css">

</head>

<body>

    <?php require_once '../Components/Header.php'; ?>

    <main>

        <div class="container-fluid ">
            <div class="menuGalerie">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Entrée</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Plats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fromages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Desserts</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="picture col-md-12">
                    <?php foreach($ids as $id): ?>
                        <span><?php echo $id['id_images']; ?></span>
                    <?php endforeach; ?>
                    <img src="<?php echo '.$image->getChemin().'; ?> " alt=" ' . $image->getNom() . ' class=" img-fluid">
                    <img src="/QuaiquantiqueV2/QuaiQuantiquev2/Public/Uploads/CARTE/Entrées/GASPACHO DE CONCOMBRE.webp" class="img-fluid">
                    <img src="/QuaiquantiqueV2/QuaiQuantiquev2/Public/Uploads/CARTE/Plats/FONDU SAVOYARDE.webp" class="img-fluid">
                    <img src="/QuaiquantiqueV2/QuaiQuantiquev2/Public/Uploads/Cuisinier/cuisinier_3.webp" class="img-fluid">
                    <img src="/QuaiquantiqueV2/QuaiQuantiquev2/Public/Uploads/CARTE/Desserts/DESSERTS FRANCAIS/PAVLOVA.webp " class="img-fluid">
                </div>
            </div>
        </div>

    </main>

    <?php require_once '../Components/Footer.php'; ?>

    <script src="../../../Public/Assets/JS/bootstrap.bundle.min.js"></script>
    
</body>

</html>