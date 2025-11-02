<?php

class CandidateController {
    private $candidateModel;

    public function __construct($candidateModel) {
        $this->candidateModel = $candidateModel;
    }

    public function addCandidate($data) {
        // Logic to add a new candidate
        return $this->candidateModel->create($data);
    }

    public function updateCandidate($id, $data) {
        // Logic to update an existing candidate
        return $this->candidateModel->update($id, $data);
    }

    public function getCandidate($id) {
        // Logic to retrieve a candidate by ID
        return $this->candidateModel->find($id);
    }

    public function getAllCandidates() {
        // Logic to retrieve all candidates
        return $this->candidateModel->all();
    }
}