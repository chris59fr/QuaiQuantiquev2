<?php

use Src\Controllers\RoleController;

require_once (__DIR__ . '/../../../../../autoloader.php');

$controller = new RoleController;

$controller->createRole('TOTO');
