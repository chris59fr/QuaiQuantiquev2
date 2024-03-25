<?php

namespace App\config\Exception;
use App\Models\ErrorModel;
    class RouteurException extends \Exception
    {
        public function __construct($code = 0, $message = "") {
            parent::__construct(ErrorModel::getErrorMessage($code, $message), $code);
        }
    }