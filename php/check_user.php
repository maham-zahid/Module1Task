<?php
namespace Module1Task\php;
require_once 'include.php';

use Module1Task\php\Connection;

header('Content-Type: application/json');

$response = ['exists' => false];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email'];
    
    $connection = new Connection();
    $conn = $connection->getConnection();
    
    $sql = "SELECT email FROM user WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $response['exists'] = true;
    }
    
    $stmt->close();
    $conn->close();
}

echo json_encode($response);
?>
