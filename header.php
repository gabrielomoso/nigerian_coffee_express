<!-- Debug: Header included -->
<header>
<div>
    <div class="container">
        <nav>
        <a href="/nigerian_coffee_express/" class="logo">Nigerian Coffee Express</a>
        <div class="nav-links">
            <a href="/nigerian_coffee_express/">Home</a>
            <a href="/nigerian_coffee_express/about">About</a>
            <a href="/nigerian_coffee_express/shop">Shop</a>
            <a href="/nigerian_coffee_express/contact">Contact</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="/nigerian_coffee_express/logout">Logout</a>
            <?php else: ?>
                <a href="/nigerian_coffee_express/login">Login</a>
                <a href="/nigerian_coffee_express/register">Register</a>
            <?php endif; ?>
        </div>
        </nav>
    </div>
</div>
</header>