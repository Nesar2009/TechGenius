<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* GLOBAL STYLES */
        :root {
            --blue: #335DFF;
            --grey: #F5F5F5;
            --grey-d-1: #EEE;
            --grey-d-2: #DDD;
            --grey-d-3: #888;
            --white: #FFF;
            --dark: #222;
        }

        /* Box sizing rules */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /* Remove default margin */
        body,
        h1,
        h2,
        h3,
        h4,
        p,
        figure,
        blockquote,
        dl,
        dd {
            margin: 0;
        }

        /* Remove list styles on ul, ol elements with a list role, which suggests default styling will be removed */
        ul[role='list'],
        ol[role='list'] {
            list-style: none;
        }

        /* Set core root defaults */
        html:focus-within {
            scroll-behavior: smooth;
        }

        /* Set core body defaults */
        body {
            min-height: 100vh;
            text-rendering: optimizeSpeed;
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(90deg, var(--grey) 31px, transparent 1px) 50%, linear-gradient(180deg, var(--grey) 31px, var(--blue) 1px) 50%;
            background-size: 32px 32px;
            color: var(--dark);
        }

        /* A elements that don't have a class get default styles */
        a:not([class]) {
            text-decoration-skip-ink: auto;
        }

        /* Make images easier to work with */
        img,
        picture {
            max-width: 100%;
            display: block;
        }

        /* Inherit fonts for inputs and buttons */
        input,
        button,
        textarea,
        select {
            font: inherit;
        }

        /* Remove all animations, transitions and smooth scroll for people that prefer not to see them */
        @media (prefers-reduced-motion: reduce) {
            html:focus-within {
                scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }

        /* CHATBOX */
        .chatbox-wrapper {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 4rem;
            height: 4rem;
        }

        .chatbox-toggle {
            width: 100%;
            height: 100%;
            background: var(--blue);
            color: var(--white);
            font-size: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            cursor: pointer;
            transition: .2s;
        }

        .chatbox-toggle:active {
            transform: scale(.9);
        }

        .chatbox-message-wrapper {
            position: absolute;
            bottom: calc(100% + 1rem);
            right: 0;
            width: 420px;
            border-radius: .5rem;
            overflow: hidden;
            box-shadow: .5rem .5rem 2rem rgba(0, 0, 0, .1);
            transform: scale(0);
            transform-origin: bottom right;
            transition: .2s;
        }

        .chatbox-message-wrapper.show {
            transform: scale(1);
        }

        .chatbox-message-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: var(--white);
            padding: .75rem 1.5rem;
        }

        .chatbox-message-profile {
            display: flex;
            align-items: center;
            grid-gap: .5rem;
        }

        .chatbox-message-image {
            width: 3rem;
            height: 3rem;
            object-fit: cover;
            border-radius: 50%;
        }

        .chatbox-message-name {
            font-size: 1.125rem;
            font-weight: 600;
        }

        .chatbox-message-status {
            font-size: .875rem;
            color: var(--grey-d-3);
        }

        .chatbox-message-dropdown {
            position: relative;
        }

        .chatbox-message-dropdown-toggle {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 2.5rem;
            height: 2.5rem;
            font-size: 1.25rem;
            cursor: pointer;
            border-radius: 50%;
        }

        .chatbox-message-dropdown-toggle:hover {
            background: var(--grey);
        }

        .chatbox-message-dropdown-menu {
            list-style: none;
            margin: 0;
            position: absolute;
            top: 100%;
            right: 0;
            background: var(--white);
            padding: .5rem 0;
            width: 120px;
            box-shadow: .25rem .25rem 1.5rem rgba(0, 0, 0, .1);
            transform: scale(0);
            transform-origin: top right;
            transition: .2s;
            border-radius: .5rem;
        }

        .chatbox-message-dropdown-menu.show {
            transform: scale(1);
        }

        .chatbox-message-dropdown-menu a {
            font-size: .875rem;
            font-weight: 500;
            color: var(--dark);
            text-decoration: none;
            padding: .5rem 1rem;
            display: block;
        }

        .chatbox-message-dropdown-menu a:hover {
            background: var(--grey);
        }

        .chatbox-message-content {
            background: var(--grey);
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            grid-row-gap: 1rem;
            max-height: 300px;
            overflow-y: auto;
        }

        .chatbox-message-item {
            width: 90%;
            padding: 1rem;
        }

        .chatbox-message-item.sent {
            align-self: flex-end;
            background: var(--blue);
            color: var(--white);
            border-radius: .75rem 0 .75rem .75rem;
        }

        .chatbox-message-item.received {
            background: var(--white);
            border-radius: 0 .75rem .75rem .75rem;
            box-shadow: .25rem .25rem 1.5rem rgba(0, 0, 0, .05);
        }

        .chatbox-message-item-time {
            float: right;
            font-size: .75rem;
            margin-top: .5rem;
            display: inline-block;
        }

        .chatbox-message-bottom {
            background: var(--white);
            padding: .75rem 1.5rem;
        }

        .chatbox-message-form {
            display: flex;
            align-items: center;
            background: var(--grey);
            border-radius: .5rem;
            padding: .5rem 1.25rem;
        }

        .chatbox-message-input {
            background: transparent;
            outline: none;
            border: none;
            resize: none;
            scrollbar-width: none;
        }

        .chatbox-message-input::-webkit-scrollbar {
            display: none;
        }

        .chatbox-message-submit {
            font-size: 1.25rem;
            color: var(--blue);
            background: transparent;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .chatbox-message-no-message {
            font-size: 1rem;
            font-weight: 600;
            text-align: center;
        }

        /* BREAKPOINTS */
        @media screen and (max-width: 576px) {
            .chatbox-message-wrapper {
                width: calc(100vw - 2rem);
            }

            .chatbox-wrapper {
                bottom: 1rem;
                right: 1rem;
            }
        }
    </style>
    <title>Chatbox</title>
</head>

<body>
    <div class="chatbox-wrapper">
        <div class="chatbox-toggle">
            <i class='bx bx-message-dots'></i>
        </div>
        <div class="chatbox-message-wrapper">
            <div class="chatbox-message-header">
                <div class="chatbox-message-profile">
                    <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="chatbox-message-image">
                    <div>
                        <h4 class="chatbox-message-name">Jonathan Doe</h4>
                        <p class="chatbox-message-status">online</p>
                    </div>
                </div>
                <div class="chatbox-message-dropdown">
                    <i class='bx bx-dots-vertical-rounded chatbox-message-dropdown-toggle'></i>
                    <ul class="chatbox-message-dropdown-menu">
                        <li><a href="#">Search</a></li>
                        <li><a href="#">Report</a></li>
                    </ul>
                </div>
            </div>
            <div class="chatbox-message-content">
                <h4 class="chatbox-message-no-message">You don't have message yet!</h4>
            </div>
            <div class="chatbox-message-bottom">
                <form action="#" class="chatbox-message-form">
                    <textarea rows="1" placeholder="Type message..." class="chatbox-message-input"></textarea>
                    <button type="submit" class="chatbox-message-submit"><i class='bx bx-send'></i></button>
                </form>
            </div>
        </div>
    </div>

    <!-- Contact Us Section -->
    <section id="contact-us" style="padding: 2rem; background-color: var(--grey);">
        <header>
            <h2>Contact Us</h2>
        </header>
        <p>If you have any questions, please feel free to reach out to us. We are here to help and will get back to you as soon as possible.</p>
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Send</button>
        </form>
        <div class="social-media">
            <a href="https://facebook.com" target="_blank"><i class='bx bxl-facebook'></i></a>
            <a href="https://twitter.com" target="_blank"><i class='bx bxl-twitter'></i></a>
            <a href="https://instagram.com" target="_blank"><i class='bx bxl-instagram'></i></a>
            <a href="https://linkedin.com" target="_blank"><i class='bx bxl-linkedin'></i></a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer style="padding: 2rem; background-color: var(--grey); text-align: center;">
        <p>&copy; 2024 Chatbox. All rights reserved.</p>
    </footer>

    <script>
        // MESSAGE INPUT
        const textarea = document.querySelector('.chatbox-message-input');
        const chatboxForm = document.querySelector('.chatbox-message-form');

        textarea.addEventListener('input', function () {
            let line = textarea.value.split('\n').length;

            if (textarea.rows < 6 || line < 6) {
                textarea.rows = line;
            }

            if (textarea.rows > 1) {
                chatboxForm.style.alignItems = 'flex-end';
            } else {
                chatboxForm.style.alignItems = 'center';
            }
        });

        // TOGGLE CHATBOX
        const chatboxToggle = document.querySelector('.chatbox-toggle');
        const chatboxMessage = document.querySelector('.chatbox-message-wrapper');

        chatboxToggle.addEventListener('click', function () {
            chatboxMessage.classList.toggle('show');
        });

        // DROPDOWN TOGGLE
        const dropdownToggle = document.querySelector('.chatbox-message-dropdown-toggle');
        const dropdownMenu = document.querySelector('.chatbox-message-dropdown-menu');

        dropdownToggle.addEventListener('click', function () {
            dropdownMenu.classList.toggle('show');
        });

        document.addEventListener('click', function (e) {
            if (!e.target.matches('.chatbox-message-dropdown, .chatbox-message-dropdown *')) {
                dropdownMenu.classList.remove('show');
            }
        });

        // CHATBOX MESSAGE
        const chatboxMessageWrapper = document.querySelector('.chatbox-message-content');
        const chatboxNoMessage = document.querySelector('.chatbox-message-no-message');

        chatboxForm.addEventListener('submit', function (e) {
            e.preventDefault();

            if (isValid(textarea.value)) {
                writeMessage();
                setTimeout(autoReply, 1000);
            }
        });

        function addZero(num) {
            return num < 10 ? '0' + num : num;
        }

        function writeMessage() {
            const today = new Date();
            let message = `
                <div class="chatbox-message-item sent">
                    <span class="chatbox-message-item-text">
                        ${textarea.value.trim().replace(/\n/g, '<br>\n')}
                    </span>
                    <span class="chatbox-message-item-time">${addZero(today.getHours())}:${addZero(today.getMinutes())}</span>
                </div>
            `;
            chatboxMessageWrapper.insertAdjacentHTML('beforeend', message);
            chatboxForm.style.alignItems = 'center';
            textarea.rows = 1;
            textarea.focus();
            textarea.value = '';
            chatboxNoMessage.style.display = 'none';
            scrollBottom();
        }

        function autoReply() {
            const today = new Date();
            let message = `
                <div class="chatbox-message-item received">
                    <span class="chatbox-message-item-text">
                        Thank you for your awesome support!
                    </span>
                    <span class="chatbox-message-item-time">${addZero(today.getHours())}:${addZero(today.getMinutes())}</span>
                </div>
            `;
            chatboxMessageWrapper.insertAdjacentHTML('beforeend', message);
            scrollBottom();
        }

        function scrollBottom() {
            chatboxMessageWrapper.scrollTo(0, chatboxMessageWrapper.scrollHeight);
        }

        function isValid(value) {
            let text = value.replace(/\n/g, '');
            text = text.replace(/\s/g, '');

            return text.length > 0;
        }
    </script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</body>

</html>
