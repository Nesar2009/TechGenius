<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pricing Cards - TechGenius</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-d2VkNv5ofCZlBa56AdG9ZMCJeXE72uT6zZ1U1Y+T0O0k5Tf1Lo/14Q+YrXygh0ApyFgPcg5xNJkKxgsSoXhHhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Open Sans', sans-serif;
    }
    body {
      width: 100%;
      height: 100vh;
      background: #1e1e1e;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      color: #ffffff;
      padding-top: 100px; 
    }
    .pricing-container {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      justify-content: center;
      animation: fadeIn 1s ease-in-out;
    }
    .pricing-card {
      width: 300px;
      padding: 40px;
      background: #333;
      text-align: center;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      position: relative;
      margin: 10px;
      transition: transform 0.3s;
    }
    .pricing-card:hover {
      transform: translateY(-10px);
    }
    .pricing-card .title {
      font-size: 1.8rem;
      color: #ffffff;
      margin-bottom: 10px;
    }
    .pricing-card .price {
      color: orange;
      font-weight: 700;
      font-size: 2.2rem;
      margin: 15px 0;
    }
    .pricing-card span {
      font-size: 1.2rem;
      color: #aaaaaa;
    }
    .pricing-card .description {
      color: #bbbbbb;
      font-size: 1.1rem;
      margin: 20px 0;
    }
    .pricing-card .offer {
      display: block;
      color: #888888;
      font-size: 1rem;
      margin-top: 25px;
    }
    .subscribe-button {
      display: inline-block;
      padding: 15px 0;
      background-color: #FF6B6B;
      color: #fff;
      text-decoration: none;
      border-radius: 30px;
      font-size: 1.2rem;
      margin-top: 20px;
      width: 100%;
      font-weight: 500;
      transition: 0.2s ease;
    }
    .subscribe-button:hover {
      background: orange;
    }
    .ribbon-wrap {
      width: 150px;
      height: 150px;
      position: absolute;
      top: -10px;
      left: -10px;
      pointer-events: none;
    }
    .ribbon {
      width: 230px;
      font-size: 0.918rem;
      text-align: center;
      padding: 8px 0;
      background: #FF6B6B;
      color: #fff;
      position: absolute;
      transform: rotate(-45deg);
      right: -17px;
      top: 29%;
    }
    header {
      background-color: #15151e; 
      color: #ffffff;
      padding: 20px;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      max-width: 1200px;
      margin: 0 auto;
    }
    .navbar .logo {
      color: #fff;
      font-weight: 600;
      font-size: 2.1rem;
      text-decoration: none;
    }
    .navbar .logo span {
      color: #C06B3E;
    }
    .navbar .menu-links {
      display: flex;
      list-style: none;
      gap: 35px;
    }
    .navbar a {
      color: #fff;
      text-decoration: none;
      transition: 0.2s ease;
    }
    .navbar a:hover {
      color: #f4a261; 
    }
    #hamburger-btn, #close-menu-btn {
      color: #fff;
      cursor: pointer;
      display: none;
    }
    @media (max-width: 768px) {
      header {
        padding: 10px;
      }
      header.show-mobile-menu::before {
        content: "";
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        backdrop-filter: blur(5px);
      }
      .navbar .logo {
        font-size: 1.7rem;
      }
      #hamburger-btn, #close-menu-btn {
        display: block;
      }
      .navbar .menu-links {
        position: fixed;
        top: 0;
        left: -250px;
        width: 250px;
        height: 100vh;
        background: #fff;
        flex-direction: column;
        padding: 70px 40px 0;
        transition: left 0.2s ease;
      }
      header.show-mobile-menu .navbar .menu-links {
        left: 0;
      }
      .navbar a {
        color: #000;
      }
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="#">TechGenius<span>.</span></a>
      <ul class="menu-links">
        <span id="close-menu-btn" class="material-symbols-outlined">close</span>
        <li><a href="index.html">Home</a></li>
        <li><a href="reviews.html">Review</a></li>
        <li><a href="location.html">Location</a></li>
        <li><a href="totali3.html">Products</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="status.html">Delivery</a></li>
      </ul>
      <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
    </nav>
  </header>
  <div class="pricing-container">
    <div class="pricing-card">
      <h2 class="title">Basic Plan</h2>
      <h3 class="price">$19<span>/month</span></h3>
      <p class="description">Gain access to basic features and explore our content library.</p>
      <b class="offer">Limited time offer!</b>
      <a class="subscribe-button" href="card.html">Subscribe Now</a>
      <div class="ribbon-wrap">
        <div class="ribbon">Special Offer!</div>
      </div>
    </div>
    <div class="pricing-card">
      <h2 class="title">Standard Plan</h2>
      <h3 class="price">$29<span>/month</span></h3>
      <p class="description">Access to premium content and additional features.</p>
      <b class="offer">Act fast! Offer ends soon.</b>
      <a class="subscribe-button" href="card.html">Subscribe Now</a>
      <div class="ribbon-wrap">
        <div class="ribbon">Special Offer!</div>
      </div>
    </div>
    <div class="pricing-card">
      <h2 class="title">Premium Plan</h2>
      <h3 class="price">$49<span>/month</span></h3>
      <p class="description">Enjoy all features and priority support.</p>
      <b class="offer">Don't miss out!</b>
      <a class="subscribe-button" href="card.html">Subscribe Now</a>
      <div class="ribbon-wrap">
        <div class="ribbon">Special Offer!</div>
      </div>
    </div>
  </div>
  <script>
    const header = document.querySelector("header");
    const hamburgerBtn = document.querySelector("#hamburger-btn");
    const closeMenuBtn = document.querySelector("#close-menu-btn");

    hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));

    closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
  </script>
</body>
</html>
