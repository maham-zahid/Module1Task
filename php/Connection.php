<?php

namespace Module1Task\php;
require_once "include.php";

class Connection {
    
    public function getConnection() {
        
        $servername = "localhost";
        $email = "root";
        $password = "";
        $dbname = "authentication";

        $conn = new \mysqli($servername, $email, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}

?>