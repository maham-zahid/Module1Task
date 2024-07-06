<?php

namespace Module1Task;

use Module1Task\php\Database\Connection;
use Module1Task\php\Database\Register;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once '../php/Database/Connection.php';
    require_once '../php/Database/Register.php';

    $register = new Register();

    $username = $_POST['username'];
    $password = $_POST['password'];

    

    // Register user
    if ($register->registerUser($username, $password)) {
        echo "User registered successfully!";
        // Redirect or do something else upon successful registration
    } else {
        echo "Registration failed!";
        // Handle failed registration
    }
}

?>
