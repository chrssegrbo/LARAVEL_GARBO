<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Leftover Remix Recipe App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
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

    <!-- Register Section -->
    <section class="register-section">
        <div class="container">
                <div class="form-header">
                    <div class="form-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h1>Join Leftover Remix</h1>
                    <p>Create your account and start cooking smarter</p>
                </div>

                <form class="register-form-element">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <div class="input-group">
                                <i class="fas fa-user"></i>
                                <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <div class="input-group">
                                <i class="fas fa-user"></i>
                                <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <div class="input-group">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="password" name="password" placeholder="Create a password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <div class="input-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                        </div>
                    </div>

                    <div class="form-options">
                        <label class="checkbox-container">
                            <input type="checkbox" name="terms" required>
                            <span class="checkmark"></span>
                            I agree to the Terms of Service and Privacy Policy
                        </label>
                    </div>

                    <button type="submit" class="register-btn">Create Account</button>

                    <div class="divider">
                        <span>OR</span>
                    </div>

                    <div class="social-login">
                        <button type="button" class="social-btn google">
                            <i class="fab fa-google"></i>
                            Sign up with Google
                        </button>
                        <button type="button" class="social-btn facebook">
                            <i class="fab fa-facebook-f"></i>
                            Sign up with Facebook
                        </button>
                    </div>

                    <div class="login-link">
                        <p>Already have an account? <a href="#">Login here</a></p>
                    </div>
                </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <div class="logo-container">
                        <div class="logo-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <span class="logo-text">Leftover Remix</span>
                    </div>
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