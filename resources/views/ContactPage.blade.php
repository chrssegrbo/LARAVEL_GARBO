<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Leftover Remix Recipe App</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
     <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">Leftover Remix</a>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#recipes">Recipes</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact" class="active">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="contact-hero" id="contact">
        <div class="container">
            <div class="hero-content">
                <h1>Get in Touch</h1>
                <p class="hero-tagline">We'd Love to Hear From You</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Let's Connect</h2>
                    <p>Whether you have a question
                    or just want to say hello, we're here to listen and help.</p>
                    <br>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email Us</h3>
                                <p>leftoverremix@support.ph</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Call Us</h3>
                                <p>(63+) 978 143 5642</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Visit Us</h3>
                                <p>123 Kitchen Street, <br>Liloan, Cebu, 6002</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h2>Send Us a Message</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
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