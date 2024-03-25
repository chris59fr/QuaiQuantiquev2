<?php
    namespace App;

    class Autoloader
    {
        static function register() {
      
            spl_autoload_register([
                __CLASS__,
                'autoload'
            ]);
        }
       
        static function autoload($class){

//retirons "App"\ 
            $class = str_replace(__NAMESPACE__. '\\','',$class);
            
//nous remplaçons les "\" par des "/" pour obtenir: controleur/action 
            $class = str_replace('\\','/',$class); 

//reste à inclure le dossier "classes" au début et le ".php" à la fin.
            if(file_exists(__DIR__ . '/' . $class . '.php')){
                require __DIR__ . '/' . $class . '.php'; 
            }
        }

    }