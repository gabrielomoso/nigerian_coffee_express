<?php
require_once 'config.php';
require_once 'functions.php';

// Ensure user is logged in
login_required();

// Fetch products from the database
$products = get_products();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Nigerian Coffee Express</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        <?php include 'css/shop.css'; ?>
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="shop-header">
            <div class="container">
                <h1>Shop Our Premium Coffee Selection</h1>
                <p>Discover the rich flavors of Nigerian coffee, sourced from the finest local producers</p>
            </div>
        </section>

        <section class="container shop-container">
            <div class="shop-grid">
                <?php foreach ($products as $product): ?>
                    <div class="product-card">
                        <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="product-image" width="250" height="200">
                        <div class="product-info">
                            <h3 class="product-name"><?php echo htmlspecialchars($product['name']); ?></h3>
                            <p class="product-description"><?php echo htmlspecialchars($product['description']); ?></p>
                            <p class="product-price">₦<?php echo number_format($product['price'], 2); ?></p>
                            <a href="#" class="add-to-cart" data-id="<?php echo $product['id']; ?>">Add to Cart</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <aside class="sidebar">
                <section class="cart-items">
                    <h2>Cart Items</h2>
                    <div id="cart-list"></div>
                    <button id="order-now" class="btn btn-primary">Order Now</button>
                </section>

                <section class="pending-deliveries">
                    <h2>Pending Deliveries</h2>
                    <div id="pending-deliveries-list"></div>
                    <button id="confirm-delivery" class="btn btn-secondary">Confirm Delivery</button>
                </section>

                <section class="delivery-history">
                    <h2>Delivery History</h2>
                    <div id="delivery-history-list"></div>
                </section>
            </aside>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        <?php include 'js/shop.js'; ?>
    </script>
</body>
</html>