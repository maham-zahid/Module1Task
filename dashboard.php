<?php
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login page if not logged in
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container1">
        <div class="form-wrapper">
            <h1 class="welcome">WELCOME</h1>
            <p class="message">You have successfully logged in</p>
            <a href="index.php" class="logout__button">Log out</a>
        </div>
    </div>
</body>
</html>
