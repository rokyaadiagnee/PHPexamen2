<?php
// config.php

define('DB_DSN', 'mysql:host=localhost;dbname=application');
define('DB_USER', 'root');
define('DB_PASS', '');

try {
    $database = new PDO(DB_DSN, DB_USER, DB_PASS);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec de la connexion : ' . $e->getMessage();
    exit;
}
?>