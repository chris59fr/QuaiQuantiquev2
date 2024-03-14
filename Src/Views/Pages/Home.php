<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="../../../Public/Assets/CSS/bootstrap.css">
  <link rel="stylesheet" href="../../../Scss/main.css">
</head>

<body>

  <?php require_once '../Components/Header.php'; ?>

  <main class="container-fluid mainHome">

    <div class="row">

      <section class="cover col-md-12 p-0">

        <img class="coverLogo" src="../../../Public/Assets/Images/Logo/LogoOK.svg" alt="">

        <img class="coverImage" src="../../../Public/Uploads/Restaurant/image_luxe_4.webp" alt="">
        <button class="btn btn-warning btnCover">reservez</button>

      </section>


      <section class="cuisineAm col-md-12">
        <div class="row">

          <div class="cuisineTexte col-sm-5 order-1 order-sm-2 p-3">

            <p>"Entrez dans l'univers du Chef Arnaud Michant et sa passion pour les produits de la Savoie.
              Découvrez comment il a crée le Quai Quantique, comme un hommage à la région, en mettant en avant les saveurs gourmandes et les savoir-faire locaux.
              Quand les plaisir des yeux rencontre celui des papilles, la magie opère."</p>

          </div>
          <img class="arnaudMichant col-sm-5 order-2 order-sm-1" src="../../../Public/Uploads/Cuisinier/cuisinier_1.webp" alt="Monsieur Michant dans la cuisine">
          <img class="signatureOr col-sm-2 " src="../../../Public/Assets/Images/Logo/SignatureSize3.svg" alt="Monsieur Michant dans la cuisine">

        </div>
      </section>

      <section class="carteMenu col-md-12">
        <div class="row">
          <div class="carteHome col-md-6">
            <div class="row">
              <div class="col-12 titreCarte">
                <h2>La Carte</h2>
                <p>Découvrir le menu</p>
              </div>
              <div class="col-12 textCarte">
                <p>Aux manettes du restaurant <em>QUAI QUANTIQUE</em>, Arnaud michant a conçus une cuisine généreuse et sans artifiche.
                  Découvrez notre carte varié entèrement élaborées à partir de produits venant de nos producteur locaux dans un esprit de convivialité. <br>
                  Nous vous assurans toute l'application des normes sanitaires pour votre sécurité.</p>
              </div>
              <div class="col-12">
                <button class="btn btn-warning btnCarte">carte</button>

              </div>
              <img class="carteTartiflette col-12 p-0" src="../../../Public/Uploads/CARTE/Plats/TARTIFLETTE.webp" alt="">

            </div>
          </div>
          <div class="menuHome col-md-6">
            <div class="titreMenu">
              <h2>Les Menus</h2>
            </div>
            <div> 
              <?php foreach($menus as $menu):?>
              <div class="texteFormule ">
                <span class="formule ">Formule</span>
                <span class="formuleService"><?php echo $menu['nom_formules']; ?></span>
                <span class="prixMenu"><?php echo $menu['prix_menu'];?> €</span>
              </div>
              <div class="texteMenu">
                <span><?php echo $menu['description_formule'];?></span>
                
              </div>
              <?php endforeach;?>
              
            </div>
            <img class="signMenu" src="../../../Public/Assets/Images/Logo/SignatureSize3.svg" alt="">

          </div>
        </div>
      </section>

      <section class="galerieHome col-md-12">
        <h2>Galerie</h2>
        <div class="row card-group">
          <div class="card">

          </div>
          <div class="card">

          </div>
          <div class="card">

          </div>
          <div class="card">

          </div>
          <div class="card">

          </div>
        </div>
        <button class="btn btn-warning btnReversez">reservez</button>
      </section>


      <section class="immersionHome col-md-12">
        <div class="row">
          <div class="col-md-6">
            <h2>Immersion</h2>
            <p>Nichée au coeur des Alpes français, Chambéry évoque l'élégance et l'histoire.</p>
            <p>Connue pour ses ruelles pavées, son château médiéval et son ambiance chaleureuse, cette ville offre un mélange parfait entre tradition et modernité,
              avec ses marchés animés et ses vues panoramique sur les montagnes environnantes.</p>
            <p>Proche de la majestueuse Savoir, Chambéry tisse un lien intime entre passé et la nature, offrant une expérience ou le charme alpin rencontre l'histoire.</p>
            <button class="btn btn-warning btnImmersion">en savoir plus</button>
          </div>
          <div class="imgNature col-md-6">
            <img src="../../../Public/Uploads/Nature/montagne suisse.webp" alt="">
          </div>
        </div>

      </section>


      <section class="avisHome col-md-12">
        <h2>Avis</h2>

        <button class="btn btn-warning btnAvisHome">un avis ?</button>
      </section>

    </div>


  </main>

  <?php require_once '../Components/Footer.php'; ?>

  <script src="../../../Public/Assets/JS/bootstrap.bundle.min.js"></script>
</body>

</html>