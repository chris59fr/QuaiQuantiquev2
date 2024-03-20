<?php

namespace  Src\Repository; 

use Config\Repository\Database;  // je vien de chercher la class database qui ce trouve dans la DB.php 

abstract class AbstractRepository 
{   // connexionn de bdd

    protected function getDBConnection()            // methode dans la class abstract ...
    {
        $db = Database::getInstance();          // ici instanciation de la class DATABASE (via le use que j'ai inséré au dessus, et qui ira instancier tou ce se trouve dans la class database)
        return $db->getConnexion();         // comme instanciation sur $db je peut utilisé la fonction getConnection qui se trouve dans la class DATABASE qui se touve dans ficher DB.PHP
    }
}