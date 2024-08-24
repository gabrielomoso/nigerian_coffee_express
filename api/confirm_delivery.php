<?php
session_start();
require_once '../config.php';
require_once '../functions.php';

header('Content-Type: application/json');

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

function send_error($message, $code = 400) {
    http_response_code($code);
    echo json_encode(['error' => $message]);
    exit;
}

if (!isset($_SESSION['user_id'])) {
    send_error('Unauthorized', 401);
}

$user_id = $_SESSION['user_id'];
$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['deliveryNumber'])) {
    send_error('Invalid data: Missing deliveryNumber');
}

$delivery_number = $data['deliveryNumber'];

$stmt = $conn->prepare("UPDATE deliveries SET status = 'completed' WHERE user_id = ? AND delivery_number = ? AND status = 'pending'");
if (!$stmt) {
    send_error('Prepare failed: ' . $conn->error, 500);
}

$stmt->bind_param("is", $user_id, $delivery_number);

if (!$stmt->execute()) {
    send_error('Execute failed: ' . $stmt->error, 500);
}

if ($stmt->affected_rows > 0) {
    $stmt = $conn->prepare("SELECT * FROM deliveries WHERE user_id = ? AND delivery_number = ?");
    if (!$stmt) {
        send_error('Prepare failed: ' . $conn->error, 500);
    }
    $stmt->bind_param("is", $user_id, $delivery_number);
    if (!$stmt->execute()) {
        send_error('Execute failed: ' . $stmt->error, 500);
    }
    $result = $stmt->get_result();
    $confirmed_delivery = $result->fetch_assoc();
    
    // Ensure items are decoded from JSON
    $confirmed_delivery['items'] = json_decode($confirmed_delivery['items'], true);
    
    echo json_encode($confirmed_delivery);
} else {
    send_error('Delivery not found or already confirmed', 404);
}