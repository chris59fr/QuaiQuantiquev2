<?php

namespace Src\Models;  // defini le chemin de ma class models 

class ImageModel 
{
    protected $name_images; // Le name de l'image en protection
    protected $chemin_images; // le chemin vers l'image

    // Constructeur pour initialiser les valeurs du name et du chemin de l'image
    public function __construct(string $name_images, string $chemin_images)   // les type et de string

    {
        $this->name_images = $name_images;
        $this->chemin_images = $chemin_images ;
    }

    // Getter pour récupérer le name de l'image
    public function getName(): string 
    {
        return $this->name_images;
    }

    // setter/modified  le name de l'image
    public function setName(string $name_images): void  // void retourne NULL
    {
        $this->name_images = $name_images;
    }


    // Getter pour récupérer le name de l'image
    public function getChemin(): string
    {
        return $this->chemin_images;
    }

    // setter/modifier le name de l'image
    public function setChemin(string $chemin_images): void
    {
        $this->chemin_images = $chemin_images;
    }
}
