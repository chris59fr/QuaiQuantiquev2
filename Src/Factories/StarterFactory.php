<?php
/**
 * Ici responsable de la creation d'instance de l'objet Starter
 */

namespace Src\Factories;

use Src\Models\Starter;


class StarterFactory
{
  public function createStarter($nom_mets, $description_met, $prix_mets, $id_images, $id_categorie) {

    return new Starter($nom_mets, $description_met, $prix_mets, $id_images, $id_categorie);
  }
}