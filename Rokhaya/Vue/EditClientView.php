<!DOCTYPE html>
<html>
<head>
    <title>Edit Client</title>
</head>
<body>
    <h1>Edit Client</h1>
    <form method="POST" action="index.php">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($client['id']); ?>">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($client['nom']); ?>" required>
        <br>
        <label for="adresse">Adresse:</label>
        <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($client['adresse']); ?>" required>
        <br>
        <label for="telephone">telephone:</label>
        <input type="text" id="telephone" name="telephone" value="<?php echo htmlspecialchars($client['telephone']); ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($client['email']); ?>" required>
        <br>
        <label for="sexe">sexe:</label>
        <select id="sexe" name="sexe" required>
            <option value="Masculin" <?php if ($client['gender'] == 'Masculin') echo 'selected'; ?>>Masculin</option>
            <option value="Feminin" <?php if ($client['gender'] == 'Feminin') echo 'selected'; ?>>Feminin</option>
        </select>
        <br>
        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="Actif" <?php if ($client['status'] == 'Actif') echo 'selected'; ?>>Active</option>
            <option value="Inactif" <?php if ($client['status'] == 'Inactif') echo 'selected'; ?>>Inactive</option>
        </select>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="index.php">Retour a la liste des clients </a>
</body>
</html>
