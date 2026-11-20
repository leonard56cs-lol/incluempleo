document.addEventListener('DOMContentLoaded', () => {
    const chatToggle = document.getElementById('chat-toggle');
    const chatWindow = document.getElementById('chat-window');
    const chatClose = document.getElementById('chat-close');
    const chatInput = document.getElementById('chat-input');
    const chatSend = document.getElementById('chat-send');
    const chatMessages = document.getElementById('chat-messages');

    if (chatToggle && chatWindow) {
        
        chatToggle.addEventListener('click', () => {
            if (chatWindow.style.display === 'none' || chatWindow.style.display === '') {
                chatWindow.style.display = 'flex'; 
                chatInput.focus();
            } else {
                chatWindow.style.display = 'none';
            }
        });

        chatClose.addEventListener('click', () => {
            chatWindow.style.display = 'none';
        });

        function addMessage(text, sender) {
            const msgDiv = document.createElement('div');
            msgDiv.classList.add('message', sender);
            msgDiv.textContent = text;
            chatMessages.appendChild(msgDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight; 
        }

        function getBotResponse(userText) {
            const text = userText.toLowerCase();
            if (text.includes('registrar') || text.includes('cuenta')) return "Para registrarte, ve a 'Registrarse' en el menú superior.";
            if (text.includes('contraseña') || text.includes('olvide')) return "Ve a 'Iniciar Sesión' y haz clic en '¿Olvidaste tu contraseña?'.";
            if (text.includes('vacante') || text.includes('empleo')) return "Puedes ver las vacantes en la sección 'Vacantes' del menú.";
            if (text.includes('hola') || text.includes('buenos')) return "¡Hola! ¿En qué puedo ayudarte?";
            return "Lo siento, no entendí. Puedes ir a la sección 'Ayuda' o 'Contáctanos'.";
        }

        function sendMessage() {
            const text = chatInput.value.trim();
            if (text === '') return;

            addMessage(text, 'user'); 
            chatInput.value = '';

            setTimeout(() => {
                addMessage(getBotResponse(text), 'bot');
            }, 800);
        }

        chatSend.addEventListener('click', sendMessage);
        chatInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendMessage();
        });
    } else {
        console.warn("El HTML del chat no se encontró en esta página.");
    }
});