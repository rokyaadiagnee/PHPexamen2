<?php
// inscriptiontraitement.php

require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple registration (in real applications, use hashed passwords and validation)
    $query = $database->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $result = $query->execute([':username' => $username, ':password' => $password]);

    if ($result) {
        header("Location: login.php");
    } else {
        echo "Registration failed!";
    }
}
?>
