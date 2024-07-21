<?php
session_start();

try {
    // Correct the database connection details
    $pdo = new PDO('mysql:host=mysql-kyadia.alwaysdata.net;dbname=kyadia_sql',  'girl2024');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_pass']; // Corrected key

    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE adresse_email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($mot_de_passe, $user['mot_de_pass'])) {
        $_SESSION['user'] = $user;

        if ($user['role'] == 'admin') {
            header("Location: Rokhaya/Vue/AccueilView.php");
        } else {
            header("Location: Rokhaya/Vue/ClientsListView.php");
        }
        exit();
    } else {
        header("Location: Rokhaya/Vue/CreateClientView.php");
    }
}
?>
