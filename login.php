<?php
require_once 'config.php';
require_once 'functions.php';

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (validate_user($email, $password)) {
        $_SESSION['user_id'] = get_user_id($email);
        $_SESSION['flash'] = ['message' => 'Login successful!', 'type' => 'success'];
        header('Location: /nigerian_coffee_express/shop');
        exit();
    } else {
        $error_message = 'Invalid credentials. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Nigerian Coffee Express</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        <?php include 'css/login.css'; ?>
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="login-section">
            <div class="login-container">
                <h2>Welcome Back</h2>
                <?php
                // Display flash messages
                if (isset($_SESSION['flash'])) {
                    echo "<div class='flash-message flash-" . $_SESSION['flash']['type'] . "'>" . $_SESSION['flash']['message'] . "</div>";
                    unset($_SESSION['flash']);
                }
                ?>
                <?php if (!empty($error_message)): ?>
                    <div class="error-message"><?php echo $error_message; ?></div>
                <?php endif; ?>
                <form id="login-form" action="/nigerian_coffee_express/login" method="POST">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit">Login</button>
                </form>
                <div class="register-link">
                    <p>Don't have an account? <a href="/nigerian_coffee_express/register">Register here</a></p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>