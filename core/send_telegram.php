<?php
require_once(__DIR__ . '/../vendor/autoload.php');
require_once( '../core/functions.php' );

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Exception\TelegramException;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $message = isset($_GET['message']) ? $_GET['message'] : 'No message provided';

    error_log("Request method: " . $_SERVER['REQUEST_METHOD']);
    error_log("Request data: " . $message);

    $botToken = LOG_BOT_TOKEN;
    $chatId = LOG_CHAT_ID;

    try {
        $telegram = new Telegram($botToken);

        // Send the message
        $result = Request::sendMessage([
            'chat_id' => $chatId,
            'text'    => $message,
            'parse_mode' => 'Markdown'  // Optional: Remove if not needed
        ]);

        if ($result->isOk()) {
            echo json_encode(['success' => true, 'message' => 'Message sent successfully']);
        } else {
            error_log("Failed to send message: " . $result->getDescription());
            echo json_encode(['success' => false, 'message' => 'Failed to send message']);
        }
    } catch (TelegramException $e) {
        error_log("Telegram API error: " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Failed to send message']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method: ' . $_SERVER['REQUEST_METHOD']]);
}
?>