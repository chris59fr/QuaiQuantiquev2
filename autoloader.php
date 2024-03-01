<?php

require_once (__DIR__ . '/Config/Db.php');

require_once (__DIR__ . '/Src/Controllers/RoleController.php');
require_once (__DIR__ . '/Src/Models/Role.php');
require_once (__DIR__ . '/Src/Repository/AbstractRepository.php');
require_once (__DIR__ . '/Src/Repository/RoleRepository.php');


// function RegisterAutoloader() {
  
//   spl_autoload_register(function($class){

//     if (file_exists(__DIR__ . '/Back/App/controllers/' .  $class . '.php')) {

//       require_once (__DIR__ . '/Back/App/controllers/' . $class . '.php');
//     }

//     if (file_exists(__DIR__ . '/Back/App/Repository/' .  $class . '.php')) {

//       require_once (__DIR__ . '/Back/App/Repository/' . $class . '.php');
//     }

//     if (file_exists(__DIR__ . '/Back/App/models/' .  $class . '.php')) {

//       require_once (__DIR__ . '/Back/App/models/' . $class . '.php');
//     }
//   });
// }
// RegisterAutoloader();