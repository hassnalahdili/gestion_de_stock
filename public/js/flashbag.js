window.addEventListener('DOMContentLoaded', (event) => {
    setTimeout(function() {
        const flashMessages = document.querySelectorAll('.flashbag');
        flashMessages.forEach(function(message) {
            message.style.display = 'none';
        });
    }, 5000); 
});