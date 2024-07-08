<?php
namespace Module1Task\php\Database;

use Module1Task\php\Database\Connection;

class Register {
    private $db;

    public function __construct() {
        $this->db = new Connection();
    }

    public function registerUser($username, $password) {
        $conn = $this->db->getConnection();
    
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function loginUser($username, $password) {
        $conn = $this->db->getConnection();
        $sql = "SELECT password FROM users WHERE username = ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        
        if ($stmt === false) {
            die('Prepare failed: ' . $conn->error);
        }
        
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($password === $row['password']) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
?>
