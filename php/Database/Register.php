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
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->store_result();

        // Verify the password of user trying to login
    if ($stmt->num_rows > 0 && password_verify($password)) {
        return true;
    } else {
        return false;
    }
    }
}
  

?>
