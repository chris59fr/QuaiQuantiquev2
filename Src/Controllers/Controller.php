<?php

namespace App\Src\Controllers;

abstract class Controller 
{
        public function render(string $view = 'home', array $donnees = []) {

            // on va extraire les données
            extract($donnees);
            // var_dump($donnees);
            // Après l'extraction, accès à $variableExample comme une variable, sans avoir besoin de référencer le tableau
         
            // on créer le chemin vers la views
            require_once ROOT.'/views/Pages/'.$view.'.php';
    }    
}