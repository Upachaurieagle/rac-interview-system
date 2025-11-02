<?php

class Expert {
    private $id;
    private $name;
    private $expertiseArea;

    public function __construct($id, $name, $expertiseArea) {
        $this->id = $id;
        $this->name = $name;
        $this->expertiseArea = $expertiseArea;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getExpertiseArea() {
        return $this->expertiseArea;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setExpertiseArea($expertiseArea) {
        $this->expertiseArea = $expertiseArea;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'expertiseArea' => $this->expertiseArea,
        ];
    }
}