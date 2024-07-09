<?php
namespace Module1Task\php;

use Module1Task\php\Connection;

class Register
{
    private $db;

    public function __construct()
    {
        $this->db = new Connection();
    }

    public function emailExists($email)
    {
        $conn = $this->db->getConnection();
        $sql = "SELECT email FROM user WHERE email = ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        return $stmt->num_rows > 0; 
    }

    public function registerUser($email, $password)
    {
        $conn = $this->db->getConnection();
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (email, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $hashedPassword);

        return $stmt->execute();
    }

    public function loginUser($email, $password)
    {
        $conn = $this->db->getConnection();
        $sql = "SELECT password FROM user WHERE email = ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return password_verify($password, $row['password']);
        }

        return false;
    }
}
?>
