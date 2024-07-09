<?php
namespace Module1Task;

use Module1Task\php\Register;

require_once 'include.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $register = new Register();
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_POST['register'])) {
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email format'); window.location.href = '../register.php';</script>";
            exit();
        }

        
        if ($register->emailExists($email)) {
            echo "<script>alert('User already exists, please log in'); window.location.href = '../index.php';</script>";
            exit();
        }

        
        if ($register->registerUser($email, $password)) {
            echo "<script>alert('User registered successfully'); window.location.href = '../index.php';</script>";
        } else {
            echo "<script>alert('Registration failed'); window.location.href = '../register.php';</script>";
        }
    } elseif (isset($_POST['login'])) {
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email format'); window.location.href = 'index.php';</script>";
            exit();
        }

        
        if ($register->loginUser($email, $password)) {
            echo "<script>alert('Successfully logged in'); window.location.href = 'dashboard.php';</script>";
        } else {
            echo "<script>alert('Invalid email or password'); window.location.href = 'index.php';</script>";
        }
    }
}
?>
