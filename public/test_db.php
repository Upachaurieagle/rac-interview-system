<?php
require_once __DIR__ . '/../src/config/database.php';

$db = new Database();
$conn = $db->getConnection();

if($conn){
    echo "DB connection successful.<br>";
    $stmt = $conn->query("SHOW TABLES");
    $tables = $stmt->fetchAll(PDO::FETCH_NUM);
    echo "Tables in rac_interview:<br>";
    echo "<pre>";
    print_r($tables);
    echo "</pre>";
} else {
    echo "DB connection failed.";
}

