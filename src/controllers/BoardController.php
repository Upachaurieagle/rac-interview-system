<?php

class BoardController {
    private $boardModel;

    public function __construct($boardModel) {
        $this->boardModel = $boardModel;
    }

    public function createBoard($subject, $members) {
        // Logic to create a new interview board
        return $this->boardModel->create($subject, $members);
    }

    public function getBoard($id) {
        // Logic to retrieve a specific board by ID
        return $this->boardModel->find($id);
    }

    public function updateBoard($id, $subject, $members) {
        // Logic to update an existing board
        return $this->boardModel->update($id, $subject, $members);
    }

    public function deleteBoard($id) {
        // Logic to delete a board
        return $this->boardModel->delete($id);
    }

    public function listBoards() {
        // Logic to list all boards
        return $this->boardModel->all();
    }
}