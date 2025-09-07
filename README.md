<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>MakeMyDraft — Professional Legal Drafting Services</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    :root{
      --bg:#f7f9fb; --card:#ffffff; --muted:#718096; --brand-1:#0f2240; --brand-2:#2d74da; --accent:#e9b949; --success:#25D366; --glass: rgba(255,255,255,0.6);
      --radius:14px; --shadow: 0 10px 30px rgba(15,34,64,0.08); --speed: 500ms;
    }
    *{box-sizing:border-box; margin:0; padding:0}
    html,body{height:100%}
    body{
      margin:0;font-family:'Poppins',sans-serif;background:radial-gradient(circle at 10% 10%, rgba(45,116,218,0.03), transparent),var(--bg);color:#1f2937;line-height:1.5;-webkit-font-smoothing:antialiased;
    }
    .container{max-width:1200px;margin:0 auto;padding:0 20px}

    /* ===== Header ===== */
    header{
      position:fixed;inset:0 0 auto 0;z-index:1200;
      background:linear-gradient(180deg, rgba(255,255,255,0.9), rgba(255,255,255,0.7));
      backdrop-filter:blur(6px);box-shadow:0 4px 18px rgba(2,6,23,0.05);
      transition: all 0.3s ease;
    }
    header.scrolled {
      padding: 5px 0;
      background:linear-gradient(180deg, rgba(255,255,255,0.95), rgba(255,255,255,0.85));
    }
    .header-row{
      display:flex;align-items:center;justify-content:space-between;gap:12px;padding:14px 0
    }
    .logo{
      display:flex;align-items:center;gap:12px
    }
    .logo .icon{
      font-size:28px;color:var(--brand-2);
      background:linear-gradient(135deg,var(--brand-1),var(--brand-2));
      -webkit-background-clip:text;-webkit-text-fill-color:transparent;
      transition: transform 0.3s ease;
    }
    .logo:hover .icon {
      transform: rotate(15deg);
    }
    .logo h1{
      font-family:'Playfair Display',serif;font-size:20px;margin:0;color:var(--brand-1);
      background: linear-gradient(90deg, var(--brand-1), var(--brand-2));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    nav ul{
      display:flex;gap:20px;list-style:none;margin:0;padding:0
    }
    nav a{
      color:#1f2937;text-decoration:none;font-weight:600;padding:8px;border-radius:10px;transition:all .25s;
      position: relative;
    }
    nav a:after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 50%;
      background: linear-gradient(90deg, var(--brand-2), var(--accent));
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }
    nav a:hover:after {
      width: 80%;
    }
    nav a:hover{
      color:var(--brand-2);
    }
    .cta{display:flex;gap:10px}
    .btn{
      display:inline-flex;align-items:center;gap:10px;padding:12px 24px;border-radius:999px;border:none;
      background:linear-gradient(90deg,var(--accent),#d4a63a);color:#111;font-weight:700;cursor:pointer;
      box-shadow:0 8px 30px rgba(233,185,73,0.12);text-decoration:none;transition:all 0.3s ease;
      position: relative;
      overflow: hidden;
    }
    .btn:before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
      transition: all 0.4s ease;
    }
    .btn:hover:before {
      left: 100%;
    }
    .btn:hover{
      transform: translateY(-3px);
      box-shadow:0 12px 30px rgba(233,185,73,0.25);
    }
    .btn-wht{
      background:linear-gradient(90deg,#25D366,#128C7E);color:white;
      box-shadow:0 8px 30px rgba(37,211,102,0.15);
    }
    .btn-wht:hover {
      box-shadow:0 12px 30px rgba(37,211,102,0.25);
    }

    /* ===== Hero ===== */
    .hero{
      padding:140px 0 80px;position:relative;overflow:hidden;
      background: linear-gradient(120deg, rgba(247,249,251,0.8) 40%, rgba(45,116,218,0.05) 100%);
    }
    .hero-grid{
      display:grid;grid-template-columns:1fr 420px;gap:40px;align-items:center
    }
    .hero-left h2{
      font-family:'Playfair Display',serif;font-size:42px;margin:0 0 14px;color:var(--brand-1);line-height:1.05;
    }
    .typed{
      color:var(--brand-2);display:inline-block;
      background: linear-gradient(90deg, var(--brand-2), var(--brand-1));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .hero-left p{
      color:var(--muted);margin:0 0 20px;font-size:1.05rem;
    }
    .hero-cards{
      display:flex;gap:12px;flex-wrap:wrap
    }
    .small-card{
      background:linear-gradient(180deg,var(--card),#fbfdff);padding:14px;border-radius:12px;
      box-shadow:var(--shadow);min-width:170px;transition: all 0.3s ease;
    }
    .small-card:hover {
      transform: translateY(-5px);
      box-shadow:0 15px 30px rgba(15,34,64,0.12);
    }
    .hero-visual{
      position:relative;width:100%;height:100%;min-height:320px;border-radius:18px;
      background:linear-gradient(135deg,var(--brand-2),var(--brand-1));box-shadow:0 20px 60px rgba(15,34,64,0.18);
      overflow:hidden;color:white;
      animation: float 6s ease-in-out infinite;
    }
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    .hero-visual .blob{
      position:absolute;right:-60px;top:-60px;opacity:0.12;filter:blur(30px);transform:rotate(20deg);width:420px;height:420px
    }
    .hero-visual .overlay{
      position:absolute;inset:0;padding:26px;display:flex;flex-direction:column;justify-content:center;gap:14px
    }
    .visual-stat{display:flex;gap:18px;align-items:center}
    .visual-stat .num{font-weight:800;font-size:26px}

    /* ===== Features ===== */
    .section{padding:70px 0}
    .section .title{
      display:flex;flex-direction:column;align-items:center;margin-bottom:30px;text-align:center;
    }
    .section h3{
      font-family:'Playfair Display',serif;color:var(--brand-1);margin:0;font-size:32px;position:relative;
      padding-bottom:15px;
    }
    .section h3:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 3px;
      background: linear-gradient(90deg, var(--brand-2), var(--accent));
      border-radius: 3px;
    }
    .grid{
      display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:20px
    }
    .card{
      background:var(--card);padding:26px;border-radius:16px;box-shadow:var(--shadow);
      border:1px solid rgba(15,34,64,0.03);transition:transform .35s,box-shadow .35s;
      position: relative;
      overflow: hidden;
    }
    .card:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(90deg, var(--brand-2), var(--accent));
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.3s ease;
    }
    .card:hover:before {
      transform: scaleX(1);
    }
    .card:hover{
      transform:translateY(-8px);box-shadow:0 28px 70px rgba(15,34,64,0.12)
    }
    .icon-round{
      width:62px;height:62px;border-radius:12px;background:linear-gradient(135deg,var(--brand-1),var(--brand-2));
      display:flex;align-items:center;justify-content:center;color:white;font-size:20px;
      transition: transform 0.3s ease;
    }
    .card:hover .icon-round {
      transform: rotate(15deg) scale(1.1);
    }

    /* ===== Categories (dynamic + filterable) ===== */
    .filters{
      display:flex;gap:12px;flex-wrap:wrap;margin-bottom:18px;justify-content:center;
    }
    .chip{
      padding:8px 14px;border-radius:999px;background:#f1f5f9;border:1px solid rgba(15,34,64,0.03);
      cursor:pointer;transition: all 0.3s ease;
    }
    .chip:hover {
      transform: translateY(-2px);
      box-shadow:0 5px 15px rgba(15,34,64,0.1);
    }
    .chip.active{
      background:linear-gradient(90deg,var(--brand-2),var(--brand-1));color:white;
      box-shadow:0 5px 15px rgba(15,34,64,0.2);
    }
    .category-card{display:flex;flex-direction:column}
    .category-header{
      display:flex;justify-content:space-between;align-items:center;padding:18px;border-radius:12px;
      background:linear-gradient(90deg,#ffffff, #fbfdff);box-shadow:var(--shadow);cursor:pointer;
      transition: all 0.3s ease;
    }
    .category-header:hover {
      background:linear-gradient(90deg,#f7f9fb, #f1f5f9);
    }
    .category-body{
      padding:18px;max-height:0;overflow:hidden;transition:max-height var(--speed) cubic-bezier(.2,.9,.3,1)
    }
    .category-body.open{max-height:420px}

    /* ===== Contact ===== */
    .contact-grid{display:grid;grid-template-columns:1fr 460px;gap:28px}
    .contact-card{
      background:linear-gradient(180deg,#fff,#fbfdff);padding:24px;border-radius:16px;box-shadow:var(--shadow)
    }
    .form-group{margin-bottom:14px;position:relative}
    input,textarea,select{
      width:100%;padding:12px;border-radius:10px;border:1px solid rgba(15,34,64,0.06);background:#fff;
      transition: all 0.3s ease;
    }
    input:focus,textarea:focus,select:focus {
      outline: none;
      border-color: var(--brand-2);
      box-shadow:0 0 0 3px rgba(45,116,218,0.1);
    }
    .submit-row{display:flex;gap:12px;align-items:center}

    /* Floating Whatsapp */
    .floating{
      position:fixed;right:24px;bottom:24px;width:66px;height:66px;border-radius:50%;
      display:flex;align-items:center;justify-content:center;
      background:linear-gradient(90deg,#25D366,#128C7E);box-shadow:0 12px 40px rgba(37,211,102,0.18);
      z-index:1100;transition: all 0.3s ease;
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0% { transform: scale(1); box-shadow:0 12px 40px rgba(37,211,102,0.18); }
      50% { transform: scale(1.1); box-shadow:0 12px 40px rgba(37,211,102,0.3); }
      100% { transform: scale(1); box-shadow:0 12px 40px rgba(37,211,102,0.18); }
    }
    .floating:hover {
      transform: scale(1.1) rotate(5deg);
    }

    /* Footer */
    footer{padding:40px 0;margin-top:30px;background:var(--brand-1);color:white;}
    .footer-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:24px}
    .muted{color:var(--muted)}
    footer .muted {color:rgba(255,255,255,0.7)}

    /* ===== small screens ===== */
    @media (max-width:960px){.hero-grid{grid-template-columns:1fr}.contact-grid{grid-template-columns:1fr}.container{padding:0 16px}}

    /* ===== animations ===== */
    .fade-up{opacity:0;transform:translateY(14px);transition:opacity .6s ease,transform .6s ease}
    .fade-up.in{opacity:1;transform:none}

    /* toast notification */
    .toast{
      position:fixed;left:50%;transform:translateX(-50%);bottom:28px;background:#111;color:#fff;
      padding:12px 18px;border-radius:12px;box-shadow:0 12px 40px rgba(2,6,23,0.3);z-index:1300;
      opacity:0;pointer-events:none;transition:opacity .25s
    }
    .toast.show{opacity:1;pointer-events:auto}

    /* particles canvas */
    #particle-canvas{position:absolute;inset:0;pointer-events:none;z-index:0}

    /* Testimonials */
    .testimonials {
      padding: 70px 0;
      background: linear-gradient(180deg, #f7f9fb 0%, #f1f5f9 100%);
    }
    .testimonial-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }
    .testimonial-card {
      background: white;
      padding: 24px;
      border-radius: 16px;
      box-shadow: var(--shadow);
      position: relative;
    }
    .testimonial-card:before {
      content: '"';
      position: absolute;
      top: 15px;
      right: 20px;
      font-size: 60px;
      color: rgba(45,116,218,0.1);
      font-family: 'Playfair Display', serif;
    }
    .testimonial-content {
      margin-bottom: 20px;
      font-style: italic;
    }
    .testimonial-author {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .author-avatar {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--brand-1), var(--brand-2));
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
    }

    /* Stats section */
    .stats {
      padding: 70px 0;
      background: linear-gradient(135deg, var(--brand-1) 0%, var(--brand-2) 100%);
      color: white;
      text-align: center;
    }
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 30px;
    }
    .stat-item {
      padding: 20px;
    }
    .stat-number {
      font-size: 42px;
      font-weight: 800;
      margin-bottom: 10px;
      font-family: 'Playfair Display', serif;
    }
    .stat-label {
      opacity: 0.9;
    }

    /* Process section */
    .process {
      padding: 70px 0;
    }
    .process-steps {
      display: flex;
      justify-content: space-between;
      margin-top: 50px;
      position: relative;
    }
    .process-steps:before {
      content: '';
      position: absolute;
      top: 30px;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--brand-2), var(--accent));
      z-index: 1;
    }
    .process-step {
      text-align: center;
      position: relative;
      z-index: 2;
      flex: 1;
    }
    .step-number {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--brand-1), var(--brand-2));
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      margin: 0 auto 15px;
      font-size: 20px;
    }
    .step-title {
      font-weight: 600;
      margin-bottom: 10px;
      color: var(--brand-1);
    }
  </style>
