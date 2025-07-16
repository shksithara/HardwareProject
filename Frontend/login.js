document.getElementById('loginForm').addEventListener('submit', function(e) {
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    const errorMessage = document.getElementById('error-message');
    
    // Clear previous error
    errorMessage.style.display = 'none';
    
    // Basic validation
    if (username.length < 3) {
        e.preventDefault();
        showError('Username must be at least 3 characters long');
        return;
    }
    
    if (password.length < 6) {
        e.preventDefault();
        showError('Password must be at least 6 characters long');
        return;
    }
});

function showError(message) {
    const errorMessage = document.getElementById('error-message');
    errorMessage.textContent = message;
    errorMessage.style.display = 'block';
}

// Show PHP error messages if they exist
window.addEventListener('load', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const error = urlParams.get('error');
    
    if (error) {
        showError(decodeURIComponent(error));
    }
});