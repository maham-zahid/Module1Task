function validateLoginForm() {
    clearErrors();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    let isValid = true;

    if (isEmpty(email)) {
        showError('email-error', 'Please enter your email');
        isValid = false;
    } else if (!isValidEmail(email)) {
        showError('email-error', 'Please enter a valid email address');
        isValid = false;
    }

    if (isEmpty(password)) {
        showError('password-error', 'Please enter your password');
        isValid = false;
    } else if (getPasswordStrength(password) !== 'strong') {
        showError('password-error', 'Password must be at least 8 characters long and include at least one uppercase letter, one number, and one special character');
        isValid = false;
    }

    return isValid;
}

function validateRegistrationForm() {
    clearErrors();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confpassword').value;
    let isValid = true;

    if (isEmpty(email)) {
        showError('email-error', 'Please enter your email');
        isValid = false;
    } else if (!isValidEmail(email)) {
        showError('email-error', 'Please enter a valid email address');
        isValid = false;
    }

    if (isEmpty(password)) {
        showError('password-error', 'Please enter your password');
        isValid = false;
    } else if (getPasswordStrength(password) !== 'strong') {
        showError('password-error', 'Password must be at least 8 characters long and include at least one uppercase letter, one number, and one special character');
        isValid = false;
    }

    if (password !== confirmPassword) {
        showError('confpassword-error', 'Passwords do not match');
        isValid = false;
    }

    return isValid;
}

function isEmpty(value) {
    return value.trim() === '';
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function getPasswordStrength(password) {
    const strongPasswordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+[\]{};':"\\|,.<>/?]).{8,}$/;
    return strongPasswordRegex.test(password) ? 'strong' : 'weak';
}

function showError(id, message) {
    document.getElementById(id).textContent = message;
}

function clearErrors() {
    const errors = document.querySelectorAll('.error');
    errors.forEach(error => error.textContent = '');
}
