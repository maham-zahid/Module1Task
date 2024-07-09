<?php
namespace Module1Task\php\Database;

use Module1Task\php\Database\Connection;

class Register {
    private $db;

    public function __construct() {
        $this->db = new Connection();
    }

    public function emailExists($email) {
        $conn = $this->db->getConnection();
        $sql = "SELECT email FROM user WHERE email = ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            return true; // Email exists
        } else {
            return false; // Email does not exist
        }
    }

    public function registerUser($email, $password) {
        $conn = $this->db->getConnection();
        $sql = "INSERT INTO user (email, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $password);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function loginUser($email, $password) {
        $conn = $this->db->getConnection();
        $sql = "SELECT password FROM user WHERE email = ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        
        if ($stmt === false) {
            die('Prepare failed: ' . $conn->error);
        }
        
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($password === $row['password']) {
                return true;
            } else {
                return false;
            }
        }
    }
}
?>
