<?php
    namespace App\Src\Controllers;
    /**
     * Le contrôller par défaut
     */
    class MainController
    {   
        /**
         * fonction qui gère l'affichage de la page d'accueil cette fonction est un test on peut la remplacer par fonction home et inclure la page d accueil
         *
         * @return void
         */
        public function home() 
        {
            require_once ROOT. "/Src/Views/Pages/Home.php";
        }

    }