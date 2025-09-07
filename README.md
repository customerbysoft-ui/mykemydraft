<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Make My Draft</title>
  <meta name="description" content="MakeMyDraft offers professional legal drafting services for agreements, contracts, and more. Fast, accurate, and reliable.">
  <meta property="og:title" content="MakeMyDraft — Professional Legal Drafting Services">
  <meta property="og:description" content="Get customized agreements, contracts & legal drafts within 72 hours. Trusted by clients across industries.">
  <meta property="og:image" content="logo.png">
  <style>
    *{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif}
    body{background:linear-gradient(135deg,#ff9a9e,#fad0c4,#fbc2eb,#a1c4fd,#c2e9fb,#fbc2eb,#fccb90,#d57eeb);background-size:600% 600%;animation:gradientBG 18s ease infinite;color:#333;line-height:1.6}
    @keyframes gradientBG{0%{background-position:0% 50%}50%{background-position:100% 50%}100%{background-position:0% 50%}}
    header{position:sticky;top:0;width:100%;padding:1.2rem 2rem;background:rgba(255,255,255,0.85);backdrop-filter:blur(12px);box-shadow:0 4px 25px rgba(0,0,0,0.2);z-index:1000;display:flex;justify-content:space-between;align-items:center}
    header h1{font-size:1.6rem;background:linear-gradient(90deg,#ff512f,#f09819,#38ef7d,#11998e,#0575e6,#dd2476);-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:textShine 6s linear infinite;background-size:300%}
    @keyframes textShine{0%{background-position:0%}100%{background-position:300%}}
    nav{display:flex;align-items:center}
    nav a{margin-left:20px;color:#333;font-weight:600;text-decoration:none;transition:all .3s}
    nav a:hover{color:#0575e6}
    .menu-toggle{display:none;flex-direction:column;cursor:pointer}
    .menu-toggle span{height:3px;width:25px;background:#333;margin:4px 0;border-radius:5px}
    @media(max-width:768px){nav{display:none;flex-direction:column;background:rgba(255,255,255,0.95);position:absolute;top:60px;right:20px;padding:1rem;border-radius:.8rem;box-shadow:0 4px 12px rgba(0,0,0,0.15)}nav.active{display:flex}.menu-toggle{display:flex}}
    section{padding:4rem 2rem;text-align:center}
    .hero h2{font-size:2.6rem;margin-bottom:1rem;color:#fff;text-shadow:0 3px 12px rgba(0,0,0,.4)}
    .hero p{color:#f9f9f9;font-size:1.2rem;max-width:650px;margin:auto}
    .cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:1.8rem;margin-top:2rem}
    .card{background:linear-gradient(135deg,#f6d365,#fda085,#fbc2eb,#a1c4fd,#fccb90,#e0c3fc);background-size:400% 400%;animation:cardGradient 12s ease infinite;padding:2rem;border-radius:1.3rem;box-shadow:0 8px 25px rgba(0,0,0,.25);transition:transform .3s,box-shadow .3s}
    .card:hover{transform:translateY(-12px) scale(1.04);box-shadow:0 12px 30px rgba(0,0,0,.3)}
    @keyframes cardGradient{0%{background-position:0% 50%}50%{background-position:100% 50%}100%{background-position:0% 50%}}
    .card h3{margin-bottom:1rem;font-size:1.5rem;color:#222}
    .card p{color:#333}
    .contact{background:linear-gradient(135deg,#89f7fe,#66a6ff,#8e54e9,#4776e6);color:#fff;padding:3rem 2rem;border-radius:1.6rem;box-shadow:0 8px 28px rgba(0,0,0,.35);max-width:750px;margin:4rem auto}
    .contact h2{margin-bottom:1rem;font-size:2.2rem}
    .contact form{display:flex;flex-direction:column;gap:1rem;margin-top:1.5rem}
    .contact input,.contact textarea{padding:.9rem;border:none;border-radius:.9rem;outline:none;font-size:1rem}
    .contact button{padding:1rem;border:none;border-radius:.9rem;background:linear-gradient(90deg,#ff512f,#dd2476,#1fa2ff,#12c2e9);color:#fff;font-size:1.1rem;font-weight:bold;cursor:pointer;transition:.3s}
    .contact button:hover{opacity:.9;transform:scale(1.05)}
    .stats{display:flex;justify-content:center;gap:2rem;margin:3rem 0;flex-wrap:wrap}
    .stat{font-size:2rem;font-weight:bold;color:#fff;text-shadow:0 2px 6px rgba(0,0,0,.4)}
    footer{text-align:center;padding:2rem;background:linear-gradient(90deg,#141e30,#243b55);color:#fff;margin-top:3rem}
    footer .social a{margin:0 8px;color:#fff;text-decoration:none;font-size:1.2rem}
  </style>
</head>
<body>
  <header>
    <h1>Make My Draft</h1>
    <div class="menu-toggle" id="menu-toggle">
      <span></span><span></span><span></span>
    </div>
    <nav id="nav">
      <a href="#services">Services</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <section class="hero">
    <h2>Professional Legal Drafting Services</h2>
    <p>We specialize in all types of agreements and legal drafting with accuracy, speed, and confidentiality.</p>
    <div class="stats">
      <div class="stat" data-target="2000">0+</div>
      <div class="stat" data-target="500">0+</div>
      <div class="stat" data-target="150">0+</div>
    </div>
  </section>

  <section id="services">
    <h2 style="color:#fff;text-shadow:0 3px 12px rgba(0,0,0,.5)">Our Services</h2>
    <div class="cards">
      <div class="card"><h3>Agreements</h3><p>Drafting of all types of agreements with legal accuracy.</p></div>
      <div class="card"><h3>Legal Notices</h3><p>Well-structured notices ensuring clarity and legal compliance.</p></div>
      <div class="card"><h3>Contracts</h3><p>Custom contracts tailored to your business or personal needs.</p></div>
      <div class="card"><h3>Corporate Drafting</h3><p>Articles, MoUs, policies and other corporate drafting solutions.</p></div>
    </div>
  </section>

  <section id="contact" class="contact">
    <h2>Contact Us</h2>
    <p>Get in touch for professional drafting services.</p>
    <form id="contactForm" action="https://formspree.io/f/yourFormID" method="POST">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" rows="5" placeholder="Your Message"></textarea>
      <button type="submit">Send Message</button>
    </form>
    <p id="formStatus" style="margin-top:1rem;"></p>
  </section>

  <footer>
    <p>&copy; 2025 Make My Draft. All rights reserved.</p>
    <p>Email: contact@makemydraft.com | Phone: +91-9876543210</p>
    <div class="social">
      <a href="#">LinkedIn</a>
      <a href="#">Facebook</a>
      <a href="#">Instagram</a>
    </div>
  </footer>

  <script>
    // Mobile Menu Toggle
    const menuToggle=document.getElementById('menu-toggle');
    const nav=document.getElementById('nav');
    menuToggle.addEventListener('click',()=>{nav.classList.toggle('active')});

    // Stats Counter
    const counters=document.querySelectorAll('.stat');
    const speed=200;
    const animate=()=>{
      counters.forEach(counter=>{
        const updateCount=()=>{
          const target=+counter.getAttribute('data-target');
          const count=+counter.innerText.replace('+','');
          const inc=target/speed;
          if(count<target){counter.innerText=Math.ceil(count+inc)+"+";setTimeout(updateCount,20)}
          else{counter.innerText=target+"+"}
        };
        updateCount();
      });
    };
    window.addEventListener('load',animate);

    // Form Submission with Feedback
    const form=document.getElementById('contactForm');
    const status=document.getElementById('formStatus');
    form.addEventListener('submit',async(e)=>{
      e.preventDefault();
      status.innerText="Sending...";
      try{
        const data=new FormData(form);
        const res=await fetch(form.action,{method:'POST',body:data,headers:{'Accept':'application/json'}});
        if(res.ok){status.innerText="Message sent successfully!";form.reset()}else{status.innerText="Oops! Something went wrong."}
      }catch(err){status.innerText="Network error. Please try again."}
    });
  </script>
</body>
</html>
