Sure, here's the contents for the file: /rac-interview-system/rac-interview-system/src/models/Match.php

<?php

class Match {
    private $expert;
    private $candidate;
    private $matchingScore;
    private $relevancyScore;

    public function __construct($expert, $candidate) {
        $this->expert = $expert;
        $this->candidate = $candidate;
        $this->matchingScore = 0;
        $this->relevancyScore = 0;
    }

    public function calculateMatchingScore() {
        // Logic to calculate matching score based on expertise area and candidate's area of expertise
        // This is a placeholder for the actual implementation
        $this->matchingScore = rand(0, 100); // Example random score
    }

    public function calculateRelevancyScore() {
        // Logic to calculate relevancy score based on profiles
        // This is a placeholder for the actual implementation
        $this->relevancyScore = rand(0, 100); // Example random score
    }

    public function getMatchingScore() {
        return $this->matchingScore;
    }

    public function getRelevancyScore() {
        return $this->relevancyScore;
    }

    public function getExpert() {
        return $this->expert;
    }

    public function getCandidate() {
        return $this->candidate;
    }
}