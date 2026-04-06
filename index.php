<?php
session_start();
$cartCount = 0;

if (!empty($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $cartCount += isset($item['quantity']) ? (int)$item['quantity'] : 0;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitalora | Premium Vitamins & Supplements</title>
    <meta name="description" content="Shop premium vitamins and supplements for energy, immunity, sleep, focus, gut health, and everyday wellness. Clean formulas. Trusted ingredients.">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="site-header">
    <div class="container nav-wrap">
        <a href="index.php" class="brand">
            <span class="brand-logo">+</span>
            <span class="brand-name">Vitalora</span>
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="site-nav" id="siteNav">
            <a href="index.php">Home</a>
            <a href="products.php">Shop</a>
            <a href="products.php">All Products</a>
            <a href="login.php">Sign In</a>
            <a href="register.php">Register</a>
            <a href="cart.php" class="cart-link">Cart <span class="cart-badge"><?php echo $cartCount; ?></span></a>
        </nav>
    </div>
</header>

<main>
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <span class="eyebrow">Science-Backed • Premium Quality • Everyday Wellness</span>
                <h1>Premium Vitamins That Fit Real Life</h1>
                <p class="hero-text">
                    Support your daily wellness with clean, science-backed supplements made for health-conscious adults,
                    busy professionals, and families who want better daily support. From energy and immunity to sleep,
                    focus, and gut health, Vitalora delivers trusted supplements without the hype.
                </p>

                <div class="hero-actions">
                    <a href="products.php" class="btn btn-primary">Shop Now</a>
                    <a href="products.php" class="btn btn-secondary">View Products</a>
                </div>

                <div class="hero-trust">
                    <span>Third-Party Tested</span>
                    <span>Non-GMO Options</span>
                    <span>Made to High Standards</span>
                </div>
            </div>

            <div class="hero-card">
                <div class="product-preview">
                    <span class="tag">Best Seller</span>
                    <h3>Daily Wellness Multivitamin</h3>
                    <p>
                        A clean daily formula designed to support energy, immunity, and foundational wellness.
                    </p>
                    <ul>
                        <li>Supports daily nutrient intake</li>
                        <li>Designed for everyday use</li>
                        <li>Clean, premium formula</li>
                    </ul>
                    <a href="products.php" class="text-link">Explore Best Sellers</a>
                </div>
            </div>
        </div>
    </section>

    <section class="trust-strip">
        <div class="container trust-grid">
            <div class="trust-box">
                <h3>Third-Party Tested</h3>
                <p>Every formula is made with a focus on quality, consistency, and transparency.</p>
            </div>
            <div class="trust-box">
                <h3>Thoughtful Ingredients</h3>
                <p>Selected for daily wellness goals like energy, immunity, sleep, focus, and gut health.</p>
            </div>
            <div class="trust-box">
                <h3>Premium Standards</h3>
                <p>Modern supplements designed for people who want better products and clear labeling.</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading center">
                <span class="eyebrow">Why Choose Us</span>
                <h2>Better Standards for Daily Supplements</h2>
                <p>
                    At Vitalora, better health starts with better standards. That means carefully selected ingredients,
                    transparent formulas, and a simpler way to shop for vitamins online with confidence.
                </p>
            </div>

            <div class="feature-grid">
                <div class="feature-card">
                    <h3>Science-Backed Formulas</h3>
                    <p>Designed to support real wellness goals like energy, immunity, sleep, focus, and gut health.</p>
                </div>
                <div class="feature-card">
                    <h3>High-Quality Ingredients</h3>
                    <p>We focus on clean, practical formulations made for daily routines and long-term consistency.</p>
                </div>
                <div class="feature-card">
                    <h3>Transparent Labeling</h3>
                    <p>Clear product positioning, simple information, and no exaggerated claims.</p>
                </div>
                <div class="feature-card">
                    <h3>Lifestyle-Friendly Options</h3>
                    <p>Products made to fit modern preferences, including vegan and non-GMO options where available.</p>
                </div>
                <div class="feature-card">
                    <h3>Trusted Manufacturing</h3>
                    <p>Made to high standards with attention to quality, consistency, and customer trust.</p>
                </div>
                <div class="feature-card">
                    <h3>Easy Online Shopping</h3>
                    <p>Browse products, create an account, manage orders, and buy supplements online in minutes.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-alt">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Featured Products</span>
                <h2>Shop Vitamins & Supplements for Everyday Wellness</h2>
                <p>
                    Explore targeted formulas designed to support your daily routine with clean ingredients and premium quality.
                </p>
            </div>

            <div class="product-grid">
                <div class="product-card">
                    <span class="product-tag">Daily Essential</span>
                    <h3>Daily Multivitamin</h3>
                    <p class="product-desc">
                        A balanced daily formula to support overall wellness, nutrient coverage, and consistency.
                    </p>
                    <ul>
                        <li>Supports daily wellness</li>
                        <li>Easy to take every day</li>
                        <li>Clean, premium formula</li>
                    </ul>
                    <a href="products.php" class="btn btn-primary btn-block">Shop Multivitamin</a>
                </div>

                <div class="product-card">
                    <span class="product-tag">Immune Support</span>
                    <h3>Vitamin C + Zinc</h3>
                    <p class="product-desc">
                        A simple, focused formula designed for everyday immune support and routine consistency.
                    </p>
                    <ul>
                        <li>Supports immune health</li>
                        <li>Simple targeted formula</li>
                        <li>Great for daily use</li>
                    </ul>
                    <a href="products.php" class="btn btn-primary btn-block">Shop Immune Support</a>
                </div>

                <div class="product-card">
                    <span class="product-tag">Evening Routine</span>
                    <h3>Sleep Support Complex</h3>
                    <p class="product-desc">
                        A calm, targeted formula for people building a more intentional nighttime wellness routine.
                    </p>
                    <ul>
                        <li>Supports restful routines</li>
                        <li>Evening-focused formula</li>
                        <li>Designed for consistency</li>
                    </ul>
                    <a href="products.php" class="btn btn-primary btn-block">Shop Sleep Support</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading center">
                <span class="eyebrow">How It Works</span>
                <h2>A Simple Way to Build Your Supplement Routine</h2>
            </div>

            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3>Browse Products</h3>
                    <p>Explore all vitamins and supplements by category, benefit, or daily wellness goal.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3>Add to Cart</h3>
                    <p>Select the products that fit your routine and add them to your cart in one click.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3>Checkout Securely</h3>
                    <p>Create an account or sign in, then complete your order through a secure checkout flow.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-alt">
        <div class="container two-col">
            <div>
                <span class="eyebrow">Ingredients & Quality</span>
                <h2>Built on Quality. Backed by Standards.</h2>
                <p>
                    What goes into your supplement matters. Vitalora starts with ingredient quality, practical formulation,
                    and modern standards customers can trust.
                </p>
                <p>
                    Our approach focuses on ingredient transparency, thoughtful product design, careful manufacturing,
                    and testing standards that support consistency and confidence.
                </p>
            </div>

            <div class="quality-list">
                <div class="quality-card">
                    <h3>Ingredient Transparency</h3>
                    <p>Clear labels and clear product positioning, so shoppers know what they’re choosing.</p>
                </div>
                <div class="quality-card">
                    <h3>Thoughtful Formulas</h3>
                    <p>Created around specific wellness goals without unnecessary clutter.</p>
                </div>
                <div class="quality-card">
                    <h3>Quality Testing</h3>
                    <p>Designed with consistency, trust, and product standards in mind.</p>
                </div>
                <div class="quality-card">
                    <h3>Modern Wellness Focus</h3>
                    <p>Supplements that fit real routines, not marketing noise.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading center">
                <span class="eyebrow">Customer Reviews</span>
                <h2>Trusted by Customers Who Want Better Daily Wellness</h2>
            </div>

            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p>
                        “I’ve tried a lot of supplements, and this brand feels more thoughtful than most.
                        The product quality feels premium and the whole site is easy to use.”
                    </p>
                    <strong>— Rachel M., 38</strong>
                </div>

                <div class="testimonial-card">
                    <p>
                        “I wanted vitamins that fit into my routine without making everything complicated.
                        Ordering was easy, and the product selection is clear.”
                    </p>
                    <strong>— David L., 45</strong>
                </div>

                <div class="testimonial-card">
                    <p>
                        “What I like most is that the brand feels clean and trustworthy.
                        It doesn’t overpromise, and the shopping experience feels premium.”
                    </p>
                    <strong>— Jasmine T., 31</strong>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-alt">
        <div class="container faq-container">
            <div class="section-heading center">
                <span class="eyebrow">FAQ</span>
                <h2>Common Questions</h2>
            </div>

            <div class="faq-item">
                <button class="faq-question">What makes Vitalora different from other vitamin brands?</button>
                <div class="faq-answer">
                    <p>We focus on clean, premium supplements with clear positioning, thoughtful formulas, and trustworthy standards.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">Can I view all products before creating an account?</button>
                <div class="faq-answer">
                    <p>Yes. Visitors can browse all products freely, then create an account during checkout or from the register page.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">Do I need an account to place an order?</button>
                <div class="faq-answer">
                    <p>You can require account-based checkout or allow guest checkout later, depending on how you build the checkout flow.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">Can I track my past orders?</button>
                <div class="faq-answer">
                    <p>Yes. Once account and orders pages are connected, users can sign in and review previous purchases.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">Are your products made for daily use?</button>
                <div class="faq-answer">
                    <p>Many supplements are designed for daily use, but each product page should include its own directions and warnings.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">How do I start shopping?</button>
                <div class="faq-answer">
                    <p>Just go to the products page, choose a supplement, add it to your cart, and continue to checkout.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-box">
            <div>
                <span class="eyebrow">Ready to Start</span>
                <h2>Your Wellness Routine Deserves Better Supplements</h2>
                <p>
                    Shop clean, trusted vitamins and supplements built for real routines. Browse all products,
                    add your favorites to cart, and build your account as your store grows.
                </p>
            </div>
            <div class="cta-actions">
                <a href="products.php" class="btn btn-primary">Shop Now</a>
                <a href="register.php" class="btn btn-secondary">Create Account</a>
            </div>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <h3>Vitalora</h3>
            <p>
                Premium vitamins and supplements designed for everyday wellness, clean routines, and customer trust.
            </p>
        </div>

        <div>
            <h4>Shop</h4>
            <ul>
                <li><a href="products.php">All Products</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="checkout.php">Checkout</a></li>
            </ul>
        </div>

        <div>
            <h4>Account</h4>
            <ul>
                <li><a href="login.php">Sign In</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="orders.php">Orders</a></li>
            </ul>
        </div>

        <div>
            <h4>Support</h4>
            <ul>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="account.php">My Account</a></li>
            </ul>
        </div>
    </div>

    <div class="container footer-bottom">
        <p class="disclaimer">
            These statements have not been evaluated by the Food and Drug Administration.
            These products are not intended to diagnose, treat, cure, or prevent any disease.
            Always consult a qualified healthcare professional before starting any supplement.
        </p>
        <p class="copyright">© <?php echo date('Y'); ?> Vitalora. All rights reserved.</p>
    </div>
</footer>

<script>
    const menuToggle = document.getElementById('menuToggle');
    const siteNav = document.getElementById('siteNav');

    menuToggle.addEventListener('click', function () {
        siteNav.classList.toggle('show');
    });

    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const item = question.parentElement;
            item.classList.toggle('active');
        });
    });
</script>

</body>
</html>