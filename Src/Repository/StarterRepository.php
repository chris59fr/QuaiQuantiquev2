<?php
/**
 * Cette classe sera respinsable de l'interaction avec la bdd pour les entrée
 */

namespace Src\Repository;

use PDO;
use PDOException;
use Src\Models\Starter;

class StarterRepository extends AbstractRepository
{ 

  public function getStartersByID(): array {

    try {

      $connexion = $this->getDBConnection();
      $requetes = $connexion->prepare('SELECT * FROM `mets` WHERE id_categorie = 3');
      $requetes->execute();

      return $requetes->fetchAll(PDO::FETCH_ASSOC);

    } catch(PDOException $error) {

      echo 'ERREUR' . $error->getMessage();

    }
  }

  public function saveStarter(Starter $starter)
  {
    try {

      $connexion = $this->getDBConnection();
      $requetes = $connexion->prepare('INSERT INTO `mets` (`nom_mets`,`description_mets`,`prix_mets`,`id_images`,`id_categorie`) VALUES (?, ?, ?)'); 
      $requetes->execute();

      return $requetes->fetchAll(PDO::FETCH_ASSOC);

    } catch(PDOException $error) {

      echo 'ERREUR' . $error->getMessage();

    }
  }

}