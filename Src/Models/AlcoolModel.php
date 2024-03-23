<?php

namespace App\Models;

use PDO;

class AlcoolModel {
    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    /**
     * Récupération des alcools de la base de données
     *
     * @return array
     */
    public function findAll() {
        $stmt = $this->pdo->query('SELECT * FROM alcool'); //Statement
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    /**
     * Trouver l'alcool par son ID
     *
     * @param int $id 
     * @return array|false Un tableau associatif contenant l'alcool, ou false si aucun alcool n'est trouvé
     */
    public function findById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM alcool WHERE id = :id');
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Méthode pour créer un nouvel alcool
     *
     * @param array $data
     * @return array|false
     */
    public function create($data) {
        try {
            $stmt = $this->pdo->prepare('INSERT INTO alcool (nom, type, volume, prix) VALUES (:nom, :type, :volume, :prix)');
            $success = $stmt->execute($data);

            if ($success) {
                return $this->pdo->lastInsertId(); // Récupère et retourne l'ID de l'entrée insérée
            }
            return false; // Retourne false si l'exécution de la requête a échoué
        } catch (\PDOException $error) {
            error_log("Erreur PDO lors de la création d'un nouvel alcool: " . $error->getMessage());
            return false;
        }
    }

    /**
     * Méthode pour mettre à jour un alcool existant par son id 
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update($id, $data) {
        try {
            $data['id'] = $id;
            $stmt = $this->pdo->prepare('UPDATE alcool SET nom = :nom, type = :type, volume = :volume, prix = :prix WHERE id = :id');
            $success = $stmt->execute($data);
    
            return $success;
        } catch (\PDOException $error) {
            error_log("Erreur PDO lors de la mise à jour d'un nouvel alcool: " . $error->getMessage());
            return false;
        }
    }

    /**
     * Méthode pour supprimer un alcool de la base de données
     *
     * @param int $id
     * @return bool Retourne true si la suppression a réussi,
     */
    public function delete($id) {
        try {
            $stmt = $this->pdo->prepare('DELETE FROM alcool WHERE id = :id');
            $success = $stmt->execute([':id' => $id]);
    
            return $success;
        } catch (\PDOException $error) {
            error_log("Erreur lors de la suppression d'un alcool: " . $error->getMessage());
            return false;
        }
    }
}
