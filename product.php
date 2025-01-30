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
            <h2>Our Product</h2>
            <div class="product-details">
        <img src="https://www.html-code-generator.com/images/slider/3.png" alt="<?php echo htmlspecialchars("hello"); ?>">
        <p class="price">$<?php echo htmlspecialchars("500"); ?></p>
        <p class="description"><?php echo htmlspecialchars("hello"); ?></p>
        <a href="index.php" class="btn">Back to Products</a>
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