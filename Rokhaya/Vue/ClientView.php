ClientView.php<!DOCTYPE html>
<html>
<head>
    <title>Client Information</title>
</head>
<body>
    <h1>Client Information</h1>
    <p>Name: <?php echo htmlspecialchars($client['nom']); ?></p>
    <p>Address: <?php echo htmlspecialchars($client['adresse']); ?></p>
    <p>Phone: <?php echo htmlspecialchars($client['telephone']); ?></p>
    <p>Email: <?php echo htmlspecialchars($client['email']); ?></p>
    <p>Gender: <?php echo htmlspecialchars($client['sexe']); ?></p>
    <p>Status: <?php echo htmlspecialchars($client['status']); ?></p>
    <a href="index.php">Retour a la liste des clients</a>
</body>
</html>