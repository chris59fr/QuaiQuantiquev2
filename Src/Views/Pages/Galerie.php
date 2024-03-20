<?php

class Image {
    public $nom;  // Le nom de l'image
    public $chemin; // le chemin vers l'image

// Constructeur pour initialiser les valeurs du nom et du chemin de l'image
    public function __construct($nom, $chemin){
        $this->nom = $nom;
        $this->chemin = $chemin ;

    }
    
// Getter pour récupérer le nom de l'image
    public function getNom(){
        return $this->nom;
    }

// setter pour definir le nom de l'image
    public function setNom($nom) {
        $this->nom =$nom;

    }
}


class ImageGalery {
    private $images =[]; // Tbaleau pour stocker les objets Image

}

// Fonction pour afficher la
foreach ($this->images as $image) {
    // Génération de balises img avec le nom comme attribut alt et le chemin comme attribut src
    $output .= '<img src="' . $image->getChemin() . '" alt="' . $image->getNom() . '" class="img-fluid">';
}

// Paramètres de connexion à la base de données
$dsn = 'mysql:host=adresse_du_serveur;dbname=nom_de_la_base_de_donnees';
$username = 'nom_utilisateur';
$password = '';


    
        // Connexion à la base de données
$db = new PDO($dsn, $username, $password); 

        
        // Préparation de la requête SQL
$query = "SELECT nom, chemin FROM images"; // Supposons que votre table s'appelle 'images'
$statement = $db->prepare($query);
    

        // Exécution de la requête
if ($statement->execute()) {
$results = $statement->fetchAll(PDO::FETCH_ASSOC);        // Récupération des résultats


}


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../Scss/main.min.css">
    <script src="https://kit.fontawesome.com/d3e5723829.js" crossorigin="anonymous"></script>
    <title>QuaiQantique</title>
</head>


<?php  require_once '../Components/Header.php';
?>

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


<main class="container-fluid">
    <div class= "row">
        <div class="picture col-md-12">
                <img src="<?php echo '.$image->getChemin().';?> " alt=" ' . $image->getNom() . ' class="img-fluid">
                <img src="/QuaiquantiqueV2/QuaiQuantiquev2/Public/Uploads/CARTE/Entrées/GASPACHO DE CONCOMBRE.webp" class="img-fluid">
                <img src="/QuaiquantiqueV2/QuaiQuantiquev2/Public/Uploads/CARTE/Plats/FONDU SAVOYARDE.webp" class="img-fluid">
                <img src="/QuaiquantiqueV2/QuaiQuantiquev2/Public/Uploads/Cuisinier/cuisinier_3.webp" class="img-fluid">
                <img src="/QuaiquantiqueV2/QuaiQuantiquev2/Public/Uploads/CARTE/Desserts/DESSERTS FRANCAIS/PAVLOVA.webp " class="img-fluid">
        </div>


</main>

<?php
    require_once '../Components/Footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"crossorigin="anonymous"></script>
</body>

</html>