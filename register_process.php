<?php
session_start();

$dsn = 'mysql:host=localhost;dbname=application';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nom = $_POST['nom'] ?? '';
    $adresse = $_POST['adresse'] ?? '';
    $telephone = $_POST['telephone'] ?? '';
    $email = $_POST['email'] ?? '';
    $sexe = $_POST['sexe'] ?? '';
    $statut = $_POST['statut'] ?? '';
    $action = $_POST['action'] ?? '';

    if ($action === 'create') {
      
        if (empty($nom) || empty($email) || empty($sexe) || empty($statut)) {
            echo 'Veuillez remplir tous les champs requis.';
            exit;
        }

        
        $mot_de_passe = ''; 

        try {
            
            $sql = 'INSERT INTO utilisateurs (nom, adresse, telephone, email, sexe, statut, mot_de_passe) VALUES (:nom, :adresse, :telephone, :email, :sexe, :statut, :mot_de_passe)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                'nom' => $nom,
                'adresse' => $adresse,
                'telephone' => $telephone,
                'email' => $email,
                'sexe' => $sexe,
                'statut' => $statut,
                'mot_de_passe' => $mot_de_passe
            ]);

           
            header('Location: login.php?success=1');
            exit;
        } catch (PDOException $e) {
            echo 'Erreur lors de l\'inscription : ' . $e->getMessage();
        }
    } else {
 
        header('Location: inscription.php');
        exit;
    }
} else {
  
    header('Location: inscription.php');
    exit;
}
