<?php
require_once 'config.php';
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigerian Coffee Express - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        <?php include 'css/home.css'; ?>
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Discover the Rich Flavors of Nigerian Coffee</h1>
                <p>Experience the finest coffee from Nigeria's premier brands, delivered right to your doorstep.</p>
                <button class="cta-button">Explore Our Collection</button>
            </div>
        </section>

        <section class="featured-brands">
      <div class="container">
        <h2>Featured Coffee Brands</h2>
        <div class="brand-grid">
          <div class="brand-card">
            <img src="https://coffeebi.com/wp-content/uploads/2017/02/neo-cafe.jpg" alt="Café Neo coffee shop interior" class="brand-image" width="280" height="250">
            <div class="brand-info">
              <h3 class="brand-name">Café Neo</h3>
              <p class="brand-description">A prominent coffee chain known for popularizing specialty coffee across Nigeria, offering a variety of beverages and single-origin beans.</p>
            </div>
          </div>
          <div class="brand-card">
            <img src="https://coffeeaffection.com/wp-content/uploads/2019/08/Bean-Box-coffee-subscription-brewed.jpeg" alt="BeanBox coffee packaging" class="brand-image" width="280" height="250">
            <div class="brand-info">
              <h3 class="brand-name">BeanBox</h3>
              <p class="brand-description">Focuses on ethically sourced and sustainably grown Nigerian coffee beans, providing a diverse selection of premium options.</p>
            </div>
          </div>
          <div class="brand-card">
            <img src="https://images.unsplash.com/photo-1514066558159-fc8c737ef259?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Yaba Coffee roasting process" class="brand-image" width="280" height="250">
            <div class="brand-info">
              <h3 class="brand-name">Yaba Coffee</h3>
              <p class="brand-description">Known for its commitment to freshness, Yaba Coffee roasts beans in small batches and offers single-origin coffees from various Nigerian regions.</p>
            </div>
          </div>
          <div class="brand-card">
            <img src="https://images.unsplash.com/photo-1518057111178-44a106bad636?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Nigerian Coffee Roasters beans" class="brand-image" width="280" height="250">
            <div class="brand-info">
              <h3 class="brand-name">Nigerian Coffee Roasters</h3>
              <p class="brand-description">A specialty roastery dedicated to sourcing and roasting high-quality Nigerian coffee beans, working closely with local farmers.</p>
            </div>
          </div>
          <div class="brand-card">
            <img src="https://images.unsplash.com/photo-1504630083234-14187a9df0f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Native Coffee Company farm" class="brand-image" width="280" height="250">
            <div class="brand-info">
              <h3 class="brand-name">Native Coffee Company</h3>
              <p class="brand-description">Promotes Nigerian coffee and supports local farmers through fair trade practices, offering a variety of single-origin options.</p>
            </div>
          </div>
          <div class="brand-card">
            <img src="https://images.unsplash.com/photo-1442512595331-e89e73853f31?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="The Coffee Manor interior" class="brand-image" width="280" height="250">
            <div class="brand-info">
              <h3 class="brand-name">The Coffee Manor</h3>
              <p class="brand-description">Offers a premium selection of specialty coffees sourced from Nigeria and other origins, with a focus on small-batch roasting.</p>
            </div>
          </div>
          <div class="brand-card">
            <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Coffee Plus single-origin beans" class="brand-image" width="280" height="250">
            <div class="brand-info">
              <h3 class="brand-name">Coffee Plus</h3>
              <p class="brand-description">Specializes in single-origin coffee sourced from different Nigerian regions, emphasizing high-quality beans with unique flavors.</p>
            </div>
          </div>
          <div class="brand-card">
            <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Bluebell Coffee blend" class="brand-image" width="280" height="250">
            <div class="brand-info">
              <h3 class="brand-name">Bluebell Coffee</h3>
              <p class="brand-description">Known for expertly crafted blends that combine Nigerian coffee beans with those from other regions, showcasing versatility.</p>
            </div>
          </div>
          <div class="brand-card">
            <img src="https://images.unsplash.com/photo-1507133750040-4a8f57021571?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="The Coffee Master brewing" class="brand-image" width="280" height="250">
            <div class="brand-info">
              <h3 class="brand-name">The Coffee Master</h3>
              <p class="brand-description">A coffee consultancy and retailer that provides customized blends and brewing expertise, catering to coffee enthusiasts.</p>
            </div>
          </div>
          <div class="brand-card">
            <img src="https://images.unsplash.com/photo-1495881674446-33314d7fb917?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Golden Beans Coffee roasting" class="brand-image" width="280" height="250">
            <div class="brand-info">
              <h3 class="brand-name">Golden Beans Coffee</h3>
              <p class="brand-description">Focuses on artisanal roasting of high-quality beans sourced from Nigerian farmers, delivering exceptional coffee experiences.</p>
            </div>
          </div>
        </div>
        <div class="shop-now-container">
          <button class="cta-button">Shop Now</button>
        </div>
      </div>
    </section>


        <section class="testimonials">
            <div class="container">
                <h2>What Our Customers Say</h2>
                <div class="testimonial-grid">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"The variety and quality of Nigerian coffee brands available here is incredible. I've discovered so many new favorites!"</p>
                        <p class="testimonial-author">- Chidi O.</p>
                    </div>
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Fast delivery and excellent customer service. Nigerian Coffee Express has become my go-to for all things coffee."</p>
                        <p class="testimonial-author">- Amina B.</p>
                    </div>
                    <div class="testimonial-card">
                        <p class="testimonial-text">"I love supporting local coffee brands, and this platform makes it so easy. The coffee is always fresh and delicious!"</p>
                        <p class="testimonial-author">- Emeka N.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        <?php include 'js/home.js'; ?>
    </script>
</body>
</html>