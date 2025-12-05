<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leftover Remix - Recipe App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <h1>Transform Your Fridge into Delicious Meals</h1>
            <p class="hero-description">
                Don't let food go to waste! Leftover Remix helps you discover amazing recipes 
                using what's already in your kitchen. 
            </p>
            <a href="#features" class="cta-button">Discover How It Works</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <h2 class="section-title">Why Choose Leftover Remix?</h2>
            <p class="section-subtitle">Smart cooking made simple for everyone</p>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-peso-sign"></i>
                    </div>
                    <h3>Budget-Friendly Cooking</h3>
                    <p>Save money by using ingredients you already own instead of buying more groceries.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Reduce Food Waste</h3>
                    <p>Help the environment by using every ingredient before it expires, creating a sustainable kitchen.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Quick & Easy</h3>
                    <p>Get recipe suggestions in seconds with step-by-step instructions for hassle-free cooking.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Preview -->
    <section class="how-it-works-preview">
        <div class="container">
            <h2 class="section-title">How Simple Is It?</h2>
            <p class="section-subtitle">Three easy steps to amazing meals</p>
            
            <div class="steps-preview">
                <div class="step-preview">
                    <div class="step-number">1</div>
                    <h3>Enter Your Ingredients</h3>
                    <p>Tell us what's in your fridge</p>
                </div>
                
                <div class="step-preview">
                    <div class="step-number">2</div>
                    <h3>Get Suggestions</h3>
                    <p>Receive personalized recipe ideas</p>
                </div>
                
                <div class="step-preview">
                    <div class="step-number">3</div>
                    <h3>Cook & Enjoy</h3>
                    <p>Follow simple instructions and enjoy</p>
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