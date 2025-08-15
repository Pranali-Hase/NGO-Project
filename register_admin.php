<?php
// register_admin.php - Run this once to create an admin user
require_once 'db_connect.php';

$username = 'admin'; // Change to your desired username
$password = 'admin123'; // Change to your desired password

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

try {
    $stmt = $pdo->prepare("INSERT INTO admin_users (username, password) VALUES (?, ?)");
    $stmt->execute([$username, $hashedPassword]);
    
    echo "Admin user created successfully!";
} catch (PDOException $e) {
    die("Error creating admin user: " . $e->getMessage());
}
?>