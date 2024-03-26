<?php

namespace App\config\Exception;
use App\Src\Models\ErrorModel;

    //permet de créer des exceptions personnalisées qui peuvent inclure des logiques supplémentaires 
    //on étend la classe de base de Exception
    class RouteurException extends \Exception
    {
        public function __construct($code = 0, $message = "") {

            //Appelle la méthode getErrorMessage de la classe ErrorModel en passant le code d'erreur et un message personnalisé.
            $message = ErrorModel::getErrorMessage($code, $message);
            //Appelle le constructeur de la classe parente (\Exception), en passant le message d'erreur et le code d'erreur.
            // on initialise la classe EXception  avec les détails de notre exception personnalisée.
            parent::__construct($message, $code);
        }
    }