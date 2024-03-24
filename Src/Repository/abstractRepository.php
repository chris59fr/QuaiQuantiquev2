<?php
namespace Src\Repository;

use Config\Repository\Database;

/**
 * Parents des Repos
 */

abstract class AbstractRepository 
{
  /**
   * Connexion BDD
   */
  protected function getDBConnection() 
  {
    $db = Database::getInstance();
    return $db->getConnexion();
  }

}
