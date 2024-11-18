
        const body = document.body;
        const toggleButton = document.createElement('button');
        toggleButton.textContent = 'Toggle Dark Mode';
        toggleButton.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
        });
        document.body.appendChild(toggleButton);
