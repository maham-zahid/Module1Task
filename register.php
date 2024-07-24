<?php
    require_once "php/include.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Register Page</title>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <h2 class="form-wrapper__heading">Register User</h2>
            <form class="form" id="registerForm" action="php/RegisterController.php" method="POST" onsubmit="return validateRegistrationForm()">
                <div class="form__group">
                    <label for="email" class="form__label">Email</label>
                    <input type="text" id="email" name="email" placeholder="abc@gmail.com" class="form__input" required>
                    <span class="form__error" id="email-error"></span>
                </div>
                <div class="form__group">
                    <label for="password" class="form__label">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" class="form__input" required>
                    <span class="form__error" id="password-error"></span>
                </div>
                <div class="form__group">
                    <label for="confirmPassword" class="form__label">Confirm Password</label>
                    <input type="password" id="confpassword" name="confirmPassword" placeholder="Confirm Password" class="form__input" required>
                    <span class="form__error" id="confpassword-error"></span>
                </div>
                <button type="submit" name="register" class="form__button">Register</button>
                <p class="form__text">Already have an account? <a href="index.php" class="form__link">Login</a></p>
            </form>
        </div>
    </div>
    <script src="js/validation.js"></script>
</body>
</html>
