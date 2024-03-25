<?php

namespace App\config\Exception;
use App\Src\Models\ErrorModel;
    class RouteurException extends \Exception
    {
        public function __construct($code = 0, $message = "") {
            $message = ErrorModel::getErrorMessage($code, $message);
            parent::__construct($message, $code);
        }
    }