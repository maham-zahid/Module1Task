<?php
    require_once 'php\Database\Connection.php';
    require_once 'php\Database\Register.php';
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
            <h2 class="heading">Log in</h2>
            <form class="form" id="loginForm" method="POST" action="php/LoginController.php" onsubmit="return validateLoginForm()">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="abc@gmail.com" required>
                    <span class="error" id="email-error"></span>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <span class="error" id="password-error"></span>
                </div>
                <button type="submit">Log in</button>
            </form>

        </div>
    </div>
    <script src="js\validation.js"></script>
</body>
</html>