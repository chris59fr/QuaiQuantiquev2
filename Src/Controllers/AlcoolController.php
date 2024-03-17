<?php

namespace App\Controllers;

use App\Models\AlcoolModel;
// Try + catch => Echo ?
class AlcoolController { 
    protected $model;

    public function __construct(AlcoolModel $model) {
        $this->model = $model;
    }
    // Gestion d'affichage de la liste des alcools
    public function index() {
        $alcools = $this->model->findAll();
        require 'views/alcools/index.php';
    }

    public function show($id) {
        $alcool = $this->model->findById($id);
        require 'views/alcools/show.php';
    }

    public function create() {
        // Afficher le formulaire de création
        require 'views/alcools/create.php';
    }

    public function store() {
        // Traiter la soumission du formulaire de création
        $this->model->create($_POST);
        header('Location: /alcools');
    }

    public function edit($id) {
        // Afficher le formulaire d'édition
        $alcool = $this->model->findById($id);
        require 'views/alcools/edit.php';
    }

    public function update($id) {
        // Traiter la soumission du formulaire d'édition
        $this->model->update($id, $_POST);
        header('Location: /alcools');
    }

    public function delete($id) {
        // Supprimer un enregistrement
        $this->model->delete($id);
        header('Location: /alcools');
    }
}
