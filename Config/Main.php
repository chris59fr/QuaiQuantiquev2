<?php
    namespace App\config;

use App\config\Exception\RouteurException;
use App\Src\Controllers\MainController;




    class Main
    {
        public function start()
        {
            // On récupère l'adresse
            $uri = $_SERVER['REQUEST_URI'];
            //  var_dump($_SERVER);
            // On vérifie si elle n'est pas vide, si elle n'ai pas seulement '/' sinon boucle infini et si elle se termine par un '/' pour eviter PB=>SEO et trailing slash
            if(!empty($uri) && $uri != '/' && $uri[-1] === '/'){
                // Dans ce cas on enlève le /
                $uri = substr($uri, 0, -1);
                // On envoie une redirection permanente
                http_response_code(301);

                // On redirige vers l'URL sans le '/'
                header('Location: '.$uri);
                exit;
            }
            
            //gère les parametres de l'URL après le '?p='
            //on les recupères dans un tableau $params en les séparants avec la méthode explode
            $params = [];         
            $params = explode('/', $_GET['p']);

            // Si au moins 1 paramètre existe
            try {
                if($params[0] != ""){
                    //création du namespace
                    //extrait du tableau $params la premiere valeur qui est le controller met sa lettre en majuscule pour respecter nommage
                    //et on concatene avec controller à la suite pour avoir le namespace complet correspondant à la class 
                    $controller = '\\App\\SRC\\Controllers\\'.ucfirst(array_shift($params)).'Controller';  
                    
                    //on gère les erreurs sur la récupération du controlleur 
                    if (!class_exists($controller)) {
                        throw new RouteurException("Le contrôleur '$controller' n'existe pas.");                
                        
                    }

                    $controller = new $controller();

                    //on récupère le deuxieme paramètre correspondant à la méthode
                    $action = (isset($params[0])) ? array_shift($params) : 'index';
                    
                    // Récupération de la méthode...
                    if (!method_exists($controller, $action)) {
                        throw new RouteurException("La méthode '$action' n'existe pas sur le contrôleur '$controller'.");
                    }
                    $controller = new MainController();
                    $controller->index();

                }
            }catch(RouteurException $e){
                $message = $e->getMessage();
                echo "$message";
            }catch(\Exception $e) {
                $message = "Erreur capturée relative au rooter: " . $e->getMessage() . "\n";
                $message .= "Fichier : " . $e->getFile() . "\n";
                $message .= "Ligne : " . $e->getLine() . "\n\n"; // Deux sauts de ligne pour séparer clairement les entrées
                error_log($message);
                http_response_code(500);
                exit;         
            }
        }
    }

    /*
    penser a creer la classe EXceptionRooter */