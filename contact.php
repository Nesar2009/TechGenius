<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://kit.fontawesome.com/64d58efce2.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body,
        input,
        textarea {
            font-family: "Poppins", sans-serif;
        }
        body {
            background-color: #121212;
            color: #ffffff;
        }
        nav {
            background: #1e1e1e;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav .menu {
            display: flex;
            gap: 1rem;
        }
        nav .menu a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s;
        }
        nav .menu a:hover {
            color: orange;
        }
        .container {
            position: relative;
            width: 100%;
            min-height: 100vh;
            padding: 2rem;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form {
            width: 100%;
            max-width: 820px;
            background-color: #1e1e1e;
            border-radius: 10px;
            box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            overflow: hidden;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }
        .contact-form {
            background-color: #333333;
            position: relative;
        }
        .circle {
            border-radius: 50%;
            background: linear-gradient(135deg, transparent 20%, #4a4a4a);
            position: absolute;
        }
        .circle.one {
            width: 130px;
            height: 130px;
            top: 130px;
            right: -40px;
        }
        .circle.two {
            width: 80px;
            height: 80px;
            top: 10px;
            right: 30px;
        }
        .contact-form:before {
            content: "";
            position: absolute;
            width: 26px;
            height: 26px;
            background-color: #333333;
            transform: rotate(45deg);
            top: 50px;
            left: -13px;
        }
        form {
            padding: 2.3rem 2.2rem;
            z-index: 10;
            overflow: hidden;
            position: relative;
        }
        .title {
            color: #fff;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
            margin-bottom: 0.7rem;
        }
        .input-container {
            position: relative;
            margin: 1rem 0;
        }
        .input {
            width: 100%;
            outline: none;
            border: 2px solid #4a4a4a;
            background: none;
            padding: 0.6rem 1.2rem;
            color: #fff;
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            border-radius: 25px;
            transition: 0.3s;
        }
        textarea.input {
            padding: 0.8rem 1.2rem;
            min-height: 150px;
            border-radius: 22px;
            resize: none;
            overflow-y: auto;
        }
        .input-container label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            padding: 0 0.4rem;
            color: #4a4a4a;
            font-size: 0.9rem;
            font-weight: 400;
            pointer-events: none;
            z-index: 1000;
            transition: 0.5s;
        }
        .input-container.textarea label {
            top: 1rem;
            transform: translateY(0);
        }
        .btn {
            padding: 0.6rem 1.3rem;
            background-color: #4a4a4a;
            border: 2px solid #4a4a4a;
            font-size: 0.95rem;
            color: #fff;
            line-height: 1;
            border-radius: 25px;
            outline: none;
            cursor: pointer;
            transition: 0.3s;
            margin: 0;
        }
        .btn:hover {
            background-color: transparent;
            color: #4a4a4a;
        }
        .input-container span {
            position: absolute;
            top: 0;
            left: 25px;
            transform: translateY(-50%);
            font-size: 0.8rem;
            padding: 0 0.4rem;
            color: transparent;
            pointer-events: none;
            z-index: 500;
        }
        .input-container span:before,
        .input-container span:after {
            content: "";
            position: absolute;
            width: 10%;
            opacity: 0;
            transition: 0.3s;
            height: 5px;
            background-color: #4a4a4a;
            top: 50%;
            transform: translateY(-50%);
        }
        .input-container span:before {
            left: 50%;
        }
        .input-container span:after {
            right: 50%;
        }
        .input-container.focus label {
            top: 0;
            transform: translateY(-50%);
            left: 25px;
            font-size: 0.8rem;
        }
        .input-container.focus span:before,
        .input-container.focus span:after {
            width: 50%;
            opacity: 1;
        }
        .contact-info {
            padding: 2.3rem 2.2rem;
            position: relative;
        }
        .contact-info .title {
            color: orange;
        }
        .text {
            color: #cccccc;
            margin: 1.5rem 0 2rem 0;
        }
        .information {
            display: flex;
            color: #bbbbbb;
            margin: 0.7rem 0;
            align-items: center;
            font-size: 0.95rem;
        }
        .icon {
            width: 28px;
            margin-right: 0.7rem;
        }
        .contact-info:before {
            content: "";
            position: absolute;
            width: 110px;
            height: 100px;
            border: 22px solid #4a4a4a;
            border-radius: 50%;
            bottom: -77px;
            right: 50px;
            opacity: 0.3;
        }
        .big-circle {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: linear-gradient(to bottom, #444444, #2e2e2e);
            bottom: 50%;
            right: 50%;
            transform: translate(-40%, 38%);
        }
        .big-circle:after {
            content: "";
            position: absolute;
            width: 360px;
            height: 360px;
            background-color: #121212;
            border-radius: 50%;
            top: calc(50% - 180px);
            left: calc(50% - 180px);
        }
        .square {
            position: absolute;
            height: 400px;
            top: 50%;
            left: 50%;
            transform: translate(181%, 11%);
            opacity: 0.2;
        }
        @media (max-width: 850px) {
            .form {
                grid-template-columns: 1fr;
            }
            .contact-info:before {
                display: none;
            }
            .contact-form:before {
                display: none;
            }
            .circle {
                display: none;
            }
            .big-circle {
                display: none;
            }
            .square {
                display: none;
            }
            form,
            .contact-info {
                padding: 2.5rem 2.5rem;
            }
        }
        @media (max-width: 480px) {
            .container {
                padding: 1.5rem;
            }
            .contact-info:before {
                display: none;
            }
            .square,
            .big-circle {
                display: none;
            }
            form,
            .contact-info {
                padding: 1.7rem 1.6rem;
            }
            .text,
            .information,
            .social-media p {
                font-size: 0.8rem;
            }
            .title {
                font-size: 1.15rem;
            }
            .social-icons a {
                width: 25px;
                height: 25px;
                line-height: 25px;
            }
            .icon {
                width: 20px;
            }
            .input {
                padding: 0.4rem 1.1rem;
            }
            .btn {
                padding: 0.4rem 1.1rem;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <h1>TechGenius</h1>
        </div>
        <div class="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="reviews.html">Review</a></li>
            <li><a href="location.html">Location</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="plans.html">Subscriptions</a></li>
            <li><a href="status.html">Delivery</a></li>
        </div>
    </nav>
    <div class="container">
        <span class="big-circle"></span>
        <img src="shape.png" class="square" alt="">
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">Have questions or need assistance? Our team is here to help you with any inquiries or support you may need. Reach out to us and we’ll get back to you promptly!</p>
                <div class="info">
                    <div class="information">
                        <img src="location1.png" class="icon" alt="">
                        <p>92 Cherry Drive Uniondale, NY 11553</p>
                    </div>
                    <div class="information">
                        <img src="mail2.png" class="icon" alt="">
                        <p>techgenius@gmail.com</p>
                    </div>
                    <div class="information">
                        <img src="phone2.png" class="icon" alt="">
                        <p>123-456-789</p>
                    </div>
                </div>
               
            </div>
            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>
                <form action="index.html" autocomplete="off">
                    <h3 class="title">Contact us</h3>
                    <div class="input-container">
                        <input type="text" name="name" class="input">
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input">
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input">
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="submit" value="Send" class="btn">
                </form>
            </div>
        </div>
    </div>
    <script>
        const inputs = document.querySelectorAll(".input");

        function focusFunc() {
            let parent = this.parentNode;
            parent.classList.add("focus");
        }

        function blurFunc() {
            let parent = this.parentNode;
            if (this.value == "") {
                parent.classList.remove("focus");
            }
        }

        inputs.forEach((input) => {
            input.addEventListener("focus", focusFunc);
            input.addEventListener("blur", blurFunc);
        });
    </script>
</body>
</html>
