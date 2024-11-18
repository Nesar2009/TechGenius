<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Your Co-workers</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: #121212;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .message-page {
            width: 100%;
            max-width: 800px;
            background: #1E1E1E;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .message-page h1 {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: #FFA500;
            margin-bottom: 20px;
        }
        .message-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }
        .message-form input, .message-form textarea {
            width: 100%;
            max-width: 600px;
            background: #2E2E2E;
            border: 2px solid #FFA500;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
            color: #ffffff;
            font-size: 1rem;
            transition: background 0.3s ease;
        }
        .message-form input:focus, .message-form textarea:focus {
            background: #3A3A3A;
            outline: none;
        }
        .message-form textarea {
            resize: none;
            height: 150px;
        }
        .message-form button {
            width: 100%;
            max-width: 600px;
            background: #FFA500;
            border: none;
            padding: 15px;
            border-radius: 8px;
            color: #1E1E1E;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .message-form button:hover {
            background: #ff8800;
        }
        .messages {
            width: 100%;
            max-width: 600px;
            max-height: 400px;
            overflow-y: auto;
            padding-right: 10px;
            margin-bottom: 20px;
        }
        .messages::-webkit-scrollbar {
            width: 8px;
        }
        .messages::-webkit-scrollbar-track {
            background: #2E2E2E;
        }
        .messages::-webkit-scrollbar-thumb {
            background-color: #FFA500;
            border-radius: 8px;
        }
        .message {
            background: #2E2E2E;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
            animation: fadeIn 0.5s;
        }
        .message .sender {
            font-weight: 700;
            margin-bottom: 5px;
            color: #FFA500;
        }
        .message .time {
            font-size: 0.875rem;
            margin-bottom: 10px;
            color: #888888;
        }
        .message .text {
            font-size: 1rem;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .back-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .back-button a {
            font-size: 16px;
            color: #FFA500;
            text-decoration: none;
            padding: 10px 20px;
            border: 2px solid #FFA500;
            border-radius: 35px;
            transition: all 0.3s ease;
        }
        .back-button a:hover {
            background: #FFA500;
            color: #1E1E1E;
        }
    </style>
</head>
<body>
    <div class="message-page">
        <h1>Contact Your Co-workers</h1>
        <form class="message-form">
            <input type="text" id="sender" placeholder="Your Name" required>
            <textarea id="message-text" placeholder="Type your message here..." required></textarea>
            <button type="button" onclick="sendMessage()">Send Message</button>
        </form>
        <div class="messages" id="messages">
            <!-- Messages will appear here -->
        </div>
        <div class="back-button">
            <a href="work.html">Back to Work</a>
        </div>
    </div>

    <script>
        function sendMessage() {
            const sender = document.getElementById('sender').value;
            const messageText = document.getElementById('message-text').value;
            const messagesContainer = document.getElementById('messages');

            if (sender && messageText) {
                const messageElement = document.createElement('div');
                messageElement.classList.add('message');
                
                const senderElement = document.createElement('div');
                senderElement.classList.add('sender');
                senderElement.textContent = sender;
                
                const timeElement = document.createElement('div');
                timeElement.classList.add('time');
                const now = new Date();
                timeElement.textContent = `${now.toLocaleDateString()} ${now.toLocaleTimeString()}`;
                
                const textElement = document.createElement('div');
                textElement.classList.add('text');
                textElement.textContent = messageText;
                
                messageElement.appendChild(senderElement);
                messageElement.appendChild(timeElement);
                messageElement.appendChild(textElement);
                
                messagesContainer.prepend(messageElement);

                // Clear the form
                document.getElementById('sender').value = '';
                document.getElementById('message-text').value = '';
            } else {
                alert('Please enter your name and message.');
            }
        }
    </script>
</body>
</html>
