const chatForm = document.querySelector('.chat-form');
const chatLogs = document.querySelector('.chatlogs');

chatForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const message = e.target.elements.message.value;
  const chat = document.createElement('div');
  chat.classList.add('chat', 'self');
  chat.innerHTML = `
    <div class="user-photo"></div>
    <p class="chat-message">${message}</p>
  `;
  chatLogs.appendChild(chat);
  e.target.elements.message.value = '';
});
