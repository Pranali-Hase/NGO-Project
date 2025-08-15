<?php
// Define the current section (default to 'home' if not specified)
$section = isset($_GET['section']) ? $_GET['section'] : 'home';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Surplus2Serve - <?php echo ucfirst($section); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <style>
    :root {
      --teal: #008080;
      --mustard: #FFC107;
      --white: #ffffff;
      --light-bg: #f9f9f9;
      --gray: #555;
      --text: #333;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light-bg);
      color: var(--gray);
      <?php if($section == 'contact' || $section == 'login') { ?>
      background: linear-gradient(135deg, #e8f9f9, #fffbe6, #fff);
      background-size: 400% 400%;
      animation: gradientBG 12s ease infinite;
      <?php } ?>
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .logo {
      height: 2cm;
      width: 6cm;
      object-fit: cover;
    }
    
    header {
      background: var(--white);
      color: var(--text);
      padding: 15px 30px;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: fixed;
      top: 0;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 15px;
    }

    nav ul li a {
      color: var(--teal);
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease;
      padding: 5px 10px;
      border-radius: 5px;
    }

    nav ul li a:hover {
      color: var(--mustard);
    }

    nav ul li a.active {
      color: var(--mustard);
      background-color: rgba(0, 128, 128, 0.1);
    }

    /* Home Section Styles */
    <?php if($section == 'home') { ?>
    .hero {
      position: relative;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      margin-top: 90px;
    }

    .hero video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 90%;
      object-fit: cover;
      z-index: -1;
    }

    .hero-content {
      background: rgba(255, 255, 255, 0.85);
      padding: 30px;
      border-radius: 12px;
      text-align:center;
      color: blue;
      font: bold;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .hero-content h2 {
  font-size: 36px;
  font-weight: bold;
  color: var(--mustard);
  text-shadow: 1px 1px 3px rgba(0,0,0,0.3); /* optional: adds subtle shadow for better readability */
}
    .impact-section {
      padding: 80px 20px;
      background-color: var(--white);
      text-align: center;
    }

    .impact-section h2 {
      font-size: 36px;
      color: var(--teal);
      margin-bottom: 40px;
    }

    .impact-cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .impact-card {
      background: var(--white);
      border-radius: 20px;
      box-shadow: 0 8px 24px rgba(0, 128, 128, 0.2);
      padding: 30px 20px;
      width: 250px;
      transition: transform 0.3s ease;
    }

    .impact-card:hover {
      transform: translateY(-10px);
    }

    .impact-card h3 {
      font-size: 32px;
      color: var(--mustard);
      margin-bottom: 10px;
    }

    .impact-card p {
      font-size: 18px;
      color: #444;
    }

    .image-gallery {
      max-width: 1000px;
      margin: 80px auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 40px;
    }

    .gallery-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 1s ease, transform 1s ease;
    }

    .gallery-item:nth-child(even) {
      flex-direction: row-reverse;
    }

    .gallery-item img {
      width: 400px;
      border-radius: 20px;
      box-shadow: 6px 8px 24px rgba(0, 0, 0, 0.2);
      transition: transform 0.4s;
    }

    .gallery-item img:hover {
      transform: scale(1.05);
    }

    .gallery-item .info {
      flex: 1;
      font-size: 18px;
      line-height: 1.6;
      padding: 25px;
      background: #f4f4f4;
      border-left: 5px solid var(--mustard);
      border-radius: 10px;
      color: #333;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      text-align: left;
    }

    .gallery-item.show {
      opacity: 1;
      transform: translateY(0);
    }
    <?php } ?>

    /* About Us Section Styles */
    <?php if($section == 'about') { ?>
    .container {
      max-width: 1100px;
      margin: 120px auto 40px;
      background: var(--white);
      text-align: center;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.07);
      animation: fadeIn 1.2s ease;
    }

    h2, h3 {
      color: var(--teal);
      margin-bottom: 15px;
      text-align: center;
    }

    p {
      font-size: 18px;
      line-height: 1.7;
      margin-bottom: 20px;
    }

    .cta-buttons {
      text-align: center;
      margin-top: 30px;
    }

    .cta-buttons a {
      text-decoration: none;
      background-color: var(--mustard);
      color: var(--teal);
      padding: 12px 25px;
      margin: 10px;
      border-radius: 8px;
      font-weight: 600;
      transition: 0.3s ease;
    }

    .cta-buttons a:hover {
      background-color: var(--teal);
      color: var(--white);
    }

    .slider-container {
      position: relative;
      width: 90%;
      max-width: 900px;
      margin: 40px auto;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .slider {
      display: flex;
      transition: transform 0.6s ease-in-out;
    }

    .slide {
      min-width: 100%;
      position: relative;
    }

    .slide img {
      width: 100%;
      height: 300px;
      object-fit: cover;
    }

    .caption {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(0, 0, 0, 0.5);
      color: var(--white);
      padding: 10px 20px;
      border-radius: 8px;
      font-size: 16px;
      text-align: center;
    }

    .prev, .next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0, 128, 128, 0.8);
      color: var(--white);
      border: none;
      padding: 10px 15px;
      cursor: pointer;
      border-radius: 50%;
      transition: background 0.3s ease;
    }

    .prev:hover, .next:hover {
      background: var(--mustard);
      color: var(--teal);
    }

    .prev {
      left: 10px;
    }

    .next {
      right: 10px;
    }

    .personalities {
      max-width: 1100px;
      margin: 40px auto;
      padding: 20px;
      background: var(--white);
      border-radius: 15px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.05);
    }

    .card-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .card {
      background: #fffef8;
      border-left: 5px solid var(--mustard);
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05);
      width: 250px;
      text-align: center;
      padding: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.08);
    }

    .card img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
    }

    .card h3 {
      color: var(--teal);
      font-size: 18px;
      margin-bottom: 8px;
    }

    .card p {
      font-size: 14px;
      color: var(--gray);
    }

    .service-list {
      display: flex;
      flex-direction: column;
      gap: 40px;
      margin-top: 30px;
    }

    .service-item {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
      opacity: 0;
      transform: translateY(30px);
      transition: 0.8s;
    }

    .service-item:nth-child(even) {
      flex-direction: row-reverse;
    }

    .service-item.show {
      opacity: 1;
      transform: translateY(0);
    }

    .service-item img {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      object-fit: cover;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .info {
      background-color: #e0f7f7;
      padding: 20px;
      border-radius: 10px;
      font-size: 16px;
      color: var(--gray);
      max-width: 400px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
    }

    .initiatives-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 30px;
      margin-top: 20px;
    }

    .initiative-card {
      text-align: center;
      width: 200px;
    }

    .initiative-card img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid rgba(0, 128, 128, 0.2);
      transition: transform 0.3s ease;
    }

    .initiative-card:hover img {
      transform: scale(1.05);
    }

    .initiative-card p {
      font-size: 16px;
      font-weight: 600;
      margin-top: 10px;
      color: var(--gray);
    }
    <?php } ?>

    /* Contact Section Styles */
    <?php if($section == 'contact') { ?>
    .contact-form {
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      max-width: 600px;
      margin: 120px auto;
      border-radius: 15px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1s ease-in-out;
    }

    .contact-form h2 {
      margin-bottom: 25px;
      color: var(--teal);
    }

    .contact-form label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      transition: border-color 0.3s ease;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      border-color: var(--teal);
      outline: none;
    }

    .contact-form textarea {
      resize: vertical;
      min-height: 100px;
    }

    .contact-form button {
      background-color: var(--teal);
      color: white;
      border: none;
      padding: 12px 24px;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .contact-form button:hover {
      background-color: var(--mustard);
      color: #000;
      transform: scale(1.05);
    }

    #responseMessage {
      margin-top: 15px;
      color: var(--teal);
      font-weight: 600;
      display: none;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
    }
    
    <?php } ?>

    /* Login Section Styles */
    .login-page {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 80px);
      padding: 40px 20px;
      box-sizing: border-box;
    }

    .login-container {
      width: 100%;
      max-width: 400px;
      margin: 0 auto;
    }

    .login-form {
      background: var(--white);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      width: 100%;
      text-align: center;
    }

    .login-form h2 {
      margin-bottom: 25px;
      color: var(--teal);
    }

    .login-form input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }

    .login-form input:focus {
      border-color: var(--teal);
      outline: none;
    }

    .login-form button {
      width: 100%;
      padding: 12px;
      background-color: var(--teal);
      color: var(--white);
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s;
      margin-top: 10px;
    }

    .login-form button:hover {
      background-color: var(--mustard);
      color: var(--text);
      transform: scale(1.03);
    }

    /* Team Section Styles */
    .team-container {
      max-width: 1200px;
      margin: 100px auto 50px;
      padding: 0 20px;
    }

    .team-title {
      color: var(--mustard);
      font-weight: bold;
      text-align: center;
      margin-bottom: 50px;
    }

    .team-carousel {
      max-width: 800px;
      margin: 0 auto;
    }

    .carousel-item img {
      height: 500px;
      width: 100%;
      object-fit: cover;
      border-radius: 10px;
    }

    .carousel-caption {
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      width: 80%;
      background-color: rgba(0, 128, 128, 0.8);
      border-radius: 5px;
      padding: 10px;
    }

    .carousel-caption h5 {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .carousel-caption p {
      margin-bottom: 0;
    }

    /* Common Styles */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        padding: 15px;
      }
      
      nav ul {
        flex-direction: column;
        gap: 10px;
        margin-top: 15px;
      }
      
      .logo {
        margin-bottom: 10px;
      }
      
      <?php if($section == 'home') { ?>
      .gallery-item {
        flex-direction: column;
      }
      
      .gallery-item img {
        width: 100%;
      }
      <?php } ?>
      
      <?php if($section == 'about') { ?>
      .service-item {
        flex-direction: column;
      }
      
      .initiatives-container {
        flex-direction: column;
      }
      <?php } ?>

      /* Responsive adjustments for team section */
      .team-carousel {
        max-width: 100%;
      }

      .carousel-item img {
        height: 350px;
      }

      .carousel-caption {
        width: 90%;
        padding: 8px;
      }

      .carousel-caption h5 {
        font-size: 1.2rem;
      }

      /* Login page adjustments */
      .login-page {
        min-height: calc(100vh - 120px);
        padding-top: 80px;
      }

      .login-form {
        padding: 30px 20px;
      }
    }

    @media (max-width: 576px) {
      .carousel-item img {
        height: 300px;
      }

      .carousel-caption h5 {
        font-size: 1rem;
      }

      .carousel-caption p {
        font-size: 0.8rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <img src="./Surplus2serve.png?w=5000&h=5000&fit=crop" class="logo" alt="Surplus2Serve Logo">
    <nav>
      <ul>
        <li><a href="?section=home" class="<?php echo $section == 'home' ? 'active' : ''; ?>">Home</a></li>
        <li><a href="?section=about" class="<?php echo $section == 'about' ? 'active' : ''; ?>">About Us</a></li>
        <li><a href="?section=team" class="<?php echo $section == 'team' ? 'active' : ''; ?>">Team</a></li>
        <li><a href="?section=contact" class="<?php echo $section == 'contact' ? 'active' : ''; ?>">Contact Us</a></li>
        <li><a href="?section=login" class="<?php echo $section == 'login' ? 'active' : ''; ?>">Login</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <?php if($section == 'home') { ?>
      <section class="hero">
        <video autoplay loop muted>
          <source src="./6894109-uhd-3840-2160-25fps_DHHIujHW.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="hero-content">
          <h2 >Welcome to Surplus2Serve NGO</h2>
          <p>We are dedicated to helping communities in need.</p>
        </div>
      </section>

      <section class="impact-section">
        <h2>Our Impact</h2>
        <div class="impact-cards">
          <div class="impact-card">
            <h3>50,000+</h3>
            <p>Meals Served</p>
          </div>
          <div class="impact-card">
            <h3>1,200+</h3>
            <p>Volunteers</p>
          </div>
          <div class="impact-card">
            <h3>30+</h3>
            <p>Cities Reached</p>
          </div>
        </div>
      </section>

      <section class="image-gallery">
        <div class="gallery-item">
          <a href="./1.png" target="_blank"><img src="./1.png" alt="Helping Hands"></a>
          <p class="info">Helping Hands: Bringing food to those in need and reducing waste.</p>
        </div>

        <div class="gallery-item">
          <a href="./2.png" target="_blank"><img src="./2.png" alt="Community Service"></a>
          <p class="info">Community Service: Empowering communities through food donation.</p>
        </div>

        <div class="gallery-item">
          <a href="./3.jpg" target="_blank"><img src="./3.jpg" alt="Volunteering"></a>
          <p class="info">Volunteering: Join hands and be the change for a better tomorrow.</p>
        </div>

        <div class="gallery-item">
          <a href="./4.jpg" target="_blank"><img src="./4.jpg" alt="Food Distribution"></a>
          <p class="info">Food Distribution: Ensuring surplus food reaches the needy.</p>
        </div>
      </section>

      <script>
        const galleryItems = document.querySelectorAll('.gallery-item');
        const observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('show');
            }
          });
        }, { threshold: 0.3 });

        galleryItems.forEach(item => observer.observe(item));
      </script>
    <?php } elseif($section == 'about') { ?>
      <div class="container">
        <h2>About Us</h2>
        <p>Surplus2Serve is dedicated to reducing food waste and ensuring surplus food reaches those in need...
          Established in 2025, this is an Indian development organization, impacting the lives of over 15 lakh children and their families every year. We have more than 400 projects on education, healthcare, livelihood, and women empowerment in over 2,000 remote villages and urban slums across 25 states of India.

          Surplus2Server Foundation works as a catalyst in the cycle of change, complementing and supplementing government efforts to achieve the Sustainable Development Goals. We sensitize and partner with like-minded institutions and individuals to implement high-impact programmes that enable access, enhance quality and help bring long term behavioural change at the grassroots.
        </p>
        <h3>Our Mission</h3>
        <p>To create a sustainable and hunger-free society by redistributing surplus food...</p>
      </div>

      <div class="cta-buttons">
        <a href="volunteer.html">Join as a Volunteer</a>
        <a href="donate.html">Make a Donation</a>
      </div>

      <h2 style="text-align:center; margin-top: 40px;">Our Initiatives</h2>
      <div class="slider-container">
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <div class="slider">
          <div class="slide">
            <img src="food.jpg" alt="Food Distribution">
            <div class="caption"><b>Food Collection & Distribution</b> – Sharing surplus food...</div>
          </div>
          <div class="slide">
            <img src="community.jpg" alt="Community Support">
            <div class="caption"><b>Community Support</b> – Providing meals to homeless shelters.</div>
          </div>
          <div class="slide">
            <img src="awarness.jpg" alt="Awareness Programs">
            <div class="caption"><b>Awareness & Advocacy</b> – Promoting sustainable food practices.</div>
          </div>
          <div class="slide">
            <img src="volunteer.jpg" alt="Volunteer Programs">
            <div class="caption"><b>Volunteer Programs</b> – Encouraging individuals to contribute.</div>
          </div>
        </div>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
      </div>

      <!-- Famous Personalities Section -->
      <div class="personalities">
        <h2 text-align = "center">Famous Personalities Who Donate</h2>
        <div class="card-grid">
          <div class="card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Akshay_Kumar.jpg" alt="Akshay Kumar">
            <h3>Akshay Kumar</h3>
            <p>Known for donating crores to Indian NGOs and disaster relief efforts.</p>
          </div>
          <div class="card">
            <img src="./sonusud.jpeg.jpg" alt="Sonu Sood">
            <h3>Sonu Sood</h3>
            <p>Helped thousands with food & medical assistance during COVID-19.</p>
          </div>
          <div class="card">
            <img src="deepika.jpeg.jpg" alt="Deepika Padukone">
            <h3>Deepika Padukone</h3>
            <p>Supports mental health awareness and charity through her foundation.</p>
          </div>
        </div>
      </div>
      <h2 class="section-title">How we work to make a difference</h2>

      <div class="initiatives-container">
        <div class="initiative-card">
          <img src="pmkisan.jpg" alt="PM-POSHAN Programme">
          <p>PM-POSHAN Programme</p>
        </div>
        <div class="initiative-card">
          <img src="food.jpg" alt="Breakfast">
          <p>Breakfast</p>
        </div>
        <div class="initiative-card">
          <img src="anganwadi.jpg" alt="Anganwadi Feeding">
          <p>Anganwadi Feeding</p>
        </div>
        <div class="initiative-card">
          <img src="homelessmother.jpeg.jpg" alt="Homeless Mother">
          <p>Homeless Mother</p>
        </div>
      </div>

      <div class="container">
        <h3>What We Do</h3>
        <div class="service-list">
          <div class="service-item">
            <img src="food.jpg" alt="Food">
            <p class="info"><b>Food Collection & Distribution</b> – Partnering with restaurants, supermarkets...</p>
          </div>
          <div class="service-item">
            <img src="community.jpg" alt="Community">
            <p class="info"><b>Community Support</b> – Providing food to homeless shelters...</p>
          </div>
          <div class="service-item">
            <img src="awarness.jpg" alt="Awareness">
            <p class="info"><b>Awareness & Advocacy</b> – Educating the public on food waste...</p>
          </div>
          <div class="service-item">
            <img src="volunteer.jpg" alt="Volunteer">
            <p class="info"><b>Volunteer Programs</b> – Encouraging individuals to join our cause...</p>
          </div>
        </div>
      </div>

      <script>
        const serviceItems = document.querySelectorAll('.service-item');
        const observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('show');
            }
          });
        }, { threshold: 0.2 });

        serviceItems.forEach(item => observer.observe(item));

        let index = 0;
        function moveSlide(direction) {
          const slider = document.querySelector('.slider');
          const totalSlides = document.querySelectorAll('.slide').length;
          index += direction;
          if (index < 0) index = totalSlides - 1;
          if (index >= totalSlides) index = 0;
          slider.style.transform = `translateX(-${index * 100}%)`;
        }

        setInterval(() => moveSlide(1), 5000);
      </script>
    <?php } elseif($section == 'contact') { ?>
  <section class="contact-form">
    <h2>Contact Us</h2>
    <form id="contactForm" method="POST">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Your Name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Your Email" required>

      <label for="number">Phone Number</label>
      <input type="tel" id="number" name="number" placeholder="Your Phone Number" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Your Message" required></textarea>

      <button type="submit">Send</button>
      <p id="responseMessage" style="display: none; margin-top: 15px;"></p>
    </form>
  </section>

      <script>
    document.getElementById("contactForm").addEventListener("submit", async function (event) {
    event.preventDefault();
    
    const form = this;
    const responseMessage = document.getElementById("responseMessage");
    responseMessage.style.display = "none";
    
    try {
        const formData = new FormData(form);
        const response = await fetch('contact_handler.php', {
            method: 'POST',
            body: formData
        });
        
        const data = await response.json();
        
        responseMessage.textContent = data.message;
        responseMessage.style.display = "block";
        responseMessage.style.opacity = "1";
        responseMessage.style.color = data.success ? "var(--teal)" : "red";
        
        if (data.success) {
            form.reset();
            setTimeout(() => {
                responseMessage.style.opacity = "0";
                setTimeout(() => { 
                    responseMessage.style.display = "none"; 
                }, 500);
            }, 5000);
        }
    } catch (error) {
        console.error('Error:', error);
        responseMessage.textContent = "Network error occurred. Please check your connection and try again.";
        responseMessage.style.color = "red";
        responseMessage.style.display = "block";
        responseMessage.style.opacity = "1";
    }
});
  </script>
    <?php } elseif($section == 'login') { ?>
        <div class="login-page">
    <div class="login-container">
      <form class="login-form" action="login_handler.php" method="POST">
        <h2>Admin Login</h2>
        <?php if (isset($_GET['error'])): ?>
          <div class="alert alert-danger">Invalid username or password</div>
        <?php endif; ?>
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Login</button>
      </form>
    </div>
  </div>
    <?php } elseif($section == 'team') { ?>
      <div class="team-container">
        <h2 class="team-title">Meet Our Team</h2>

        <div id="teamCarousel" class="carousel slide team-carousel" data-bs-ride="carousel">
          <!-- Indicators -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>

          <!-- Carousel items -->
          <div class="carousel-inner">
            <!-- Team Member Akshada -->
            <div class="carousel-item active">
              <img src="akshada.jpg" class="d-block w-100" alt="Akshada Gunjal">
              <div class="carousel-caption">
                <h5>Akshada Gunjal</h5>
                <p>Founder & Director</p>
              </div>
            </div>
            <!-- Team Member Pranali -->
            <div class="carousel-item">
              <img src="pranali.jpeg.jpg" class="d-block w-100" alt="Pranali Hase">
              <div class="carousel-caption">
                <h5>Pranali Hase</h5>
                <p>Project Manager</p>
              </div>
            </div>

            <!-- Team Member Siddesh -->
            <div class="carousel-item">
              <img src="sid.jpeg.jpg" class="d-block w-100" alt="Siddesh Khairnar">
              <div class="carousel-caption">
                <h5>Siddesh Khairnar</h5>
                <p>Volunteer Coordinator</p>
              </div>
            </div>

            <!-- Team Member Darshan -->
            <div class="carousel-item">
              <img src="darshan.jpg" class="d-block w-100" alt="Darshan Shinde">
              <div class="carousel-caption">
                <h5>Darshan Shinde</h5>
                <p>Community Outreach</p>
              </div>
            </div>
          </div>
          <!-- Controls -->
          <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    <?php } ?>
  </main>

  <footer style="background-color: var(--teal); color: white; padding: 40px 20px; margin-top: 60px;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h5 style="font-weight: 600; margin-bottom: 20px;">Contact Us</h5>
        <p><i class="bi bi-envelope-fill"></i> Email: info@surplus2serve.org</p>
        <p><i class="bi bi-telephone-fill"></i> Phone: +91 9876543210</p>
        <p><i class="bi bi-geo-alt-fill"></i> Address: 123 NGO Street, Mumbai, India</p>
        <a href="https://wa.me/919876543210" target="_blank" style="color: white; text-decoration: none;">
          <p style="background-color: #25D366; padding: 8px 15px; border-radius: 5px; display: inline-block; margin-top: 10px;">
            <i class="bi bi-whatsapp"></i> Chat on WhatsApp
          </p>
        </a>
      </div>
      
      <div class="col-md-4 mb-4">
        <h5 style="font-weight: 600; margin-bottom: 20px;">Our Services</h5>
        <ul style="list-style: none; padding-left: 0;">
          <li><a href="?section=about" style="color: white; text-decoration: none;">Food Redistribution</a></li>
          <li><a href="?section=about" style="color: white; text-decoration: none;">Community Support</a></li>
          <li><a href="?section=about" style="color: white; text-decoration: none;">Volunteer Programs</a></li>
          <li><a href="?section=about" style="color: white; text-decoration: none;">Awareness Campaigns</a></li>
        </ul>
      </div>
      
      <div class="col-md-4 mb-4">
        <h5 style="font-weight: 600; margin-bottom: 20px;">Follow Us</h5>
        <div class="social-icons" style="font-size: 24px;">
          <a href="https://www.instagram.com/surplus2serve" target="_blank" style="color: white; margin-right: 15px;">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://www.facebook.com/surplus2serve" target="_blank" style="color: white; margin-right: 15px;">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://twitter.com/surplus2serve" target="_blank" style="color: white; margin-right: 15px;">
            <i class="bi bi-twitter-x"></i>
          </a>
          <a href="https://www.linkedin.com/company/surplus2serve" target="_blank" style="color: white;">
            <i class="bi bi-linkedin"></i>
          </a>
        </div>
        <div style="margin-top: 20px;">
          <img src="./Surplus2serve.png" alt="Logo" style="height: 60px; width: auto; filter: brightness(0) invert(1);">
        </div>
      </div>
    </div>
    
    <hr style="border-color: rgba(255,255,255,0.1); margin: 30px 0;">
    
    <div class="text-center">
      <p style="margin-bottom: 0;">&copy; <?php echo date('Y'); ?> Surplus2Serve. All rights reserved.</p>
      <p style="margin-top: 10px; font-size: 14px;">Registered NGO under Indian Trust Act</p>
    </div>
  </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>