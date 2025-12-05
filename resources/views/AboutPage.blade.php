<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Leftover Remix Recipe App</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <div class="logo-container">
                    <div class="logo-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <span class="logo-text">Leftover Remix</span>
                </div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#recipes">Recipes</a></li>
                    <li><a href="#about" class="active">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="about-hero" id="about">
        <div class="container">
            <div class="hero-content">
                <h1>About Leftover Remix</h1>
                <p class="hero-tagline">Transforming Food Waste into Culinary Magic</p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision-section">
        <div class="container">
            <div class="mission-vision-grid">
                <div class="mission-vision-grid">
                <div class="mission-card">
                    <div class="card-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To reduce food waste by helping people discover creative and delicious recipes using ingredients they already have in their kitchen.</p>
                </div>
                <div class="vision-card">
                    <div class="card-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>A world where no food goes to waste, and every meal is an opportunity for creativity and sustainability.</p>
                </div>
            </div>
        </div>
    </section>

<!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <a href="#" class="logo">
                        <div class="logo-container">
                            <div class="logo-icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <span class="logo-text">Leftover Remix</span>
                        </div>
                    </a>
                </div>
                
                <div class="footer-nav">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#recipes">Recipes</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-social">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Leftover Remix. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>