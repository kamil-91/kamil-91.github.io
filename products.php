<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Modern Website</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation Menu -->
    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo">MyWebsite</a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
            
<div class="slider">
        <!-- Slider Images -->
        <div class="slide active">
            <img src="https://www.html-code-generator.com/images/slider/3.png" alt="Slide 1">
            <div class="slide-text">
                <h2>Welcome to Our Website</h2>
                <p>Discover amazing content and services tailored just for you.</p>
            </div>
        </div>
            <!-- Slide 2 -->
        <div class="slide">
            <img src="https://www.html-code-generator.com/images/slider/1.png" alt="Slide 2">
            <div class="slide-text">
                <h2>Explore Our Services</h2>
                <p>We offer top-notch solutions to meet your needs.</p>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="slide">
            <img src="https://www.html-code-generator.com/images/slider/2.png" alt="Slide 3">
            <div class="slide-text">
                <h2>Join Our Community</h2>
                <p>Be part of a growing and supportive network.</p>
            </div>
        </div>
   </div>

        <!-- Navigation Buttons -->
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </div>
    <script src="script.js"></script>
    </section>

    

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2>Our Products</h2>
            <div class="image-grid">
        <?php
        // Directory where images are stored
        $imageDir = 'images/';

        // Get all files from the directory
        $products = glob($imageDir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

        // Check if there are any images
        ?>
        <?php if (count($products) > 0): ?>
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <img src="<?php echo htmlspecialchars($product); ?>" alt="<?php echo htmlspecialchars("abc"); ?>">
                    <h2><?php echo htmlspecialchars("abc"); ?></h2>
                    <p class="price">$<?php echo htmlspecialchars("100"); ?></p>
                    <p class="description"><?php echo htmlspecialchars("abc"); ?></p>
                    <a href="product_details.php?id=<?php echo "abc"; ?>" class="btn">View Details</a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No products found.</p>
        <?php endif; ?>
    </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have questions? Reach out to us!</p>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2023 MyWebsite. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>