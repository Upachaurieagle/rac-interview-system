<?php

class MatchingController {
    
    private $expertModel;
    private $candidateModel;
    private $matchModel;

    public function __construct($expertModel, $candidateModel, $matchModel) {
        $this->expertModel = $expertModel;
        $this->candidateModel = $candidateModel;
        $this->matchModel = $matchModel;
    }

    public function initiateMatching($candidateId) {
        $candidate = $this->candidateModel->getCandidateById($candidateId);
        $experts = $this->expertModel->getAllExperts();
        
        $matches = [];
        foreach ($experts as $expert) {
            $score = $this->matchModel->calculateMatchingScore($expert, $candidate);
            if ($score > 0) {
                $matches[] = [
                    'expert' => $expert,
                    'score' => $score
                ];
            }
        }

        usort($matches, function($a, $b) {
            return $b['score'] <=> $a['score'];
        });

        return $matches;
    }

    public function getRelevancyScore($expertId, $candidateId) {
        $expert = $this->expertModel->getExpertById($expertId);
        $candidate = $this->candidateModel->getCandidateById($candidateId);
        
        return $this->matchModel->calculateRelevancyScore($expert, $candidate);
    }
}