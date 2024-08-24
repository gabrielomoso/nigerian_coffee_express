<?php
//Error handling functions
function display_error($message) {
    $_SESSION['error'] = $message;
}

function display_success($message) {
    $_SESSION['success'] = $message;
}

function display_messages() {
    $output = '';
    if (isset($_SESSION['error'])) {
        $output .= '<div class="error-message">' . $_SESSION['error'] . '</div>';
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
        $output .= '<div class="success-message">' . $_SESSION['success'] . '</div>';
        unset($_SESSION['success']);
    }
    return $output;
}

// Main code functions
function login_required() {
    if (!isset($_SESSION['user_id'])) {
        $_SESSION['flash'] = ['message' => 'You need to be logged in to view this page.', 'type' => 'warning'];
        header('Location: /nigerian_coffee_express/login');
        exit();
    }
}

function flash_message() {
    if (isset($_SESSION['flash'])) {
        $message = $_SESSION['flash']['message'];
        $type = $_SESSION['flash']['type'];
        unset($_SESSION['flash']);
        return "<div class='alert alert-$type'>$message</div>";
    }
    return '';
}

function get_user($user_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

// Add these functions to your existing functions.php file

function validate_user($email, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($user = $result->fetch_assoc()) {
        return password_verify($password, $user['password']);
    }
    return false;
}

function get_user_id($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($user = $result->fetch_assoc()) {
        return $user['id'];
    }
    return null;
}

// Add these functions to your existing functions.php file

function email_exists($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}

function register_user($fullname, $email, $password) {
    global $conn;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullname, $email, $hashed_password);
    return $stmt->execute();
}

// Add these functions to your existing functions.php file

function get_products() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM products");
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
}
