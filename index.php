<?php
session_start(); // Start the session
require_once "php/include.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $register = new \Module1Task\php\Register();
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($register->loginUser($email, $password)) {
        // Set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        // Redirect to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid email or password'); window.location.href = 'index.php';</script>";
        exit();
    }
}
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
                <p class="form__text">Don't have an account? <a href="register.php" class="form__link">Register</a></p>
            </form>
        </div>
    </div>
    <script src="js/validation.js"></script>
</body>
</html>
