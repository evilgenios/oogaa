<?php
require '../vendor/autoload.php';

use FurqanSiddiqui\BIP39\BIP39;

header('Content-Type: application/json');

try {
    $mnemonic = BIP39::Generate(12); // Generate a 12-word mnemonic

    // Encode and output the mnemonic as JSON
    echo json_encode([
        'status' => 'success',
        'mnemonic' => implode(' ', $mnemonic->words)
    ]);
} catch (Exception $e) {
    // Log detailed error message
    error_log("Error generating mnemonic: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
}
