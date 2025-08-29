<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BySoft Cyber Cafe - CSC Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --success: #2ecc71;
            --warning: #f39c12;
        }

        body {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: white;
            line-height: 1.6;
            overflow-x: hidden;
            position: relative;
            min-height: 100vh;
        }

        /* Animated Background */
        .animated-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            overflow: hidden;
        }

        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 15s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0) scale(1);
                opacity: 0.5;
            }
            25% {
                transform: translateY(-20px) translateX(30px) scale(1.1);
                opacity: 0.7;
            }
            50% {
                transform: translateY(20px) translateX(-30px) scale(0.9);
                opacity: 0.6;
            }
            75% {
                transform: translateY(-30px) translateX(-20px) scale(1.05);
                opacity: 0.8;
            }
        }

        .grid-lines {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(52, 152, 219, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(52, 152, 219, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: gridMove 20s linear infinite;
            z-index: -1;
        }

        @keyframes gridMove {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: 50px 50px;
            }
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header Styles */
        header {
            background: rgba(44, 62, 80, 0.9);
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .header-scrolled {
            padding: 0.5rem 0;
            background: rgba(44, 62, 80, 0.95);
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .logo i {
            font-size: 2.5rem;
            margin-right: 10px;
            color: var(--accent);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(45deg, var(--accent), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 1.5rem;
            position: relative;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            padding: 0.5rem;
            border-radius: 4px;
            display: block;
            position: relative;
            overflow: hidden;
        }

        nav ul li a::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: -100%;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--accent), transparent);
            transition: left 0.5s;
        }

        nav ul li a:hover::before {
            left: 100%;
        }

        nav ul li a:hover {
            color: var(--accent);
        }

        nav ul li a.active {
            color: var(--accent);
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
            cursor: pointer;
        }

        .menu-toggle span {
            height: 3px;
            width: 100%;
            background-color: white;
            border-radius: 3px;
            transition: all 0.3s;
        }

        /* Hero Section */
        .hero {
            padding: 8rem 0 6rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
            animation: fadeInUp 1.2s ease;
        }

        .hero-buttons {
            animation: fadeInUp 1.4s ease;
        }

        .btn {
            display: inline-block;
            background: linear-gradient(45deg, var(--accent), #ff6b6b);
            color: white;
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            margin: 0.5rem;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .btn-secondary {
            background: transparent;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: white;
            color: var(--primary);
        }

        /* Services Section */
        .services {
            padding: 6rem 0;
            position: relative;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title h2 {
            font-size: 2.8rem;
            color: white;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
            animation: fadeInUp 1s ease;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }

        .section-title p {
            color: rgba(255, 255, 255, 0.8);
            max-width: 700px;
            margin: 0 auto;
            animation: fadeInUp 1.2s ease;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
        }

        .service-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.4s;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            animation: fadeIn 1s ease;
            position: relative;
            transform-style: preserve-3d;
        }

        .service-card:hover {
            transform: translateY(-15px) rotateX(5deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(231, 76, 60, 0.2), rgba(52, 152, 219, 0.2));
            opacity: 0;
            transition: opacity 0.3s;
            z-index: -1;
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .service-icon {
            background: linear-gradient(45deg, var(--secondary), var(--primary));
            color: white;
            font-size: 2.5rem;
            padding: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .service-icon i {
            position: relative;
            z-index: 1;
        }

        .service-content {
            padding: 2rem;
        }

        .service-content h3 {
            color: white;
            margin-bottom: 1.2rem;
            font-size: 1.5rem;
        }

        .service-content p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 1.8rem;
        }

        .service-price {
            color: var(--accent);
            font-weight: 600;
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
        }

        /* Query Form Section */
        .query-section {
            padding: 6rem 0;
            position: relative;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            padding: 3rem;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            animation: fadeIn 1s ease;
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, var(--primary), var(--accent));
        }

        .form-title {
            text-align: center;
            margin-bottom: 2.5rem;
            color: white;
            font-size: 2.2rem;
        }

        .form-group {
            margin-bottom: 2rem;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: 500;
            color: white;
        }

        .form-control {
            width: 100%;
            padding: 1rem 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .form-control:focus {
            border-color: var(--secondary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.3);
            background: rgba(255, 255, 255, 0.15);
        }

        textarea.form-control {
            min-height: 180px;
            resize: vertical;
        }

        .submit-btn {
            background: linear-gradient(45deg, var(--secondary), var(--primary));
            width: 100%;
            padding: 1.2rem;
            font-size: 1.2rem;
            margin-top: 1rem;
            border-radius: 8px;
        }

        .submit-btn:hover {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
        }

        /* Footer */
        footer {
            background: rgba(20, 30, 40, 0.95);
            color: white;
            padding: 5rem 0 2rem;
            position: relative;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-section h3 {
            font-size: 1.6rem;
            margin-bottom: 1.8rem;
            position: relative;
            padding-bottom: 0.8rem;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--accent);
        }

        .contact-info {
            list-style: none;
        }

        .contact-info li {
            margin-bottom: 1.2rem;
            display: flex;
            align-items: center;
        }

        .contact-info i {
            margin-right: 15px;
            color: var(--accent);
            font-size: 1.2rem;
        }

        .social-icons {
            display: flex;
            margin-top: 2rem;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 12px;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }

        .social-icons a:hover {
            background: var(--accent);
            transform: translateY(-5px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 3rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: var(--accent);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
            transition: all 0.3s;
            opacity: 0;
            visibility: hidden;
            z-index: 999;
            animation: pulse 2s infinite;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: #c0392b;
            transform: translateY(-5px) scale(1.1);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease forwards;
        }

        .fade-in-up {
            animation: fadeInUp 1s ease forwards;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: flex;
            }

            nav {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 80%;
                height: calc(100vh - 70px);
                background: rgba(44, 62, 80, 0.95);
                transition: all 0.3s;
                z-index: 999;
                backdrop-filter: blur(10px);
            }

            nav.active {
                left: 0;
            }

            nav ul {
                flex-direction: column;
                padding: 2rem;
            }

            nav ul li {
                margin: 1.5rem 0;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .section-title h2 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 576px) {
            .hero {
                padding: 6rem 0 4rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .btn {
                padding: 0.7rem 1.5rem;
                font-size: 0.9rem;
                display: block;
                margin: 0.8rem auto;
                width: 80%;
            }

            .section-title h2 {
                font-size: 1.8rem;
            }

            .form-container {
                padding: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="animated-background">
        <div class="grid-lines"></div>
        <div class="particles" id="particles"></div>
    </div>

    <!-- Header Section -->
    <header id="header">
        <div class="container">
            <div class="logo-container">
                <div class="logo" onclick="scrollToTop()">
                    <i class="fas fa-laptop-code"></i>
                    <div class="logo-text">BySoft <span>Cyber Cafe</span></div>
                </div>
                <div class="menu-toggle" id="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav id="nav">
                    <ul>
                        <li><a href="#home" class="active" onclick="toggleMenu()">Home</a></li>
                        <li><a href="#services" onclick="toggleMenu()">Services</a></li>
                        <li><a href="#query" onclick="toggleMenu()">Request Service</a></li>
                        <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Your One-Stop Solution for All CSC Services</h1>
                <p>We provide a wide range of digital services to empower our local community with technology and bridge the digital divide</p>
                <div class="hero-buttons">
                    <a href="#services" class="btn">Our Services</a>
                    <a href="#query" class="btn btn-secondary">Request Service</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>We offer comprehensive CSC services to meet all your digital needs at affordable prices</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-print"></i>
                    </div>
                    <div class="service-content">
                        <h3>Printing & Photocopy</h3>
                        <p>High quality printing, photocopy, and scanning services for all your documents.</p>
                        <p class="service-price">Starting at ₹5/page</p>
                        <button class="btn" onclick="alert('Printing Service Selected!')">Select Service</button>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-passport"></i>
                    </div>
                    <div class="service-content">
                        <h3>Government Services</h3>
                        <p>Application support for Aadhaar, PAN, voter ID, and other government documents.</p>
                        <p class="service-price">Starting at ₹50/service</p>
                        <button class="btn" onclick="alert('Government Service Selected!')">Select Service</button>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <div class="service-content">
                        <h3>Banking & Financial</h3>
                        <p>Banking transactions, bill payments, insurance, and other financial services.</p>
                        <p class="service-price">Starting at ₹20/transaction</p>
                        <button class="btn" onclick="alert('Banking Service Selected!')">Select Service</button>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="service-content">
                        <h3>Internet Services</h3>
                        <p>High-speed internet access, email setup, and online form filling assistance.</p>
                        <p class="service-price">Starting at ₹30/hour</p>
                        <button class="btn" onclick="alert('Internet Service Selected!')">Select Service</button>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <div class="service-content">
                        <h3>Document Services</h3>
                        <p>Typing, formatting, and preparing documents, applications, and resumes.</p>
                        <p class="service-price">Starting at ₹50/document</p>
                        <button class="btn" onclick="alert('Document Service Selected!')">Select Service</button>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="service-content">
                        <h3>Educational Services</h3>
                        <p>Online exam registration, course enrollment, and educational certificate services.</p>
                        <p class="service-price">Starting at ₹100/service</p>
                        <button class="btn" onclick="alert('Educational Service Selected!')">Select Service</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Query Form Section -->
    <section class="query-section" id="query">
        <div class="container">
            <div class="section-title">
                <h2>Request a Service</h2>
                <p>Tell us what services you need and we'll get back to you shortly</p>
            </div>
            <div class="form-container">
                <h3 class="form-title">Service Request Form</h3>
                <form id="service-request-form" action="https://formsubmit.co/customerbysoft@gmail.com" method="POST">
                    <input type="hidden" name="_subject" value="New Service Request from BySoft Website">
                    <input type="hidden" name="_template" value="table">
                    <input type="hidden" name="_next" value="https://yourdomain.com/thankyou.html">
                    
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <label for="service">Service Required *</label>
                        <select id="service" name="service" class="form-control" required>
                            <option value="">Select a service</option>
                            <option value="printing">Printing & Photocopy</option>
                            <option value="government">Government Services</option>
                            <option value="banking">Banking & Financial Services</option>
                            <option value="internet">Internet Services</option>
                            <option value="documents">Document Services</option>
                            <option value="education">Educational Services</option>
                            <option value="other">Other Services</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Additional Details</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Please provide details about your request"></textarea>
                    </div>
                    <button type="submit" class="btn submit-btn">Submit Request</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About BySoft</h3>
                    <p>BySoft Cyber Cafe has been serving the community since 2010, providing reliable and affordable digital services to everyone.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Main Street, Local City</li>
                        <li><i class="fas fa-phone"></i> +91 7834980726</li>
                        <li><i class="fas fa-envelope"></i> customerbysoft@gmail.com</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Business Hours</h3>
                    <ul class="contact-info">
                        <li><i class="fas fa-clock"></i> Monday-Friday: 8:00 AM - 8:00 PM</li>
                        <li><i class="fas fa-clock"></i> Saturday: 9:00 AM - 6:00 PM</li>
                        <li><i class="fas fa-clock"></i> Sunday: 10:00 AM - 2:00 PM</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 BySoft Cyber Cafe. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <script>
        // DOM Elements
        const menuToggle = document.getElementById('menuToggle');
        const nav = document.getElementById('nav');
        const backToTop = document.getElementById('backToTop');
        const header = document.getElementById('header');
        const form = document.getElementById('service-request-form');
        const particlesContainer = document.getElementById('particles');

        // Create animated particles
        function createParticles() {
            const colors = ['rgba(52, 152, 219, 0.5)', 'rgba(231, 76, 60, 0.5)', 'rgba(46, 204, 113, 0.5)', 'rgba(243, 156, 18, 0.5)'];
            
            for (let i = 0; i < 15; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random properties
                const size = Math.random() * 50 + 10;
                const color = colors[Math.floor(Math.random() * colors.length)];
                
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.background = color;
                particle.style.top = `${Math.random() * 100}%`;
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.animationDuration = `${Math.random() * 20 + 10}s`;
                particle.style.animationDelay = `${Math.random() * 5}s`;
                
                particlesContainer.appendChild(particle);
            }
        }

        // Toggle Mobile Menu
        function toggleMenu() {
            nav.classList.toggle('active');
            
            // Animate hamburger icon
            if (nav.classList.contains('active')) {
                menuToggle.children[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                menuToggle.children[1].style.opacity = '0';
                menuToggle.children[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
            } else {
                menuToggle.children[0].style.transform = 'none';
                menuToggle.children[1].style.opacity = '1';
                menuToggle.children[2].style.transform = 'none';
            }
        }

        menuToggle.addEventListener('click', toggleMenu);

        // Scroll to Top Function
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Back to Top Button
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('active');
                header.classList.add('header-scrolled');
            } else {
                backToTop.classList.remove('active');
                header.classList.remove('header-scrolled');
            }

            // Animate elements on scroll
            document.querySelectorAll('.service-card').forEach((card, index) => {
                if (window.scrollY + window.innerHeight > card.offsetTop + 100) {
                    card.style.animationDelay = `${index * 0.2}s`;
                    card.classList.add('fade-in-up');
                }
            });
        });

        // Smooth Scrolling for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Form Submission
        form.addEventListener('submit', function(e) {
            // FormSubmit will handle the submission
            // You can add additional validation here if needed
            setTimeout(() => {
                alert('Thank you for your request! We will contact you shortly.');
                form.reset();
            }, 1000);
        });

        // Initialize particles
        createParticles();

        // Initialize animations
        document.querySelectorAll('.service-card').forEach(card => {
            card.style.opacity = 0;
            card.style.transform = 'translateY(30px)';
        });

        // Trigger scroll event to check initial position
        window.dispatchEvent(new Event('scroll'));
    </script>
</body>
</html>
