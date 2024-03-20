<?php
//Insert de donner dans le footer.php(attention)
//
require_once '../../Config/Db.php';

class Footer 
{
  private $db;

  public function __construct(Db $db) {
    $this -> db = $db;
  }

  public function afficherHoraires() {
    $time = $this->db->getHoraires();
    //verifie si pas vide
    if(empty($horaires)) {
      echo 'aucun horaire actuellement';

    }else {
      echo 'ul';
      foreach($horaires as $ligne) {
        echo "<li>" . htmlspecialchars($ligne['jours']) . " : " . htmlspecialchars($ligne['horaire']) . "</li>";

      }
    }
  }
}
