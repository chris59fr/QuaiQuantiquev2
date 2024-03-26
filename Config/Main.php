<?php
    namespace App\config;

use App\config\Exception\RouteurException;

use App\Src\Controllers\MainController;
use App\Src\Factories\ControllerFactory;

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
                    $controllerValue = array_shift($params);//on capture le nom du controleur
                    //on recherche la classe et si elle existe on instancie un nouvelle objet de cette classe
                    $controller =ControllerFactory::CreateControllerRouteur($controllerValue);

                    //on récupère le deuxieme paramètre correspondant à la méthode
                    $action = (isset($params[0])) ? array_shift($params) : 'home';
                    
                    // Récupération de la méthode...
                    if (!method_exists($controller, $action)) {
                        throw new RouteurException(404);
                    }
                    //permet d'ajouter egalement si d'autres parametres sont passé dans l url 
                    (isset($params[0])) ? call_user_func_array([$controller,$action], $params) : $controller->$action();
                }else{
                    $controlerValue = 'main';
                    $controller = ControllerFactory::CreateControllerRouteur($controlerValue);
                    $controller->home();
                }
                
            }catch(RouteurException $e){
                http_response_code($e->getCode());
                $errorMessage = $e->getMessage();
                $errorCode = $e->getCode();
                require_once ROOT."/Src/views/Pages/error.php";
            }catch(\Exception $e) {
                $message = "Erreur capturée relative au rooter: " . $e->getMessage() . "\n";
                $message .= "Fichier : " . $e->getFile() . "\n";
                $message .= "Ligne : " . $e->getLine() . "\n\n"; 
                error_log($message);
                http_response_code(500);
                exit;         
            }
        }
    }