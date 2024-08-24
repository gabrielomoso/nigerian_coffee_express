<?php
session_start();
require_once '../config.php';
require_once '../functions.php';

header('Content-Type: application/json');

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to send error response
function send_error($message, $code = 400) {
    http_response_code($code);
    echo json_encode(['error' => $message]);
    exit;
}

if (!isset($_SESSION['user_id'])) {
    send_error('Unauthorized', 401);
}

$user_id = $_SESSION['user_id'];
$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    send_error('Invalid JSON: ' . json_last_error_msg());
}

if (!isset($data['items']) || !isset($data['date']) || !isset($data['deliveryNumber'])) {
    send_error('Missing required fields');
}

$items = json_encode($data['items']);
$date = $data['date'];
$delivery_number = $data['deliveryNumber'];

$stmt = $conn->prepare("INSERT INTO deliveries (user_id, date, delivery_number, items, status) VALUES (?, ?, ?, ?, 'pending')");
if (!$stmt) {
    send_error('Prepare failed: ' . $conn->error, 500);
}

$stmt->bind_param("isss", $user_id, $date, $delivery_number, $items);

if (!$stmt->execute()) {
    send_error('Execute failed: ' . $stmt->error, 500);
}

$new_delivery_id = $stmt->insert_id;
$new_delivery = [
    'id' => $new_delivery_id,
    'user_id' => $user_id,
    'date' => $date,
    'delivery_number' => $delivery_number,
    'items' => $data['items'],
    'status' => 'pending'
];

echo json_encode($new_delivery);