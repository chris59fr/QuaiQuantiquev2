<?php
/**
 * cette classe sera responsable de la gestion des requettes URL et logique métier aux entrée
 */

namespace Src\Controllers;

use Src\Factories\StarterFactory;
use Src\Repository\StarterRepository;


class StarterController
{
  private  $starterRepo;
  private  $starterFacto;

  public function __construct(StarterFactory $starterFacto, StarterRepository $starterRepo) 
  {
    $this->starterFacto = $starterFacto;
    $this->starterRepo = $starterRepo;
  }

  public function createStarter($nom_mets, $description_mets, $prix_mets, $id_images, $id_categorie) {
    // Créer une nouvelle instance de Starter en utilisant la StarterFactory
    $starter = $this->starterFacto->createStarter($nom_mets, $description_mets, $prix_mets, $id_images, $id_categorie);

    //save le nouveau starter
    $this->starterRepo->saveStarter($starter);

    //return le nouveau starter
    return $starter;
}

  public function categorie1() 
  {
    $starters = $this->starterRepo->getStartersByID();
    return $starters;
    
    include '../Views/Pages/Carte.php';
  }
}