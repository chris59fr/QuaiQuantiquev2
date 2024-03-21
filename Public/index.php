<?php
        
        // On définit une constante contenant le dossier racine
        define('ROOT', dirname(__DIR__));
      
        use App\Autoloader;
        use App\Core\Main;

        // On importe l'Autoloader
        require_once ROOT.'/Autoloader.php';
        Autoloader::register();