document.addEventListener('DOMContentLoaded', function() {
});

function validateLoginForm() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (isEmpty(username)) {
        alert('Please enter your username');
        return false;
    }

    if (!isValidEmail(username)) {
        alert('Please enter a valid email address');
        return false;
    }

    if (isEmpty(password)) {
        alert('Please enter your password');
        return false;
    }

    const passwordStrength = getPasswordStrength(password);
    if (passwordStrength !== 'strong') {
        alert('Password must be at least 8 characters long');
        return false;
    }

    return true;
}

function validateRegistrationForm() {
    const username = document.getElementById('register-username').value;
    const password = document.getElementById('register-password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    if (isEmpty(username)) {
        alert('Please enter your username');
        return false;
    }

    if (!isValidEmail(username)) {
        alert('Please enter a valid email address');
        return false;
    }

    if (isEmpty(password)) {
        alert('Please enter your password');
        return false;
    }

    const passwordStrength = getPasswordStrength(password);
    if (passwordStrength !== 'strong') {
        alert('Password must be at least 8 characters long');
        return false;
    }

    if (password !== confirmPassword) {
        alert('Passwords do not match');
        return false;
    }

    return true;
}

function isEmpty(value) {
    return value.trim() === '';
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function getPasswordStrength(password) {
    return password.length >= 8 ? 'strong' : 'weak';
}