</head>
<body>
  <header id="header">
    <div class="container">
      <div class="header-row">
        <div class="logo">
          <i class="fas fa-file-contract icon"></i>
          <h1>MakeMyDraft</h1>
        </div>

        <nav>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#process">Process</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>

        <div class="cta">
          <a class="btn" href="#contact">Get Started</a>
          <a class="btn btn-wht" href="https://wa.me/919990026028?text=Hello%20MakeMyDraft,%20I%20need%20help%20with%20a%20legal%20document" target="_blank"><i class="fab fa-whatsapp"></i> Chat</a>
        </div>
      </div>
    </div>
  </header>

  <main style="padding-top:78px">
    <!-- HERO -->
    <section id="home" class="hero container">
      <canvas id="particle-canvas"></canvas>
      <div class="hero-grid">
        <div class="hero-left">
          <h2>Professionally Drafted Legal Documents — <span class="typed">Agreements, Contracts & More</span></h2>
          <p>At MakeMyDraft, we provide professionally customised drafts of a wide range of Agreements and Contracts tailored to your specific requirements. Fast, accurate and legally compliant.</p>

          <div class="hero-cards" aria-hidden="true">
            <div class="small-card">
              <strong>Turnaround</strong>
              <div class="muted">2 - 72 hours</div>
            </div>
            <div class="small-card">
              <strong>Support</strong>
              <div class="muted">Email, Phone & WhatsApp</div>
            </div>
            <div class="small-card">
              <strong>Formats</strong>
              <div class="muted">DOCX, PDF</div>
            </div>
          </div>

          <div style="margin-top:18px;display:flex;gap:12px;flex-wrap:wrap">
            <a class="btn" href="#services">See Services</a>
            <a class="btn btn-wht" href="https://wa.me/919990026028?text=Hello%20MakeMyDraft,%20I%20need%20help%20with%20a%20legal%20document" target="_blank"><i class="fab fa-whatsapp"></i> Start Chat</a>
          </div>
        </div>

        <div class="hero-visual" aria-hidden="true">
          <!-- decorative blurred blob -->
          <svg class="blob" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            <g transform="translate(300,300)">
              <path d="M120,-156C153,-141,179,-112,191,-79C203,-46,201,-8,191,23C181,55,164,84,138,103C112,122,78,131,44,146C10,162,-25,184,-55,174C-85,163,-110,119,-131,79C-151,38,-167,2,-165,-36C-162,-75,-141,-115,-113,-138C-85,-160,-50,-165,-20,-153C9,-141,18,-144,49,-159C80,-174,86,-171,120,-156Z" fill="#ffffff" opacity="0.07"></path>
            </g>
          </svg>

          <div class="overlay">
            <div style="display:flex;justify-content:space-between;align-items:center">
              <div>
                <div style="font-size:13px;opacity:0.9">Trusted by</div>
                <div style="display:flex;gap:8px;margin-top:8px">
                  <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='30'><rect rx='6' width='100' height='30' fill='%23ffffff' opacity='0.06'/><text x='12' y='20' fill='white' font-size='11' font-family='Poppins'>Company A</text></svg>" alt="logo" style="height:34px;border-radius:8px;"/>
                  <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='30'><rect rx='6' width='100' height='30' fill='%23ffffff' opacity='0.04'/><text x='12' y='20' fill='white' font-size='11' font-family='Poppins'>Client B</text></svg>" alt="logo" style="height:34px;border-radius:8px;"/>
                </div>
              </div>
              <div style="text-align:right">
                <div style="font-size:12px;opacity:0.9">Avg Delivery</div>
                <div style="font-weight:800;font-size:22px">24 hrs</div>
              </div>
            </div>

            <div style="margin-top:auto;display:flex;justify-content:space-between;gap:12px;align-items:center">
              <div style="display:flex;gap:10px;align-items:center">
                <div style="width:72px;height:72px;border-radius:12px;background:rgba(255,255,255,0.08);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:18px">DOCX</div>
                <div>
                  <div style="font-size:13px;opacity:0.9">Delivery Format</div>
                  <div style="font-weight:700">Editable & Signed</div>
                </div>
              </div>

              <div style="display:flex;gap:8px;align-items:center">
                <button class="btn" onclick="document.querySelector('#contact input[name=name]').focus()">Request a Draft</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
      <div class="container">
        <div class="stats-grid">
          <div class="stat-item">
            <div class="stat-number" id="stat1">0</div>
            <div class="stat-label">Documents Drafted</div>
          </div>
          <div class="stat-item">
            <div class="stat-number" id="stat2">0</div>
            <div class="stat-label">Happy Clients</div>
          </div>
          <div class="stat-item">
            <div class="stat-number" id="stat3">0</div>
            <div class="stat-label">Legal Experts</div>
          </div>
          <div class="stat-item">
            <div class="stat-number" id="stat4">0</div>
            <div class="stat-label">Years Experience</div>
          </div>
        </div>
      </div>
    </section>

    <!-- FEATURES -->
    <section id="features" class="section container">
      <div class="title">
        <h3>Why Choose MakeMyDraft</h3>
        <div class="muted">Fast, reliable, and professional legal drafting services for all your needs</div>
      </div>

      <div class="grid" id="featuresGrid">
        <div class="card fade-up">
          <div style="display:flex;gap:14px;align-items:center"><div class="icon-round"><i class="fas fa-bolt"></i></div><div>
            <strong>Fast Turnaround</strong>
            <div class="muted">Get drafts in 2 to 72 hours depending on complexity</div>
          </div></div>
        </div>

        <div class="card fade-up">
          <div style="display:flex;gap:14px;align-items:center"><div class="icon-round"><i class="fas fa-user-tie"></i></div><div>
            <strong>Expert Team</strong>
            <div class="muted">Experienced legal professionals drafting with precision</div>
          </div></div>
        </div>

        <div class="card fade-up">
          <div style="display:flex;gap:14px;align-items:center"><div class="icon-round"><i class="fas fa-shield-alt"></i></div><div>
            <strong>Legal Compliance</strong>
            <div class="muted">Drafts aligned with current regulations and standards</div>
          </div></div>
        </div>

        <div class="card fade-up">
          <div style="display:flex;gap:14px;align-items:center"><div class="icon-round"><i class="fas fa-file-signature"></i></div><div>
            <strong>Custom Templates</strong>
            <div class="muted">Tailored clauses, plain-language explanations and redline-ready files</div>
          </div></div>
        </div>
      </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="process container">
      <div class="title">
        <h3>Our Simple Process</h3>
        <div class="muted">Get your legal documents drafted in just a few easy steps</div>
      </div>

      <div class="process-steps">
        <div class="process-step">
          <div class="step-number">1</div>
          <div class="step-title">Submit Requirements</div>
          <div class="muted">Share your needs via form or WhatsApp</div>
        </div>
        <div class="process-step">
          <div class="step-number">2</div>
          <div class="step-title">Expert Drafting</div>
          <div class="muted">Our legal experts create your document</div>
        </div>
        <div class="process-step">
          <div class="step-number">3</div>
          <div class="step-title">Review & Revise</div>
          <div class="muted">We incorporate your feedback</div>
        </div>
        <div class="process-step">
          <div class="step-number">4</div>
          <div class="step-title">Final Delivery</div>
          <div class="muted">Receive your polished document</div>
        </div>
      </div>
    </section>

    <!-- SERVICES / CATEGORIES -->
    <section id="services" class="section container">
      <div class="title">
        <h3>Our Legal Drafting Services</h3>
        <div class="muted">We specialize in creating customized legal documents for various industries and personal needs</div>
      </div>

      <div class="filters" role="tablist" aria-label="Service filters">
        <button class="chip active" data-filter="all">All</button>
        <button class="chip" data-filter="business">Commercial & Business</button>
        <button class="chip" data-filter="finance">Banking & Finance</button>
        <button class="chip" data-filter="health">Pharmaceutical & Healthcare</button>
        <button class="chip" data-filter="personal">Family & Personal</button>
        <button class="chip" data-filter="it">IT & Technology</button>
        <button class="chip" data-filter="media">Media & Entertainment</button>
      </div>

      <div class="grid" id="categoryGrid">
        <!-- category items (data attributes for filtering) -->
        <div class="category-card card" data-cat="business">
          <div class="category-header" onclick="toggleCat(this)">
            <strong>Commercial & Business Agreements</strong>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="category-body">
            <p>A Commercial and Business Agreement is a legally enforceable contract entered into between two or more parties in the course of carrying out commercial or business activities.</p>
            <ul>
              <li>Partnership Agreement</li>
              <li>Sales & Purchase Agreements</li>
              <li>Vendors Agreements</li>
              <li>Consultants Agreements</li>
              <li>Service Providers Agreement</li>
              <li>Joint Venture Agreement</li>
              <li>Franchise Agreement</li>
              <li>Shareholders' Agreement</li>
            </ul>
          </div>
        </div>

        <div class="category-card card" data-cat="finance">
          <div class="category-header" onclick="toggleCat(this)">
            <strong>Banking & Finance Agreements</strong>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="category-body">
            <p>A Banking and Finance Agreement is a legally binding contract between financial institutions and other parties which governs terms related to financial resources.</p>
            <ul>
              <li>Loan Agreement</li>
              <li>Guarantee Agreement</li>
              <li>Risk Management Agreement</li>
              <li>Lending Agreements</li>
              <li>Security Agreement</li>
              <li>Credit Facility Agreement</li>
              <li>Term Loan Agreement</li>
              <li>Revolving Credit Agreement</li>
            </ul>
          </div>
        </div>

        <div class="category-card card" data-cat="health">
          <div class="category-header" onclick="toggleCat(this)">
            <strong>Pharmaceutical & Healthcare</strong>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="category-body">
            <p>A pharmaceutical & Healthcare agreement is a commercial and regulatory contract formed between entities to collaborate in research, development, and marketing of drugs or treatments.</p>
            <ul>
              <li>Research Collaboration Agreement</li>
              <li>Contract Manufacturing Agreement (CMA)</li>
              <li>Clinical & Medical Services Agreements</li>
              <li>Toll & Supply Manufacturing Agreement</li>
              <li>Licensing & Commercialisation Agreements</li>
              <li>Regulatory & Compliance Agreements</li>
              <li>Hospital Affiliation Agreement</li>
            </ul>
          </div>
        </div>

        <div class="category-card card" data-cat="personal">
          <div class="category-header" onclick="toggleCat(this)">
            <strong>Family & Personal Agreements</strong>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="category-body">
            <p>A Family and Personal Agreement is a legally recognized agreement made between individuals—usually family members or close personal relations.</p>
            <ul>
              <li>Family Settlement & Partition Agreements</li>
              <li>Marriage Settlement & Divorce Agreements</li>
              <li>Child Custody Agreement</li>
              <li>Gift Agreement</li>
              <li>Prenuptial Agreement (Prenup)</li>
              <li>Adoption Agreement</li>
              <li>Property Sharing Agreement</li>
              <li>Power of Attorney, Will & Deed</li>
            </ul>
          </div>
        </div>

        <div class="category-card card" data-cat="it">
          <div class="category-header" onclick="toggleCat(this)">
            <strong>IT & Technology Agreements</strong>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="category-body">
            <p>An IT and Technology Agreement is a legally binding contract that governs the development, licensing, transfer, implementation, support, use, or protection of information technology systems.</p>
            <ul>
              <li>Software Development Agreements</li>
              <li>Cloud & Hosting Agreements</li>
              <li>Data & Security Agreements</li>
              <li>E-Commerce & Digital Platform Agreements</li>
              <li>IT Consulting & Freelance Agreements</li>
              <li>Emerging Tech Agreements</li>
              <li>IP & Confidentiality Agreements</li>
            </ul>
          </div>
        </div>

        <div class="category-card card" data-cat="media">
          <div class="category-header" onclick="toggleCat(this)">
            <strong>Media & Entertainment</strong>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="category-body">
            <p>Media Agreements govern the creation, use, distribution, and/or licensing of media content across various platforms.</p>
            <ul>
              <li>Influencer Agreement</li>
              <li>Content Creator Agreement</li>
              <li>Film Production Agreement</li>
              <li>Music Distribution Agreement</li>
              <li>Broadcasting Agreement</li>
              <li>Media Rights Agreement</li>
              <li>Endorsement Agreement</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="title">
          <h3>What Our Clients Say</h3>
          <div class="muted">Hear from businesses and individuals who have used our services</div>
        </div>

        <div class="testimonial-grid">
          <div class="testimonial-card fade-up">
            <div class="testimonial-content">
              "MakeMyDraft provided us with a comprehensive partnership agreement in less than 24 hours. Their attention to detail and understanding of our specific needs was impressive."
            </div>
            <div class="testimonial-author">
              <div class="author-avatar">RS</div>
              <div>
                <div>Raj Sharma</div>
                <div class="muted">Tech Startup Founder</div>
              </div>
            </div>
          </div>

          <div class="testimonial-card fade-up">
            <div class="testimonial-content">
              "I needed a customized rental agreement quickly, and MakeMyDraft delivered exactly what I needed at an affordable price. The process was smooth and professional."
            </div>
            <div class="testimonial-author">
              <div class="author-avatar">PM</div>
              <div>
                <div>Priya Mehta</div>
                <div class="muted">Property Owner</div>
              </div>
            </div>
          </div>

          <div class="testimonial-card fade-up">
            <div class="testimonial-content">
              "As a small business owner, I appreciate having access to professional legal drafting without the high costs of a law firm. MakeMyDraft has been a reliable partner for all our contractual needs."
            </div>
            <div class="testimonial-author">
              <div class="author-avatar">AK</div>
              <div>
                <div>Amit Kumar</div>
                <div class="muted">Small Business Owner</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="section container">
      <div class="title">
        <h3>Get in Touch</h3>
        <div class="muted">Our dedicated legal drafting team is prepared to handle your requirements with precision and efficiency.</div>
      </div>

      <div class="contact-grid">
        <div class="contact-card">
          <h4 style="font-family:'Playfair Display',serif">How We Can Help</h4>
          <p class="muted">Simply share your needs, and we will deliver a professionally drafted document within 2 to 72 hours—depending on the complexity and nature of your request. We prioritize accuracy, timeliness, and legal compliance in every draft we deliver.</p>

          <div style="margin-top:18px">
            <h4>Contact Information</h4>
            <p class="muted"><i class="fas fa-map-marker-alt"></i> Office No: 111-112, 1st Floor, Rishal Complex, Shiva Market, Pitampura, New Delhi - 110034</p>
            <p class="muted"><i class="fas fa-phone"></i> 9990026028, 9891056969</p>
            <p class="muted"><i class="fas fa-envelope"></i> info@makemydraft.com</p>
            <p class="muted"><i class="fab fa-whatsapp"></i> <a href="https://wa.me/919990026028" style="color:inherit">Chat on WhatsApp</a></p>
          </div>
        </div>

        <div class="contact-card">
          <h4 style="font-family:'Playfair Display',serif">Send Us Your Requirements</h4>
          <form id="requirementsForm" novalidate>
            <div class="form-group"><input name="name" placeholder="Your Name" required></div>
            <div class="form-group"><input type="email" name="email" placeholder="Your Email" required></div>
            <div class="form-group"><input type="tel" name="phone" placeholder="Your Phone"></div>
            <div class="form-group">
              <select name="type" required>
                <option value="" disabled selected>Select Agreement Type</option>
                <option>Commercial & Business</option>
                <option>Banking & Finance</option>
                <option>Pharmaceutical & Healthcare</option>
                <option>Family & Personal</option>
                <option>IT & Technology</option>
                <option>Media & Entertainment</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group"><textarea name="details" placeholder="Describe your requirements in detail..." required></textarea></div>

            <div class="submit-row">
              <button type="submit" class="btn">Submit Requirements</button>
              <div class="muted" style="font-size:13px">We will reply within 24 hours</div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="container">
      <div class="footer-grid">
        <div>
          <h4 style="font-family:'Playfair Display',serif; color:white">MakeMyDraft</h4>
          <p class="muted">Professional legal drafting services for businesses and individuals. Fast, reliable, and compliant with current regulations.</p>
        </div>
        <div>
          <h4 style="color:white">Quick Links</h4>
          <ul style="list-style:none;padding:0;margin:0">
            <li><a href="#home" style="color:rgba(255,255,255,0.7)">Home</a></li>
            <li><a href="#services" style="color:rgba(255,255,255,0.7)">Services</a></li>
            <li><a href="#process" style="color:rgba(255,255,255,0.7)">Process</a></li>
            <li><a href="#contact" style="color:rgba(255,255,255,0.7)">Contact</a></li>
          </ul>
        </div>
        <div>
          <h4 style="color:white">Legal</h4>
          <ul style="list-style:none;padding:0;margin:0">
            <li><a href="#" style="color:rgba(255,255,255,0.7)">Terms of Service</a></li>
            <li><a href="#" style="color:rgba(255,255,255,0.7)">Privacy Policy</a></li>
            <li><a href="#" style="color:rgba(255,255,255,0.7)">Disclaimer</a></li>
          </ul>
        </div>
      </div>

      <div style="text-align:center;margin-top:18px;color:rgba(255,255,255,0.5);font-size:13px">&copy; 2023 MakeMyDraft.com. All rights reserved.</div>
    </footer>

    <!-- Floating whatsapp -->
    <a class="floating" href="https://wa.me/919990026028?text=Hello%20MakeMyDraft,%20I%20need%20help%20with%20a%20legal%20document" target="_blank" aria-label="Chat on WhatsApp"><i class="fab fa-whatsapp" style="color:white;font-size:22px"></i></a>

    <div id="toast" class="toast" role="status">Message sent — we will contact you shortly</div>
  </main>

  <script>
    /* ===== small helpers ===== */
    const $ = (s,root=document)=> root.querySelector(s);

    // Animate fade-up on intersection
    const fadeEls = document.querySelectorAll('.fade-up');
    const io = new IntersectionObserver((es)=>{ es.forEach(e=>{ if(e.isIntersecting) e.target.classList.add('in'); }); },{threshold:0.12});
    fadeEls.forEach(el=>io.observe(el));

    // Particle background (lightweight)
    const canvas = document.getElementById('particle-canvas');
    const ctx = canvas.getContext('2d');
    let W, H, particles=[];
    function resize(){W=canvas.width=canvas.offsetWidth; H=canvas.height=canvas.offsetHeight}
    function rand(min,max){return Math.random()*(max-min)+min}
    function initParticles(){particles=[]; for(let i=0;i<25;i++){particles.push({x:rand(0,W), y:rand(0,H), r:rand(1,3.5), vx:rand(-0.2,0.2), vy:rand(-0.4,0.4), alpha:rand(.06,.18)})}}
    function step(){ctx.clearRect(0,0,W,H); for(let p of particles){p.x+=p.vx; p.y+=p.vy; if(p.x< -20) p.x=W+20; if(p.x>W+20) p.x=-20; if(p.y< -20) p.y=H+20; if(p.y>H+20) p.y=-20; ctx.beginPath(); ctx.fillStyle='rgba(45,116,218,'+p.alpha+')'; ctx.arc(p.x,p.y,p.r,0,Math.PI*2); ctx.fill()} requestAnimationFrame(step)}
    function startParticles(){resize(); initParticles(); step();}
    window.addEventListener('resize', ()=>{ if(canvas) resize(); });
    startParticles();

    // Toggle category card
    function toggleCat(el){ const body = el.nextElementSibling; body.classList.toggle('open'); const icon = el.querySelector('i'); icon.classList.toggle('fa-chevron-down'); icon.classList.toggle('fa-chevron-up'); }

    // Filter chips
    document.querySelectorAll('.chip').forEach(ch=>{
      ch.addEventListener('click', ()=>{
        document.querySelectorAll('.chip').forEach(c=>c.classList.remove('active'));
        ch.classList.add('active');
        const f = ch.getAttribute('data-filter');
        document.querySelectorAll('#categoryGrid .category-card').forEach(card=>{
          if(f==='all') { card.style.display='block'; } else { card.style.display = (card.dataset.cat===f? 'block' : 'none'); }
        });
      });
    });

    // Smooth anchor scrolling
    document.querySelectorAll('a[href^="#"]').forEach(a=>a.addEventListener('click', function(e){ const tgt = document.querySelector(this.getAttribute('href')); if(tgt){ e.preventDefault(); window.scrollTo({top: tgt.offsetTop - 70, behavior:'smooth'}); }}));

    // Form submit (fake AJAX + validation) -> you can replace with real API endpoint
    const form = document.getElementById('requirementsForm');
    form.addEventListener('submit', (ev)=>{
      ev.preventDefault(); const data = new FormData(form);
      // basic validation
      if(!data.get('name') || !data.get('email') || !data.get('type') || !data.get('details')){ showToast('Please fill all required fields'); return; }
      // disable & simulate
      const submitBtn = form.querySelector('button[type="submit"]'); submitBtn.disabled = true; submitBtn.innerText = 'Sending...';
      setTimeout(()=>{
        submitBtn.disabled = false; submitBtn.innerText = 'Submit Requirements';
        form.reset(); showToast('Thank you! We received your requirements.');
      }, 1100);

      // TODO: replace with fetch('/api/lead', {method:'POST', body:data})
    });

    function showToast(text='Saved'){ const t = document.getElementById('toast'); t.textContent = text; t.classList.add('show'); setTimeout(()=>t.classList.remove('show'), 2800); }

    // small accessibility: close opened category if click outside
    document.addEventListener('click', e=>{
      const isCatHeader = e.target.closest('.category-header');
      if(!isCatHeader){ document.querySelectorAll('.category-body.open').forEach(b=>b.classList.remove('open')); }
    });

    // Small progressive enhancement: keyboard focus for header links
    document.querySelectorAll('nav a').forEach(a=>a.addEventListener('focus', ()=>a.style.outline='2px solid rgba(45,116,218,0.12)'));

    // Optional: small typed effect for hero (cycles short phrases)
    (function typed(){ const el = document.querySelector('.typed'); const texts = ['Agreements', 'Contracts', 'NDAs', 'Policies']; let i=0, j=0, dir=1; function tick(){ const txt = texts[i].slice(0,j); el.textContent = txt; if(dir===1 && j<texts[i].length) j++; else if(dir===1){ dir=-1; setTimeout(tick,900); return; } else { j--; if(j===0){ dir=1; i=(i+1)%texts.length; } }
        setTimeout(tick, dir===1?120:40);
    } tick(); })();

    // Header scroll effect
    window.addEventListener('scroll', function() {
      const header = document.getElementById('header');
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });

    // Animated stats counter
    function animateValue(id, start, end, duration) {
      const obj = document.getElementById(id);
      if (!obj) return;
      
      let startTimestamp = null;
      const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
          window.requestAnimationFrame(step);
        }
      };
      window.requestAnimationFrame(step);
    }

    // Start counters when stats section is in view
    const statsSection = document.querySelector('.stats');
    const statsObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateValue('stat1', 0, 1250, 2000);
          animateValue('stat2', 0, 350, 2000);
          animateValue('stat3', 0, 15, 2000);
          animateValue('stat4', 0, 8, 2000);
          statsObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    if (statsSection) {
      statsObserver.observe(statsSection);
    }
  </script>
</body>
</html>
