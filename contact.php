<?php
require_once 'config.php';
require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Here you would typically process the form data, such as sending an email
    // For this example, we'll just set a success message
    $success_message = "Thank you for your message! We will get back to you soon.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Nigerian Coffee Express</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        <?php include 'css/contact.css'; ?>
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="page-title">
            <div class="container">
                <h1>Contact Us</h1>
            </div>
        </section>

        <section class="additional-info">
            <div class="container">
                <h3>Get More Information</h3>
                <p>To become a partner, add your products, or for any other inquiries, please reach out to us through our social media channels, via email, or give us a call. We're always excited to connect with coffee enthusiasts and potential partners!</p>
            </div>
        </section>

        <section class="contact-content">
            <div class="container">
                <div class="contact-form">
                    <h2>Get in Touch</h2>
                    <?php
                    if (isset($success_message)) {
                        echo "<p class='success-message'>{$success_message}</p>";
                    }
                    ?>
                    <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
                <div class="contact-info">
                    <h2>Contact Information</h2>
                    <div class="contact-methods">
                        <div class="contact-method">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>123 Coffee Street, Lagos, Nigeria</p>
                        </div>
                        <div class="contact-method">
                            <i class="fas fa-phone"></i>
                            <p>+234 123 456 7890</p>
                        </div>
                        <div class="contact-method">
                            <i class="fas fa-envelope"></i>
                            <p>info@nigeriancoffeeexpress.com</p>
                        </div>
                    </div>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7284241231476!2d3.3791767!3d6.4511989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b2ae68280c1%3A0xdc9e87a367c3d9cb!2sLagos%2C%20Nigeria!5e0!3m2!1sen!2sus!4v1623317938619!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        <?php include 'js/contact.js'; ?>
    </script>
</body>
</html>