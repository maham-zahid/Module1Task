<?php
    require_once 'E:\xampp\htdocs\Module1Task\php\Database\Connection.php';
    require_once 'E:\xampp\htdocs\Module1Task\php\Database\Register.php';
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
            <h2>Register User</h2>
            <form class="form" id="registerForm" action="php/RegisterController.php" method="POST" onsubmit="return validateRegistrationForm()">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="register-username" name="username" placeholder="abc@gmail.com" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="register-password" name="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirmPassword" placeholder="Confirm Password" required>
                </div>
                <button type="submit">Sign up</button>
                <p>Already have an account? <a href="index.php">Log in now!</a></p>
            </form>
        </div>
    </div>
    <script src="js\validation.js"></script>    
</body>
</html>
