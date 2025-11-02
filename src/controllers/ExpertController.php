<?php

class ExpertController {
    private $expertModel;

    public function __construct($expertModel) {
        $this->expertModel = $expertModel;
    }

    public function addExpert($data) {
        // Logic to add a new expert
        return $this->expertModel->create($data);
    }

    public function updateExpert($id, $data) {
        // Logic to update an existing expert
        return $this->expertModel->update($id, $data);
    }

    public function getExpert($id) {
        // Logic to retrieve an expert by ID
        return $this->expertModel->find($id);
    }

    public function getAllExperts() {
        // Logic to retrieve all experts
        return $this->expertModel->getAll();
    }
}