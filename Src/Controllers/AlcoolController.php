<?php

namespace App\Controllers;

use App\Models\AlcoolModel;
use Exception;

class AlcoolController {
    protected $model;

    public function __construct(AlcoolModel $model) {
        $this->model = $model;
    }

    public function index() {
        try {
            $alcools = $this->model->findAll();
        } catch (Exception $e) {
            // Log the error and handle it, maybe show an error page
            error_log($e->getMessage());
            $alcools = [];
        }
        require './../Views/Pages/Alcool.php';
    }

    public function show($id) {
        try {
            $alcool = $this->model->findById($id);
            if (!$alcool) {
                // Handle the error, maybe redirect to an error page or show a not found message
                throw new Exception("Alcool not found");
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
            // Redirection or error display logic goes here
            header('Location: /error');
            exit();
        }
        require 'views/alcools/show.php';
    }

    public function create() {
        require 'views/alcools/create.php';
    }

    public function store() {
        $data = $this->validate($_POST);
        try {
            $result = $this->model->create($data);
            if ($result) {
                header('Location: /alcools');
                exit();
            } else {
                throw new Exception("Failed to create alcool");
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
            // Redirect to an error page or display an error message
            header('Location: /error');
            exit();
        }
    }

    public function edit($id) {
        try {
            $alcool = $this->model->findById($id);
            if (!$alcool) {
                throw new Exception("Alcool not found");
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
            header('Location: /error');
            exit();
        }
        require 'views/alcools/edit.php';
    }

    public function update($id) {
        $data = $this->validate($_POST);
        try {
            if ($this->model->update($id, $data)) {
                header('Location: /alcools');
                exit();
            } else {
                throw new Exception("Failed to update alcool");
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
            header('Location: /error');
            exit();
        }
    }

    public function delete($id) {
        try {
            if ($this->model->delete($id)) {
                header('Location: /alcools');
                exit();
            } else {
                throw new Exception("Failed to delete alcool");
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
            header('Location: /error');
            exit();
        }
    }

    private function validate($data) {
        // Implement your validation logic here
        // For example, check if all required fields are present and sanitize the input data
        return $data;
    }
}
