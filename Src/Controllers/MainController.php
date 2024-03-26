<?php
    namespace App\Src\Controllers;
    /**
     * Le controlleur par défaut
     */
    class MainController
    {   
        /**
         * fonction qui gère l'affichage de la page d'accueil => valeur par défaut si pas de paramètres passés.
         *
         * @return void
         */
        public function home() 
        {
            require_once ROOT. "/Src/Views/Pages/Home.php";
        }

    }