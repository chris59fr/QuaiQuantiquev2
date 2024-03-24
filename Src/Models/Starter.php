<?php
/**
 * Modele représentant une entrée
 */

namespace Src\Models;

use Src\Models\Dish;

class Starter implements Dish
{
  public function __construct(private string $nom_mets, private string $description_mets, private float $prix_mets, private int $id_images, private int $id_categorie)
  {
    $this->nom_mets = $nom_mets;
    $this->description_mets = $description_mets;
    $this->prix_mets = $prix_mets;
  }

  /**
   * Get the value of name
   */
  public function getName(): string
  {
    return $this->nom_mets;
  }

  /**
   * Get the value of description
   */
  public function getDescription(): string
  {
    return $this->description_mets;
  }

  /**
   * Get the value of price
   */
  public function getPrice(): float
  {
    return $this->prix_mets;
  }

  /**
   * Get the value of id_images
   */
  public function getIdImages()
  {
    return $this->id_images;
  }

  /**
   * Get the value of id_categorie
   */
  public function getIdCategorie()
  {
    return $this->id_categorie;
  }


  
  /**
   * Set the value of name
   */
  public function setName(string $nom_mets): self
  {
    $this->nom_mets = $nom_mets;

    return $this;
  }
  /**
   * Set the value of description
   */
  public function setDescription(string $description_mets): self
  {
    $this->description_mets = $description_mets;

    return $this;
  }
  /**
   * Set the value of price
   */
  public function setPrice(float $prix_mets): self
  {
    $this->prix_mets = $prix_mets;

    return $this;
  }
  /**
   * Set the value of id_images
   */
  public function setIdImages(int $id_images): self
  {
    $this->id_images = $id_images;

    return $this;
  }
  /**
   * Set the value of id_categorie
   */
  public function setIdCategorie(int $id_categorie): self
  {
    $this->id_categorie = $id_categorie;

    return $this;
  }
}