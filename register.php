<?php
require_once 'config.php';
require_once 'functions.php';

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if ($password !== $confirm_password) {
        $error_message = "Passwords do not match.";
    } else {
        // Check if email already exists
        if (email_exists($email)) {
            $error_message = "Email already exists. Please use a different email.";
        } else {
            // Register the user
            if (register_user($fullname, $email, $password)) {
                $_SESSION['flash'] = ['message' => 'Registration successful! Please log in.', 'type' => 'success'];
                header('Location: /nigerian_coffee_express/login');
                exit();
            } else {
                $error_message = "Registration failed. Please try again.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Nigerian Coffee Express</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        <?php include 'css/register.css'; ?>
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="register-section">
            <div class="register-container">
                <h2>Create an Account</h2>
                <?php if (!empty($error_message)): ?>
                    <div class="error-message"><?php echo $error_message; ?></div>
                <?php endif; ?>
                <form id="register-form" action="/nigerian_coffee_express/register" method="POST">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm-password" required>
                    </div>
                    <button type="submit">Register</button>
                </form>
                <div class="login-link">
                    <p>Already have an account? <a href="/nigerian_coffee_express/login">Login here</a></p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>