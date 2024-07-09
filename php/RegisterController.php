<?php

namespace Module1Task;

use Module1Task\php\Database\Connection;
use Module1Task\php\Database\Register;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once '../php/Database/Connection.php';
    require_once '../php/Database/Register.php';

    $register = new Register();

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email already exists
    if ($register->emailExists($email)) {
        echo "<script>alert('User already exists'); window.location.href = '../register.php';</script>";
    } else {
        // Register user
        if ($register->registerUser($email, $password)) {
            echo "<script>alert('User registered successfully'); window.location.href = '../index.php';</script>";
        } else {
            echo "<script>alert('Not registered'); window.location.href = '../register.php';</script>";
        }
    }
}

?>
