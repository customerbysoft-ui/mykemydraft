<!-- =============================
FILE 1: index.html  (place in your web root)
Keeps your original design the same. Adds:
1) Working contact form -> send-mail.php (POST)
2) Floating chatbot widget with auto replies
============================= -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bysoft - Best Website Development Company in Delhi</title>

  <!-- SEO Meta Tags -->
  <meta name="description" content="Bysoft is a professional website development company in Delhi. We create custom websites, WordPress websites, PHP coding, e-commerce stores, and SEO-friendly business websites.">
  <meta name="keywords" content="Bysoft, Website Development Delhi, WordPress Website, PHP Website, Custom Coding, E-commerce Website, Best Website Company in Delhi, Web Design Company, Business Website">
  <meta name="author" content="Bysoft">

  <!-- Social Sharing (OG Tags) -->
  <meta property="og:title" content="Bysoft - Website Development Company in Delhi">
  <meta property="og:description" content="Get modern, responsive and SEO-friendly websites with Bysoft. WordPress, PHP coding, and custom solutions.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://yourdomain.com">
  <meta property="og:image" content="https://yourdomain.com/logo.png">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    :root { --primary:#0ff; --secondary:#8a2be2; --accent:#ff00ff; --dark:#000; --light:#fff; --gray:#ccc; }
    *{margin:0;padding:0;box-sizing:border-box}
    body{font-family:'Poppins',sans-serif;background:var(--dark);color:var(--light);overflow-x:hidden;line-height:1.6}
    h1,h2,h3,h4,h5{font-family:'Montserrat',sans-serif;font-weight:700}
    canvas{position:fixed;top:0;left:0;z-index:-1}

    /* Header Styles */
    header{text-align:center;padding:100px 20px 60px;position:relative;overflow:hidden}
    .header-content{max-width:900px;margin:0 auto;position:relative;z-index:2}
    header h1{font-size:5.5rem;text-transform:uppercase;background:linear-gradient(90deg,#00f,#0ff,#0f0,#ff0,#f00,#f0f,#00f);background-size:400% 400%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:gradient 8s infinite linear;text-shadow:0 0 20px rgba(0,255,255,.8);margin-bottom:15px;letter-spacing:2px}
    header p{font-size:1.5rem;color:var(--gray);margin-top:10px;margin-bottom:30px}
    @keyframes gradient{0%{background-position:0% 50%}100%{background-position:100% 50%}}

    /* Navigation */
    .navbar{position:fixed;top:0;left:0;width:100%;padding:20px 40px;display:flex;justify-content:space-between;align-items:center;z-index:1000;background:rgba(0,0,0,.8);backdrop-filter:blur(10px);transition:all .3s ease}
    .navbar.scrolled{padding:15px 40px;box-shadow:0 5px 15px rgba(0,255,255,.2)}
    .logo{font-size:1.8rem;font-weight:700;color:var(--primary);text-decoration:none;display:flex;align-items:center}
    .logo-icon{width:45px;height:45px;margin-right:12px;display:flex;align-items:center;justify-content:center;position:relative}
    .logo-b{font-family:'Montserrat',sans-serif;font-weight:800;font-size:32px;color:var(--primary);position:relative;z-index:2;text-shadow:0 0 15px rgba(0,255,255,.7)}
    .logo-circle{position:absolute;width:100%;height:100%;border:2px solid var(--primary);border-radius:50%;box-shadow:0 0 15px rgba(0,255,255,.5);animation:pulse 3s infinite alternate}
    .logo-circle::before,.logo-circle::after{content:'';position:absolute;width:100%;height:100%;border:1px solid var(--primary);border-radius:50%;opacity:.6}
    .logo-circle::before{transform:scale(1.2);animation:rotate 15s linear infinite}
    .logo-circle::after{transform:scale(1.4);animation:rotate 20s linear infinite reverse}
    @keyframes pulse{0%{box-shadow:0 0 15px rgba(0,255,255,.5)}100%{box-shadow:0 0 25px rgba(0,255,255,.8),0 0 45px rgba(0,255,255,.6)}}
    @keyframes rotate{0%{transform:scale(1.2) rotate(0)}100%{transform:scale(1.2) rotate(360deg)}}
    .logo-text{background:linear-gradient(90deg,var(--primary),var(--secondary));-webkit-background-clip:text;-webkit-text-fill-color:transparent;font-weight:700;letter-spacing:1px;text-shadow:0 0 10px rgba(0,255,255,.5)}
    .nav-links{display:flex;list-style:none}
    .nav-links li{margin:0 15px}
    .nav-links a{color:var(--light);text-decoration:none;font-size:1.1rem;font-weight:500;transition:all .3s ease;position:relative}
    .nav-links a:after{content:'';position:absolute;bottom:-5px;left:0;width:0;height:2px;background:var(--primary);transition:width .3s ease}
    .nav-links a:hover{color:var(--primary)}
    .nav-links a:hover:after{width:100%}

    /* Buttons */
    .buttons{margin:30px 0}
    .btn{display:inline-block;margin:10px 15px;padding:14px 30px;border-radius:50px;background:var(--primary);color:var(--dark);font-weight:600;font-size:1.1rem;text-decoration:none;box-shadow:0 0 20px var(--primary),0 0 40px var(--primary);transition:all .3s ease;position:relative;overflow:hidden;z-index:1;cursor:pointer;border:none}
    .btn:before{content:'';position:absolute;top:0;left:0;width:100%;height:100%;background:var(--light);opacity:0;transition:all .3s ease;z-index:-1}
    .btn:hover{transform:translateY(-5px);box-shadow:0 0 30px var(--primary),0 0 60px var(--primary)}
    .btn:hover:before{opacity:.2}
    .btn-outline{background:transparent;border:2px solid var(--primary);color:var(--primary);box-shadow:none}
    .btn-outline:hover{background:var(--primary);color:var(--dark);box-shadow:0 0 20px var(--primary),0 0 40px var(--primary)}

    /* Section */
    section{padding:80px 20px;max-width:1200px;margin:0 auto}
    .section-title{text-align:center;margin-bottom:60px;position:relative}
    .section-title h2{font-size:2.8rem;display:inline-block;margin-bottom:15px;position:relative;color:var(--light)}
    .section-title h2:after{content:'';position:absolute;bottom:-10px;left:50%;transform:translateX(-50%);width:80px;height:4px;background:linear-gradient(90deg,var(--primary),var(--secondary));border-radius:2px}
    .section-title p{color:var(--gray);font-size:1.2rem;max-width:700px;margin:0 auto}

    /* About */
    .about-content{display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:center}
    .about-text h3{font-size:2rem;margin-bottom:20px;color:var(--primary)}
    .about-text p{margin-bottom:15px;font-size:1.1rem}
    .about-features{margin-top:30px}
    .feature{display:flex;align-items:center;margin-bottom:15px}
    .feature i{color:var(--primary);font-size:1.5rem;margin-right:15px}
    .about-image{position:relative;border-radius:10px;overflow:hidden;box-shadow:0 0 30px rgba(0,255,255,.3)}
    .about-image img{width:100%;height:auto;display:block;transition:transform .5s ease}
    .about-image:hover img{transform:scale(1.05)}

    /* Services */
    .services{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:30px;margin-top:40px}
    .service-box{background:rgba(255,255,255,.05);border-radius:15px;padding:30px;box-shadow:0 0 20px rgba(0,255,255,.2);transition:all .3s ease;position:relative;overflow:hidden;z-index:1}
    .service-box:before{content:'';position:absolute;top:0;left:0;width:100%;height:100%;background:linear-gradient(135deg,rgba(0,255,255,.1),rgba(138,43,226,.1));opacity:0;transition:all .3s ease;z-index:-1}
    .service-box:hover{transform:translateY(-10px);box-shadow:0 0 30px rgba(0,255,255,.5)}
    .service-box:hover:before{opacity:1}
    .service-icon{font-size:2.5rem;margin-bottom:20px;color:var(--primary)}
    .service-box h3{font-size:1.5rem;margin-bottom:15px;color:var(--light)}
    .service-box p{color:var(--gray);margin-bottom:20px}
    .service-link{color:var(--primary);text-decoration:none;font-weight:500;display:inline-flex;align-items:center;transition:all .3s ease}
    .service-link i{margin-left:5px;transition:transform .3s ease}
    .service-link:hover i{transform:translateX(5px)}

    /* Portfolio */
    .portfolio{background:rgba(0,0,0,.3);padding:80px 20px;margin:80px 0}
    .portfolio-filters{display:flex;justify-content:center;flex-wrap:wrap;margin-bottom:40px}
    .filter-btn{padding:8px 20px;margin:5px 10px;background:transparent;border:2px solid var(--primary);color:var(--primary);border-radius:30px;cursor:pointer;font-weight:500;transition:all .3s ease}
    .filter-btn.active,.filter-btn:hover{background:var(--primary);color:var(--dark)}
    .portfolio-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:25px}
    .portfolio-item{border-radius:10px;overflow:hidden;position:relative;height:250px;box-shadow:0 0 20px rgba(0,255,255,.2)}
    .portfolio-img{width:100%;height:100%;object-fit:cover;transition:transform .5s ease}
    .portfolio-overlay{position:absolute;top:0;left:0;width:100%;height:100%;background:linear-gradient(to top,rgba(0,0,0,.8),transparent);display:flex;flex-direction:column;justify-content:flex-end;padding:20px;opacity:0;transition:all .3s ease}
    .portfolio-item:hover .portfolio-overlay{opacity:1}
    .portfolio-item:hover .portfolio-img{transform:scale(1.1)}
    .portfolio-info h3{color:var(--light);margin-bottom:10px;font-size:1.3rem}
    .portfolio-info p{color:var(--gray);font-size:.9rem}

    /* Testimonials */
    .testimonials-container{position:relative;max-width:900px;margin:0 auto;overflow:hidden}
    .testimonials{display:flex;transition:transform .5s ease}
    .testimonial{min-width:100%;padding:30px;background:rgba(255,255,255,.05);border-radius:15px;box-shadow:0 0 20px rgba(0,255,255,.2)}
    .testimonial-content{position:relative;padding:20px}
    .testimonial-content:before{content:'"';position:absolute;top:-20px;left:-10px;font-size:5rem;color:var(--primary);opacity:.3;font-family:serif}
    .testimonial-text{margin-bottom:20px;font-style:italic;color:var(--light)}
    .testimonial-author{display:flex;align-items:center}
    .author-img{width:60px;height:60px;border-radius:50%;overflow:hidden;margin-right:15px;border:2px solid var(--primary)}
    .author-img img{width:100%;height:100%;object-fit:cover}
    .author-info h4{color:var(--primary);margin-bottom:5px}
    .author-info p{color:var(--gray);font-size:.9rem}
    .testimonial-nav{display:flex;justify-content:center;margin-top:30px}
    .nav-dot{width:12px;height:12px;border-radius:50%;background:var(--gray);margin:0 8px;cursor:pointer;transition:all .3s ease}
    .nav-dot.active{background:var(--primary);transform:scale(1.3)}

    /* Contact */
    .contact-container{display:grid;grid-template-columns:1fr 1fr;gap:40px}
    .contact-info{padding-right:20px}
    .contact-info h3{font-size:1.8rem;margin-bottom:20px;color:var(--primary)}
    .contact-details{margin-bottom:30px}
    .contact-detail{display:flex;align-items:center;margin-bottom:20px}
    .contact-icon{width:50px;height:50px;border-radius:50%;background:rgba(0,255,255,.1);display:flex;align-items:center;justify-content:center;margin-right:15px;font-size:1.2rem;color:var(--primary)}
    .contact-text h4{color:var(--light);margin-bottom:5px}
    .contact-text p,.contact-text a{color:var(--gray);text-decoration:none;transition:all .3s ease}
    .contact-text a:hover{color:var(--primary)}
    .social-links{display:flex;margin-top:30px}
    .social-link{width:40px;height:40px;border-radius:50%;background:rgba(255,255,255,.1);display:flex;align-items:center;justify-content:center;margin-right:15px;color:var(--light);text-decoration:none;transition:all .3s ease}
    .social-link:hover{background:var(--primary);color:var(--dark);transform:translateY(-5px)}
    .contact-form{background:rgba(255,255,255,.05);padding:30px;border-radius:15px;box-shadow:0 0 20px rgba(0,255,255,.2)}
    .form-group{margin-bottom:20px}
    .form-control{width:100%;padding:15px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:5px;color:var(--light);font-family:'Poppins',sans-serif;transition:all .3s ease}
    .form-control:focus{outline:none;border-color:var(--primary);box-shadow:0 0 10px rgba(0,255,255,.5)}
    textarea.form-control{min-height:150px;resize:vertical}
    .form-note{font-size:.9rem;color:var(--gray);margin-top:8px}

    /* Footer */
    footer{background:rgba(0,0,0,.9);padding:60px 20px 30px;text-align:center;margin-top:80px}
    .footer-content{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:40px;text-align:left;margin-bottom:40px}
    .footer-col h4{color:var(--primary);margin-bottom:20px;font-size:1.3rem;position:relative;padding-bottom:10px}
    .footer-col h4:after{content:'';position:absolute;bottom:0;left:0;width:50px;height:2px;background:var(--primary)}
    .footer-col p{color:var(--gray);margin-bottom:20px}
    .footer-links{list-style:none}
    .footer-links li{margin-bottom:12px}
    .footer-links a{color:var(--gray);text-decoration:none;transition:all .3s ease;display:inline-block}
    .footer-links a:hover{color:var(--primary);transform:translateX(5px)}
    .footer-bottom{padding-top:30px;border-top:1px solid rgba(255,255,255,.1)}
    .footer-bottom p{color:var(--gray);font-size:.9rem}

    /* Back to Top */
    .back-to-top{position:fixed;bottom:30px;right:30px;width:50px;height:50px;border-radius:50%;background:var(--primary);color:var(--dark);display:flex;align-items:center;justify-content:center;text-decoration:none;box-shadow:0 0 20px rgba(0,255,255,.5);opacity:0;visibility:hidden;transition:all .3s ease;z-index:999}
    .back-to-top.active{opacity:1;visibility:visible}
    .back-to-top:hover{transform:translateY(-5px);box-shadow:0 0 30px rgba(0,255,255,.8)}

    /* Chatbot Widget */
    .chat-launcher{position:fixed;bottom:30px;left:30px;width:58px;height:58px;border-radius:50%;background:var(--primary);color:#000;display:flex;align-items:center;justify-content:center;box-shadow:0 10px 25px rgba(0,255,255,.4);cursor:pointer;z-index:1000;border:none}
    .chat-window{position:fixed;bottom:100px;left:30px;width:320px;max-height:70vh;background:rgba(0,0,0,.9);border:1px solid rgba(0,255,255,.3);box-shadow:0 10px 35px rgba(0,255,255,.2);border-radius:16px;display:none;flex-direction:column;overflow:hidden;z-index:1000}
    .chat-header{padding:12px 14px;background:linear-gradient(90deg,rgba(0,255,255,.2),rgba(138,43,226,.2));display:flex;align-items:center;justify-content:space-between}
    .chat-header .title{display:flex;align-items:center;gap:10px;font-weight:700}
    .chat-header .title i{color:var(--primary)}
    .chat-body{padding:12px;overflow:auto;display:flex;flex-direction:column;gap:10px}
    .msg{max-width:85%;padding:10px 12px;border-radius:12px;font-size:.95rem;line-height:1.4}
    .bot{background:rgba(0,255,255,.1);border:1px solid rgba(0,255,255,.25)}
    .user{background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);align-self:flex-end}
    .chat-input{display:flex;gap:8px;padding:10px;border-top:1px solid rgba(255,255,255,.08)}
    .chat-input input{flex:1;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,.15);background:rgba(255,255,255,.08);color:#fff}
    .chat-input button{padding:10px 14px;border-radius:10px;border:none;background:var(--primary);cursor:pointer}
    .quick-replies{display:flex;flex-wrap:wrap;gap:8px}
    .quick-replies button{background:transparent;border:1px solid rgba(0,255,255,.3);color:#fff;padding:6px 10px;border-radius:999px;cursor:pointer;font-size:.85rem}

    @media (max-width:992px){header h1{font-size:4rem}.about-content,.contact-container{grid-template-columns:1fr}.contact-info{padding-right:0;margin-bottom:40px}}
    @media (max-width:768px){header h1{font-size:3rem}.navbar{padding:15px 20px}.nav-links{display:none}.section-title h2{font-size:2.2rem}.portfolio-grid{grid-template-columns:repeat(auto-fill,minmax(250px,1fr))}}
    @media (max-width:576px){header h1{font-size:2.5rem}header p{font-size:1.2rem}.btn{padding:12px 25px;font-size:1rem;margin:8px 10px}.section-title h2{font-size:2rem}.service-box{padding:20px}.logo-icon{width:35px;height:35px}.logo-b{font-size:26px}.logo{font-size:1.5rem}.chat-window{left:12px;width:92%;bottom:90px}}
  </style>
</head>
<body>
  <canvas id="canvas"></canvas>

  <!-- Navigation -->
  <nav class="navbar">
    <a href="#" class="logo">
      <div class="logo-icon">
        <div class="logo-circle"></div>
        <div class="logo-b">B</div>
      </div>
      <span class="logo-text">BYSOFT</span>
    </a>
    <ul class="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#testimonials">Testimonials</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <!-- Header -->
  <header id="home">
    <div class="header-content">
      <h1>BYSOFT</h1>
      <p>Delhi's Premier Website Development & Digital Solutions Company</p>
      <div class="buttons">
        <a href="#contact" class="btn">Get Started</a>
        <a href="#portfolio" class="btn btn-outline">View Our Work</a>
      </div>
    </div>
  </header>

  <!-- About -->
  <section id="about">
    <div class="section-title">
      <h2>About Us</h2>
      <p>Learn more about our journey, mission, and what makes us different</p>
    </div>
    <div class="about-content">
      <div class="about-text">
        <h3>We Create Digital Experiences That Drive Growth</h3>
        <p>Bysoft is a leading Website Development Company based in Delhi, founded with a vision to help businesses establish a powerful online presence. With years of experience in the digital space, we've helped hundreds of clients achieve their business goals through cutting-edge web solutions.</p>
        <p>Our team consists of skilled developers, creative designers, and digital marketing experts who work together to deliver comprehensive solutions that not only look great but also perform exceptionally.</p>
        <div class="about-features">
          <div class="feature"><i class="fas fa-check-circle"></i><span>5+ Years of Industry Experience</span></div>
          <div class="feature"><i class="fas fa-check-circle"></i><span>200+ Successful Projects Delivered</span></div>
          <div class="feature"><i class="fas fa-check-circle"></i><span>50+ Happy Clients Across India</span></div>
          <div class="feature"><i class="fas fa-check-circle"></i><span>24/7 Customer Support</span></div>
        </div>
      </div>
      <div class="about-image">
        <img src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?auto=format&fit=crop&w=1200&q=80" alt="Bysoft Team">
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services">
    <div class="section-title">
      <h2>Our Services</h2>
      <p>Comprehensive digital solutions to transform your online presence</p>
    </div>
    <div class="services">
      <div class="service-box"><div class="service-icon"><i class="fas fa-laptop-code"></i></div><h3>Website Development</h3><p>Custom websites built with the latest technologies to ensure speed, security, and optimal performance across all devices.</p><a href="#contact" class="service-link">Get Quote <i class="fas fa-arrow-right"></i></a></div>
      <div class="service-box"><div class="service-icon"><i class="fab fa-wordpress"></i></div><h3>WordPress Development</h3><p>Professional WordPress websites with custom themes, plugins, and powerful features for easy content management.</p><a href="#contact" class="service-link">Get Quote <i class="fas fa-arrow-right"></i></a></div>
      <div class="service-box"><div class="service-icon"><i class="fas fa-shopping-cart"></i></div><h3>E-Commerce Solutions</h3><p>Complete online stores with secure payment gateways, product management, inventory tracking, and order processing.</p><a href="#contact" class="service-link">Get Quote <i class="fas fa-arrow-right"></i></a></div>
      <div class="service-box"><div class="service-icon"><i class="fas fa-search"></i></div><h3>SEO Optimization</h3><p>Comprehensive SEO services to improve your website's visibility and ranking on search engines like Google.</p><a href="#contact" class="service-link">Get Quote <i class="fas fa-arrow-right"></i></a></div>
      <div class="service-box"><div class="service-icon"><i class="fas fa-paint-brush"></i></div><h3>UI/UX Design</h3><p>User-centered designs that create seamless, intuitive experiences for your customers across all platforms.</p><a href="#contact" class="service-link">Get Quote <i class="fas fa-arrow-right"></i></a></div>
      <div class="service-box"><div class="service-icon"><i class="fas fa-server"></i></div><h3>Web Hosting</h3><p>Reliable and secure web hosting solutions with 99.9% uptime guarantee and 24/7 technical support.</p><a href="#contact" class="service-link">Get Quote <i class="fas fa-arrow-right"></i></a></div>
    </div>
  </section>

  <!-- Portfolio -->
  <section id="portfolio" class="portfolio">
    <div class="section-title">
      <h2>Our Portfolio</h2>
      <p>Explore our recent projects and see the quality of our work</p>
    </div>
    <div class="portfolio-filters">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="web">Web Design</button>
      <button class="filter-btn" data-filter="ecommerce">E-Commerce</button>
      <button class="filter-btn" data-filter="wordpress">WordPress</button>
    </div>
    <div class="portfolio-grid">
      <div class="portfolio-item" data-category="web">
        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=600&q=80" alt="Web Project" class="portfolio-img">
        <div class="portfolio-overlay"><div class="portfolio-info"><h3>Corporate Website</h3><p>Modern business website with responsive design</p></div></div>
      </div>
      <div class="portfolio-item" data-category="ecommerce">
        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=600&q=80" alt="Ecommerce Project" class="portfolio-img">
        <div class="portfolio-overlay"><div class="portfolio-info"><h3>Online Fashion Store</h3><p>E-commerce platform for fashion products</p></div></div>
      </div>
      <div class="portfolio-item" data-category="wordpress">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80" alt="WordPress Project" class="portfolio-img">
        <div class="portfolio-overlay"><div class="portfolio-info"><h3>Blog Portal</h3><p>WordPress based blogging platform</p></div></div>
      </div>
      <div class="portfolio-item" data-category="web">
        <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?auto=format&fit=crop&w=600&q=80" alt="Web Project" class="portfolio-img">
        <div class="portfolio-overlay"><div class="portfolio-info"><h3>Real Estate Portal</h3><p>Property listing and management system</p></div></div>
      </div>
      <div class="portfolio-item" data-category="ecommerce">
        <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?auto=format&fit=crop&w=600&q=80" alt="Ecommerce Project" class="portfolio-img">
        <div class="portfolio-overlay"><div class="portfolio-info"><h3>Electronics Store</h3><p>Online store for electronic gadgets</p></div></div>
      </div>
      <div class="portfolio-item" data-category="wordpress">
        <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?auto=format&fit=crop&w=600&q=80" alt="WordPress Project" class="portfolio-img">
        <div class="portfolio-overlay"><div class="portfolio-info"><h3>News Portal</h3><p>WordPress based news website</p></div></div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials">
    <div class="section-title"><h2>Client Testimonials</h2><p>What our clients say about our services and work quality</p></div>
    <div class="testimonials-container">
      <div class="testimonials">
        <div class="testimonial"><div class="testimonial-content"><p class="testimonial-text">Bysoft delivered an exceptional e-commerce website for our fashion brand. The site is not only visually stunning but also highly functional. Our sales have increased by 40% since launching the new website.</p><div class="testimonial-author"><div class="author-img"><img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Client"></div><div class="author-info"><h4>Priya Sharma</h4><p>CEO, FashionFusion</p></div></div></div></div>
        <div class="testimonial"><div class="testimonial-content"><p class="testimonial-text">The SEO work done by Bysoft has dramatically improved our online visibility. We're now ranking on the first page of Google for all our key terms, resulting in a significant increase in qualified leads.</p><div class="testimonial-author"><div class="author-img"><img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Client"></div><div class="author-info"><h4>Rahul Verma</h4><p>Marketing Director, TechSolutions</p></div></div></div></div>
        <div class="testimonial"><div class="testimonial-content"><p class="testimonial-text">Bysoft's team developed a custom web application that has streamlined our business processes. Their technical expertise and attention to detail exceeded our expectations.</p><div class="testimonial-author"><div class="author-img"><img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Client"></div><div class="author-info"><h4>Neha Gupta</h4><p>Operations Manager, EduTech Services</p></div></div></div></div>
      </div>
      <div class="testimonial-nav"><div class="nav-dot active" data-index="0"></div><div class="nav-dot" data-index="1"></div><div class="nav-dot" data-index="2"></div></div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact">
    <div class="section-title">
      <h2>Contact Us</h2>
      <p>Get in touch with us for a free consultation and project quote</p>
    </div>
    <div class="contact-container">
      <div class="contact-info">
        <h3>Let's Discuss Your Project</h3>
        <p>We're here to answer any questions you may have and create an effective solution for your business needs.</p>
        <div class="contact-details">
          <div class="contact-detail"><div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div><div class="contact-text"><h4>Our Location</h4><p>M-498, Raghubir Nagar, Delhi - 110027</p></div></div>
          <div class="contact-detail"><div class="contact-icon"><i class="fas fa-phone-alt"></i></div><div class="contact-text"><h4>Phone Number</h4><p><a href="tel:7834980726">+91 7834980726</a></p></div></div>
          <div class="contact-detail"><div class="contact-icon"><i class="fas fa-envelope"></i></div><div class="contact-text"><h4>Email Address</h4><p><a href="mailto:customerbysoft@gmail.com">customerbysoft@gmail.com</a></p></div></div>
        </div>
        <div class="social-links">
          <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://wa.me/917834980726" class="social-link" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
      <div class="contact-form">
        <!-- Updated: working POST to send-mail.php, names added, honeypot included -->
        <form id="projectForm" action="send-mail.php" method="POST" novalidate>
          <input type="text" name="_hp" style="display:none" tabindex="-1" autocomplete="off"> <!-- honeypot -->
          <div class="form-group"><input type="text" name="name" class="form-control" placeholder="Your Name" required></div>
          <div class="form-group"><input type="email" name="email" class="form-control" placeholder="Your Email" required></div>
          <div class="form-group"><input type="tel" name="phone" class="form-control" placeholder="Your Phone"></div>
          <div class="form-group">
            <select name="service" class="form-control" required>
              <option value="" disabled selected>Select Service</option>
              <option value="web-development">Website Development</option>
              <option value="wordpress">WordPress Website</option>
              <option value="ecommerce">E-Commerce Store</option>
              <option value="seo">SEO Optimization</option>
              <option value="design">UI/UX Design</option>
              <option value="hosting">Web Hosting</option>
            </select>
          </div>
          <div class="form-group"><textarea name="message" class="form-control" placeholder="Project Details" required></textarea></div>
          <div class="form-note">By submitting, you agree to be contacted by Bysoft.</div>
          <button type="submit" class="btn">Send Message</button>
        </form>
      </div>
    </div>
    <div class="buttons" style="margin-top: 40px; text-align: center;">
      <a href="tel:7834980726" class="btn">📞 Call Now</a>
      <a href="https://wa.me/917834980726" class="btn" target="_blank">💬 WhatsApp Chat</a>
      <a href="mailto:customerbysoft@gmail.com" class="btn">✉️ Email Us</a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <div class="footer-col">
        <h4>About Bysoft</h4>
        <p>Bysoft is a leading website development company in Delhi, providing cutting-edge digital solutions to businesses of all sizes.</p>
        <div class="social-links">
          <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Our Services</h4>
        <ul class="footer-links">
          <li><a href="#services">Website Development</a></li>
          <li><a href="#services">WordPress Development</a></li>
          <li><a href="#services">E-Commerce Solutions</a></li>
          <li><a href="#services">SEO Optimization</a></li>
          <li><a href="#services">UI/UX Design</a></li>
          <li><a href="#services">Web Hosting</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul class="footer-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact Info</h4>
        <div class="contact-detail"><i class="fas fa-map-marker-alt"></i><span>M-498, Raghubir Nagar, Delhi - 110027</span></div>
        <div class="contact-detail"><i class="fas fa-phone-alt"></i><span><a href="tel:7834980726">+91 7834980726</a></span></div>
        <div class="contact-detail"><i class="fas fa-envelope"></i><span><a href="mailto:customerbysoft@gmail.com">customerbysoft@gmail.com</a></span></div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2025 Bysoft. All Rights Reserved.</p>
      <p>Designed & Developed by Bysoft | Delhi's Premier Website Development Company</p>
    </div>
  </footer>

  <!-- Back to Top -->
  <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

  <!-- Particle Animation & App Scripts -->
  <script>
    // ===== Canvas Particles =====
    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext("2d");
    function sizeCanvas(){ canvas.width = window.innerWidth; canvas.height = window.innerHeight; }
    sizeCanvas();
    let particlesArray;
    class Particle{ constructor(x,y,size,speedX,speedY,color){ this.x=x; this.y=y; this.size=size; this.speedX=speedX; this.speedY=speedY; this.color=color; }
      update(){ this.x+=this.speedX; this.y+=this.speedY; if(this.size>0.2) this.size-=0.01; if(this.x<0) this.x=canvas.width; if(this.x>canvas.width) this.x=0; if(this.y<0) this.y=canvas.height; if(this.y>canvas.height) this.y=0; }
      draw(){ const g=ctx.createRadialGradient(this.x,this.y,0,this.x,this.y,this.size); g.addColorStop(0,this.color); g.addColorStop(1,'rgba(0,0,0,0)'); ctx.fillStyle=g; ctx.beginPath(); ctx.arc(this.x,this.y,this.size,0,Math.PI*2); ctx.fill(); }
    }
    function init(){ particlesArray=[]; const colors=['rgba(0,255,255,.7)','rgba(138,43,226,.7)','rgba(0,255,0,.7)','rgba(255,255,0,.7)','rgba(255,0,255,.7)']; for(let i=0;i<150;i++){ let x=Math.random()*canvas.width; let y=Math.random()*canvas.height; let size=Math.random()*5+1; let speedX=(Math.random()*1)-0.5; let speedY=(Math.random()*1)-0.5; let color=colors[Math.floor(Math.random()*colors.length)]; particlesArray.push(new Particle(x,y,size,speedX,speedY,color)); } }
    function animate(){ ctx.clearRect(0,0,canvas.width,canvas.height); for(let i=0;i<particlesArray.length;i++){ particlesArray[i].update(); particlesArray[i].draw(); if(particlesArray[i].size<=0.2){ particlesArray[i]=new Particle(Math.random()*canvas.width,Math.random()*canvas.height,Math.random()*5+1,(Math.random()*1)-0.5,(Math.random()*1)-0.5,particlesArray[i].color); } } requestAnimationFrame(animate); }
    init(); animate();
    window.addEventListener('resize',()=>{ sizeCanvas(); init(); });

    // ===== Navbar scroll effect =====
    const navbar=document.querySelector('.navbar');
    window.addEventListener('scroll',()=>{ if(window.scrollY>100){ navbar.classList.add('scrolled'); } else { navbar.classList.remove('scrolled'); } });

    // ===== Back to top =====
    const backToTopButton=document.querySelector('.back-to-top');
    window.addEventListener('scroll',()=>{ if(window.scrollY>300){ backToTopButton.classList.add('active'); } else { backToTopButton.classList.remove('active'); } });
    backToTopButton.addEventListener('click',(e)=>{ e.preventDefault(); window.scrollTo({ top:0, behavior:'smooth' }); });

    // ===== Smooth scroll =====
    document.querySelectorAll('a[href^="#"]').forEach(a=>{ a.addEventListener('click',function(e){ const id=this.getAttribute('href'); if(id==='#') return; const target=document.querySelector(id); if(target){ e.preventDefault(); window.scrollTo({ top:target.offsetTop-80, behavior:'smooth' }); } }); });

    // ===== Portfolio filtering =====
    const filterButtons=document.querySelectorAll('.filter-btn');
    const portfolioItems=document.querySelectorAll('.portfolio-item');
    filterButtons.forEach(btn=>{ btn.addEventListener('click',()=>{ filterButtons.forEach(b=>b.classList.remove('active')); btn.classList.add('active'); const v=btn.getAttribute('data-filter'); portfolioItems.forEach(item=>{ item.style.display=(v==='all'|| item.getAttribute('data-category')===v)?'block':'none'; }); }); });

    // ===== Testimonials slider =====
    const testimonialDots=document.querySelectorAll('.nav-dot');
    const testimonials=document.querySelector('.testimonials');
    let currentTestimonial=0; function showTestimonial(i){ testimonials.style.transform=`translateX(-${i*100}%)`; testimonialDots.forEach(d=>d.classList.remove('active')); testimonialDots[i].classList.add('active'); currentTestimonial=i; }
    testimonialDots.forEach((dot,i)=>{ dot.addEventListener('click',()=>showTestimonial(i)); });
    setInterval(()=>{ currentTestimonial=(currentTestimonial+1)%testimonialDots.length; showTestimonial(currentTestimonial); },5000);

    // ===== Contact Form (allow real submit) =====
    const contactForm=document.getElementById('projectForm');
    contactForm.addEventListener('submit',function(e){
      // Let it submit to PHP unless running locally without server
      // Basic front-end validation
      const required=[...contactForm.querySelectorAll('[required]')];
      const invalid=required.some(el=>!el.value.trim());
      if(invalid){ e.preventDefault(); alert('Please fill all required fields.'); }
    });

    // ===== Simple Chatbot =====
    const chatLauncher=document.createElement('button');
    chatLauncher.className='chat-launcher'; chatLauncher.title='Chat with Bysoft'; chatLauncher.innerHTML='<i class="fa-solid fa-robot"></i>';
    const chatWindow=document.createElement('div');
    chatWindow.className='chat-window';
    chatWindow.innerHTML=`
      <div class="chat-header">
        <div class="title"><i class="fa-solid fa-robot"></i><span>Bysoft Assistant</span></div>
        <button id="chatClose" class="btn btn-outline" style="padding:6px 10px;border-radius:10px">×</button>
      </div>
      <div class="chat-body" id="chatBody"></div>
      <div class="chat-input">
        <input id="chatInput" type="text" placeholder="Type your message...">
        <button id="chatSend"><i class="fa-solid fa-paper-plane"></i></button>
      </div>`;
    document.body.appendChild(chatLauncher); document.body.appendChild(chatWindow);

    const chatBody=document.getElementById('chatBody');
    const chatInput=document.getElementById('chatInput');
    const chatSend=document.getElementById('chatSend');
    const chatClose=document.getElementById('chatClose');

    function addMsg(text,from='bot'){ const div=document.createElement('div'); div.className=`msg ${from}`; div.innerHTML=text; chatBody.appendChild(div); chatBody.scrollTop=chatBody.scrollHeight; }
    function quickReplies(){ const wrap=document.createElement('div'); wrap.className='quick-replies'; const opts=['Pricing','Services','Portfolio','Talk to human','WhatsApp']; opts.forEach(o=>{ const b=document.createElement('button'); b.textContent=o; b.addEventListener('click',()=>handleUser(o)); wrap.appendChild(b); }); chatBody.appendChild(wrap); chatBody.scrollTop=chatBody.scrollHeight; }

    function greet(){ addMsg('👋 Hi! I\'m Bysoft Assistant. I can help with <b>Website Development, WordPress, E‑Commerce, SEO, UI/UX, Hosting</b>.'); addMsg('Choose a quick option or type your question.'); quickReplies(); }

    function handleUser(text){ addMsg(text,'user'); const t=text.toLowerCase(); setTimeout(()=>{
        if(t.includes('price')){ addMsg('💰 Our pricing is tailored per project. Starter websites begin from <b>₹9,999</b>. Share requirements in the <a href="#contact">contact form</a> for a detailed quote.'); }
        else if(t.includes('service')){ addMsg('🛠 Services: Website Dev, WordPress, E‑Commerce, SEO, UI/UX, Hosting. What do you need?'); }
        else if(t.includes('portfolio')){ addMsg('📂 Please check our recent work in the <a href="#portfolio">Portfolio</a> section.'); }
        else if(t.includes('human')){ addMsg('👨‍💼 Sure! Call us at <a href="tel:7834980726">+91 7834980726</a> or WhatsApp <a target="_blank" href="https://wa.me/917834980726">here</a>.'); }
        else if(t.includes('whatsapp')){ addMsg('Opening WhatsApp… <a target="_blank" href="https://wa.me/917834980726">Click here</a>.'); }
        else { addMsg('Thanks! I\'ve noted that. For a precise quote please leave details in the <a href="#contact">contact form</a>, or ask about pricing/services/portfolio.'); }
    },400); }

    chatLauncher.addEventListener('click',()=>{ chatWindow.style.display='flex'; if(!chatBody.children.length) greet(); });
    chatClose.addEventListener('click',()=>{ chatWindow.style.display='none'; });
    chatSend.addEventListener('click',()=>{ const v=chatInput.value.trim(); if(!v) return; handleUser(v); chatInput.value=''; });
    chatInput.addEventListener('keydown',(e)=>{ if(e.key==='Enter'){ chatSend.click(); } });
  </script>
</body>
</html>
