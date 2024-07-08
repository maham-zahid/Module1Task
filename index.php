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
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <h2>Log in</h2>
            <form class="form" id="loginForm" method="POST" action="php/LoginController.php" onsubmit="return validateLoginForm()">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="abc@gmail.com" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit">Log in</button>
                
            </form>
        </div>
    </div>
    <script src="js\validation.js"></script>
</body>
</html>
