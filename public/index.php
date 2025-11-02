<?php
require_once '../src/config/database.php';
require_once '../src/controllers/ExpertController.php';
require_once '../src/controllers/CandidateController.php';
require_once '../src/controllers/BoardController.php';
require_once '../src/controllers/MatchingController.php';

// Initialize the application
$expertController = new ExpertController();
$candidateController = new CandidateController();
$boardController = new BoardController();
$matchingController = new MatchingController();

// Example routing logic (this can be expanded as needed)
$requestUri = $_SERVER['REQUEST_URI'];

switch ($requestUri) {
    case '/experts':
        $expertController->index();
        break;
    case '/candidates':
        $candidateController->index();
        break;
    case '/boards':
        $boardController->index();
        break;
    case '/match':
        $matchingController->initiateMatching();
        break;
    default:
        http_response_code(404);
        echo '404 Not Found';
        break;
}
?>