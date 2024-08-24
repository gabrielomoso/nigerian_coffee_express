<?php
session_start();
require_once 'config.php';
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | Nigerian Coffee Express</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="error-404">
            <div class="container">
                <h1>404 - Page Not Found</h1>
                <p>Sorry, the page you are looking for doesn't exist or has been moved.</p>
                <a href="/" class="btn">Go to Homepage</a>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>