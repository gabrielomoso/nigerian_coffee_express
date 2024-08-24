<?php
require_once 'config.php';
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Nigerian Coffee Express</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        <?php include 'css/about.css'; ?>
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="page-title">
            <div class="container">
                <h1>About Nigerian Coffee Express</h1>
            </div>
        </section>

        <section class="about-content">
            <div class="container">
                <div class="about-text">
                    <h2>Our Story</h2>
                    <p>Nigerian Coffee Express was founded in 2022 with a simple yet ambitious goal: to bring the finest coffee brands from across Nigeria directly to your doorstep. We recognized the untapped potential of Nigeria's coffee industry and set out to create a platform that would showcase the diverse and exquisite flavors of Nigerian coffee to the world.</p>
                    <p>Our team of coffee enthusiasts has traveled far and wide, from the highlands of Plateau State to the lush plantations of Cross River State, to curate a collection of the best coffee brands Nigeria has to offer. We've built strong relationships with local roasters, farmers, and distributors to ensure that every bag of coffee we deliver is of the highest quality and freshness.</p>
                    <p>At Nigerian Coffee Express, we believe that great coffee should be accessible to everyone. That's why we've made it our mission to simplify the process of discovering and enjoying premium Nigerian coffee, all from the comfort of your home.</p>
                </div>
                <div class="about-image">
                    <img src="https://page-images.websim.ai/Coffee%20plantation%20in%20Nigeria_400x300xn4MCg3qmhtAvgbzfwxd44722ab0e199.jpg" alt="Roasted Nigerian coffee beans" width="400" height="300">
                </div>
            </div>
        </section>

        <section class="mission-vision">
            <div class="container">
                <div class="mission-vision-content">
                    <div class="mission">
                        <h2>Our Mission</h2>
                        <p>To connect coffee lovers across Nigeria with the best local coffee brands, promoting the rich coffee culture of our nation while supporting local farmers and roasters. We aim to make premium Nigerian coffee accessible to everyone, one delivery at a time.</p>
                    </div>
                    <div class="vision">
                        <h2>Our Vision</h2>
                        <p>To be the leading online destination for Nigerian coffee, fostering a thriving coffee community that celebrates the unique flavors and qualities of our local brands. We envision a future where Nigerian coffee is recognized and appreciated worldwide for its exceptional taste and quality.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="team">
            <div class="container">
            <h2>Meet Our Team</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="./img/job_pic.jpg" alt="Omoso-Odiase Gabriel - Founder & CEO" width="200" height="200">
                    <h3>Omoso-Odiase Gabriel</h3>
                    <p>Founder & CEO</p>
                </div>
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Amina Ibrahim - Head of Sourcing" width="200" height="200">
                    <h3>Amina Ibrahim</h3>
                    <p>Head of Sourcing</p>
                </div>
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Chukwudi Okonkwo - Marketing Director" width="200" height="200">
                    <h3>Chukwudi Okonkwo</h3>
                    <p>Marketing Director</p>
                </div>
                
            </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        <?php include 'js/about.js'; ?>
    </script>
</body>
</html>