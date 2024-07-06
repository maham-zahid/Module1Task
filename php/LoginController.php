<?php
namespace Module1Task;

use Module1Task\php\Database\Connection;
use Module1Task\php\Database\Register;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../php/Database/Connection.php';
    require_once '../php/Database/Register.php';
    $login = new Register();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $login->loginUser($username, $password);

    if ($user) {
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
        exit();
    } else {
        echo "<script>alert('Login failed! Invalid username or password.'); window.location.href = 'index.php';</script>";
    }
    } else {
        echo "";
    }
?>
