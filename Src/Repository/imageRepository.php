<?php

namespace Src\Repository;
use PDO;
use PDOException;
use Src\Repository\AbstractRepository;


class ImgTest extends AbstractRepository // dans cette class la requete SQL entre les BDD , (heritage)
{
    // récupération de toute les ID IMAGE 
    public function selectAllId(){
        // Dans chaque fonction tu doit utiliser des Try et des CATCH obligatoire .
        try { 
            // connexion base de donnée
            $connexion = $this->getDBConnection();
            // prepare la requète SQL
            $requetes = $connexion->prepare("SELECT `id_images` FROM `images` ");
            // execute la requetes
            $requetes->execute();

            // fetchAll ou fetch 
            return $requetes->fetch(PDO::FETCH_ASSOC);


        } catch(PDOException $error){
            echo "erreur " . $error->getMessage();  

        }
    }
}