<?php
session_start();
require_once '../config.php';
require_once '../functions.php';

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch pending deliveries
$pending_deliveries = get_deliveries($user_id, 'pending');

// Fetch delivery history
$delivery_history = get_deliveries($user_id, 'completed');

echo json_encode([
    'pending' => $pending_deliveries,
    'history' => $delivery_history
]);

function get_deliveries($user_id, $status) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM deliveries WHERE user_id = ? AND status = ? ORDER BY date DESC");
    $stmt->bind_param("is", $user_id, $status);
    $stmt->execute();
    $result = $stmt->get_result();
    $deliveries = $result->fetch_all(MYSQLI_ASSOC);
    
    // Decode JSON items for each delivery
    foreach ($deliveries as &$delivery) {
        $delivery['items'] = json_decode($delivery['items'], true);
    }
    
    return $deliveries;
}