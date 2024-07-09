<?php
    require_once "php/include.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <h2 class="form-wrapper__heading">Log in</h2>
            <form class="form" id="loginForm" method="POST" onsubmit="return validateLoginForm()">
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
                <button type="submit" name="login" class="form__button">Log in</button>
            </form>
        </div>
    </div>
    <script src="js/validation.js"></script>
</body>
</html>
