<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-color: #121212;
            color: white;
            line-height: 1.6;
            padding: 20px;
        }
        header {
            background-color: #0a0a0a;
            color: #ffffff;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
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
                background: #1a1a1a;
                flex-direction: column;
                padding: 70px 40px 0;
                transition: left 0.2s ease;
            }
            header.show-mobile-menu .navbar .menu-links {
                left: 0;
            }
            .navbar a {
                color: #fff;
            }
        }
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding-top: 100px;
        }
        .wrapper h1 {
            font-size: 3em;
            margin: 25px;
            color: orange;
        }
        .content-box {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            width: 1000px;
            margin-top: 30px;
        }
        .card {
            min-height: 220px;
            width: 320px;
            padding: 30px;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: #1E1E1E;
            margin: 10px 4px;
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, background 0.3s;
        }
        .card i {
            margin: 20px;
            color: orange;
            font-size: 3em;
        }
        .card h2 {
            margin-bottom: 12px;
            font-weight: 600;
            text-align: center;
            color: white;
        }
        .card p {
            color: #bbb;
            text-align: center;
        }
        .card:hover {
            transform: translateY(-10px);
            background: orange;
            color: black;
        }
        .card:hover i {
            color: black;
        }
        .card:hover h2,
        .card:hover p {
            color: black;
        }
        .contact-button {
            margin-top: 30px;
            padding: 10px 20px;
            font-size: 1.2em;
            color: white;
            background: orange;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .contact-button:hover {
            background: #e38e43;
        }
        @media(max-width: 991px) {
            .wrapper {
                padding: 25px;
            }
            .wrapper h1 {
                font-size: 2.5em;
                font-weight: 600;
            }
            .content-box {
                flex-direction: column;
                width: 100%;
            }
            .card {
                min-width: 300px;
                margin: 10px auto;
            }
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
                <li><a href="plans.html">Subscriptions</a></li>
                <li><a href="status.html">Delivery</a></li>
            </ul>
            <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
        </nav>
    </header>
    <div class="wrapper">
        <h1>Our Services</h1>
        <div class="content-box">
            <div class="card">
                <i class="bx bx-bar-chart-alt bx-md"></i>
                <h2>Marketing Services</h2>
                <p>Marketing services can include advertising, public relations, market research, and more.</p>
            </div>
            <div class="card">
                <i class="bx bx-laptop bx-md"></i>
                <h2>Website Development</h2>
                <p>Web development refers to the creating, building, and maintaining of websites.</p>
            </div>
            <div class="card">
                <i class="bx bx-user bx-md"></i>
                <h2>24/7 Call Center Services</h2>
                <p>A BPO call center is a team of outsourced agents who handle incoming and outgoing.</p>
            </div>
            <div class="card">
                <i class="bx bx-mail-send bx-md"></i>
                <h2>Big Data Analytics</h2>
                <p>Extracting valuable insights from large volumes of data to drive decision-making</p>
            </div>
            <div class="card">
                <i class="bx bx-bar-chart-alt bx-md"></i>
                <h2>Mobile App Development</h2>
                <p>Reach your audience on the go with intuitive mobile apps</p>
            </div>
            <div class="card">
                <i class="bx bx-paint bx-md"></i>
                <h2>Cloud Computing:</h2>
                <p>Harness the power of the cloud for scalability and flexibility.</p>
            </div>
            <div class="card">
                <i class="bx bx-trending-up bx-md"></i>
                <h2>SEO Optimization</h2>
                <p>Improve your website's visibility on search engines with our SEO optimization services.</p>
            </div>
            <div class="card">
                <i class="bx bx-shield bx-md"></i>
                <h2>Cybersecurity</h2>
                <p>Protect your business with our comprehensive cybersecurity solutions.</p>
            </div>
            <div class="card">
                <i class="bx bx-cart bx-md"></i>
                <h2>E-commerce Solutions</h2>
                <p>Build and grow your online store with our e-commerce solutions.</p>
            </div>
            <div class="card">
                <i class="bx bx-support bx-md"></i>
                <h2>IT Support</h2>
                <p>Get 24/7 IT support to ensure your systems are always up and running.</p>
            </div>
            <div class="card">
                <i class="bx bx-camera bx-md"></i>
                <h2>Photography Services</h2>
                <p>Professional photography services to capture your special moments.</p>
            </div>
            <div class="card">
                <i class="bx bx-video bx-md"></i>
                <h2>Video Production</h2>
                <p>High-quality video production services for all your needs.</p>
            </div>
            <div class="card">
                <i class="bx bx-paint-roll bx-md"></i>
                <h2>Graphic Design</h2>
                <p>Creative graphic design services to make your brand stand out.</p>
            </div>
            <div class="card">
                <i class="bx bx-cog bx-md"></i>
                <h2>Technical Consulting</h2>
                <p>Expert technical consulting to solve your most complex challenges.</p>
            </div>
            <div class="card">
                <i class="bx bx-money bx-md"></i>
                <h2>Financial Planning</h2>
                <p>Comprehensive financial planning services to secure your future.</p>
            </div>
        </div>
        <button class="contact-button" onclick="location.href='contact.html'">Contact Us for More</button>
    </div>
</body>
</html>
