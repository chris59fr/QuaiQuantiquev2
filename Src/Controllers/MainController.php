<?php
    namespace App\Src\Controllers;
    /**
     * Le contrôller par défaut
     */
    class MainController
    {   
        /**
         * fonction qui gère l'affichage de la page d'accueil
         *
         * @return void
         */
        public function index()
        {
            echo 'test de fonctionnement du controller le routeur fonctionne correctement '. '<br> '.' ceci est la fonction "index" dans "MainController"';
        }
    }