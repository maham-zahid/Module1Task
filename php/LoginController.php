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

    if ($login->loginUser($username, $password)) {
        echo "<script>alert('Successfully logged in'); window.location.href = '../dashboard.php';</script>";
    } else {
        echo "<script>alert('Invalid email or password'); window.location.href = '../index.php';</script>";
    }
} else {
    echo "";
}
?>
