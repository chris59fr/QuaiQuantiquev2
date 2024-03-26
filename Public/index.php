<?php
        
        // On définit une constante contenant le dossier racine
        define('ROOT', dirname(__DIR__));
      
        use App\Autoloader;
        use App\config\Main;

        // On importe l'Autoloader
        require_once ROOT.'/Autoloader.php';
        Autoloader::register();

        // On instancie Main
        $app = new Main();

        // On démarre l'application
        $app->start();