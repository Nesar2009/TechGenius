<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Location</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-color: #0a0a0a; 
            color: #ffffff; 
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding-top: 100px; 
        }
        header {
            background-color: #000000; 
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
                background: #161616;
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
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 30px 20px;
            padding: 20px;
            background-color: #161616; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            max-width: 1000px;
        }
        .map {
            margin-right: 20px;
        }
        .map iframe {
            border: 0;
            border-radius: 10px;
            width: 600px;
            height: 450px;
        }
        .map-text {
            max-width: 400px;
        }
        .map-text h2 {
            color: #f4a261; 
        }
        .map-text p {
            line-height: 1.6;
            margin: 10px 0;
        }
        .footer {
            background-color: #000000;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            width: 100%;
            margin-top: auto;
        }
        .footer ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        .footer ul li {
            margin: 0 15px;
        }
        .footer ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1em;
            transition: color 0.3s;
        }
        .footer ul li a:hover {
            color: #f4a261; 
        }
        .footer p {
            margin: 10px 0 0;
            font-size: 0.9em;
        }
        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .social-icons a {
            color: #ffffff;
            margin: 0 10px;
            font-size: 1.5em;
            transition: color 0.3s;
        }
        .social-icons a:hover {
            color: #f4a261;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <a class="logo" href="#">TechPro Solutions<span>.</span></a>
            <ul class="menu-links">
                <span id="close-menu-btn" class="material-symbols-outlined">close</span>
                <li><a href="index.html">Home</a></li>
                <li><a href="reviews.html">Review</a></li>
                <li><a href="totali3.html">Products</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="plans.html">Subscriptions</a></li>
                <li><a href="status.html">Delivery</a></li>
            </ul>
            <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
        </nav>
    </header>
    <div class="container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28825340.32553733!2d-119.71465889999996!3d28.12461359999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88de0e67c540132d%3A0xd8e906a3342c7b44!2sThe%20Tech%20Company!5e0!3m2!1sen!2s!4v1715212204104!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="map-text">
            <h2>Our Location</h2>
            <p>This is the location of our company, The Tech Company. We are located at the following address:</p>
            <p>3932 W Eau Gallie Blvd Suite 102,<br> FL 32934,<br> USA</p>
            <p>Feel free to visit us during our working hours!</p>
            <p>Monday-Friday 8am-6pm</p>
        </div>
    </div>
    <footer class="footer">
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com" target="_blank" class="fab fa-twitter"></a>
            <a href="https://instagram.com" target="_blank" class="fab fa-instagram"></a>
            <a href="https://linkedin.com" target="_blank" class="fab fa-linkedin-in"></a>
        </div>
        <p>&copy; 2024 TechPro Solutions. All rights reserved.</p>
    </footer>
    <script>
        const header = document.querySelector("header");
        const hamburgerBtn = document.querySelector("#hamburger-btn");
        const closeMenuBtn = document.querySelector("#close-menu-btn");

        hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));
        closeMenuBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));
    </script>
</body>
</html>