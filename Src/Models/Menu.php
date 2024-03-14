<?php

namespace Src\Models;

class MenuModel {

  public function __construct(private string $nom_formule, private string $description_formule, private int $prix_menu)
  {
    $this->nom_formule = $nom_formule;
    $this->description_formule = $description_formule;
    $this->prix_menu = $prix_menu;
  }
  

  /**
   * Get the value of nom_formule
   */
  public function getNomFormule(): string
  {
    return $this->nom_formule;
  }

  /**
   * Set the value of nom_formule
   */
  public function setNomFormule(string $nom_formule): self
  {
    $this->nom_formule = $nom_formule;

    return $this;
  }

  /**
   * Get the value of description_formule
   */
  public function getDescriptionFormule(): string
  {
    return $this->description_formule;
  }

  /**
   * Set the value of description_formule
   */
  public function setDescriptionFormule(string $description_formule): self
  {
    $this->description_formule = $description_formule;

    return $this;
  }

  /**
   * Get the value of prix_menu
   */
  public function getPrixMenu(): int
  {
    return $this->prix_menu;
  }

  /**
   * Set the value of prix_menu
   */
  public function setPrixMenu(int $prix_menu): self
  {
    $this->prix_menu = $prix_menu;

    return $this;
  }
}