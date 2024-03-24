<?php
namespace Src\Repository;

use Src\Repository\abstractRepository;
use PDO;
use PDOException;

class MenuRepository extends abstractRepository {
  
  /**
   * Récupération de tous les menus de la BDD
   */
  public function getAll() {
    try {
      $requetes = $this->getDBConnection()->prepare("SELECT * FROM `menu`");
      $requetes->execute();

      return $requetes->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $error)
    {
      echo 'Erreur de récupération :' . $error->getMessage();
    }
    
  }
}

