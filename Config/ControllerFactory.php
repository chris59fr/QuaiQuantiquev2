<?php
namespace App\Config;

use App\config\Exception\RouteurException;

    class ControllerFactory 
    {   

        /**
        * Crée une instance d'un contrôleur basé sur le nom fourni.
        *
        * Cette méthode construit le nom complet de la classe de contrôleur avec l'espace de noms,
        * vérifie si cette classe existe, et si oui, instancie et retourne un objet de cette classe.
        *
        * @param string $controllerName Le nom du contrôleur à instancier, qui correpond à la première valeur du tableau et que l'on retire.
        * 
        * @return object L'instance du contrôleur demandé.
        * 
        * @throws RouteurException Si la classe du contrôleur n'existe pas.
        */
        public static function CreateController(string $controllerName): object{
            $className = "\\App\\SRC\\Controllers\\". ucfirst($controllerName) . "controller";
            if (!class_exists($className)) {
                throw new RouteurException("Le contrôleur $className n'existe pas.");
            }
            return new $className();
        }
    }