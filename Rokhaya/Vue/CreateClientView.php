<!DOCTYPE html>
<html>
<head>
    <title>Create Client</title>
</head>
<body>
    <h1>Create Client</h1>
    <form method="POST" action="index.php">
        <input type="hidden" name="action" value="create">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse">
        <br>
        <label for="telephone">Téléphone:</label>
        <input type="text" id="telephone" name="telephone">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="sexe">Sexe:</label>
        <select id="sexe" name="sexe" required>
            <option value="M">Masculin</option>
            <option value="F">Féminin</option>
        </select>
        <br>
        <label for="statut">Statut:</label>
        <select id="statut" name="statut" required>
            <option value="actif">Actif</option>
            <option value="inactif">Inactif</option>
        </select>
        <br>
        <button type="submit">Create</button>
    </form>
    <a href="index.php">Retour à la liste des clients</a>
</body>
</html>
