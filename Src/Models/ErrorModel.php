<?php
namespace App\Src\Models;

class ErrorModel {

    /**
     *Récupère un message d'erreur basé sur un code d'erreur HTTP fourni 
     *`match` pour sélectionner un message d'erreur prédéfini.
     * Si un message personnalisé fourni il  sera retourné à la place du message par défaut.
     * @param int $code
     * @param string $customMessage : message d'erreur personnalisé optionnel qui, si fourni, 
     * sera retourné à la place du message par défaut associé au code d'erreur
     * @param string  $httpErrorMessage : message d'erreur par défaut 
     * @return string le message personnalisé sinon le message par defaut de la fonction match 
     */
    public static function getErrorMessage(int $code, string $customMessage = ""): string {
        $httpErrorMessage = match ($code) {
            404 => 'La page demandée n’a pas été trouvée.', // si message d erreur sur vs code normal php 8 avec fonction match pas encore reconnu 
            500 => 'Erreur interne du serveur.',
            default => 'Une erreur inattendue est survenue.',
        };
        return $customMessage ?: $httpErrorMessage;
    }
}