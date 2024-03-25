<?php
namespace App\Models;

class ErrorModel {
    public static function getErrorMessage($code, $customMessage = "") {
        $httpErrorMessage = match ($code) {
            404 => 'La page demandée n’a pas été trouvée.', // si message d erreur sur vs code normal php 8 avec fonction match pas encore reconnu 
            500 => 'Erreur interne du serveur.',
            default => 'Une erreur inattendue est survenue.',
        };
        return $customMessage ?: $httpErrorMessage;
    }
}