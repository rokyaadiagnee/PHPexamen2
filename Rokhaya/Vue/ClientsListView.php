<!DOCTYPE html>
<html>
<head>
    <title>Liste des Clients</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f0f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #d36f77;
        }
        form, table {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border: 1px solid #e0a8b4;
            text-align: left;
        }
        th {
            background-color: rgb(241, 5, 155);
            color: white;
        }
        tr:nth-child(even) {
            background-color: #fce4e6;
        }
        a {
            color: rgb(241, 5, 155);
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .button {
            background-color: rgb(241, 5, 155);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            display: inline-block;
            text-decoration: none;
        }
        .button:hover {
            background-color: rgb(241, 5, 155);
        }
        .filter-form input, .filter-form select {
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #e0a8b4;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Liste des Clients</h1>

    <!-- Filtrage des Clients -->
    <form class="filter-form" method="GET" action="index.php">
        <input type="hidden" name="action" value="filter">
        <label for="filter_name">Nom:</label>
        <input type="text" id="filter_nom" name="nom">
        <label for="filter_adresse">Adresse:</label>
        <input type="text" id="filter_adresse" name="adresse">
        <label for="filter_telephone">Téléphone:</label>
        <input type="text" id="filter_telephone" name="telephone">
        <button type="submit" class="button">Filter</button>
    </form>

    <!-- Table des Clients -->
    <table>
        <thead>
            <tr>
                <th><a href="index.php?sort=nom">Nom</a></th>
                <th><a href="index.php?sort=adresse">Adresse</a></th>
                <th><a href="index.php?sort=telephone">Téléphone</a></th>
                <th>Email</th>
                <th>Sexe</th>
                <th><a href="index.php?sort=status">Statut</a></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($clients)): ?>
                <tr>
                    <td colspan="7">Aucun client trouvé.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($clients as $client): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($client['nom']); ?></td>
                        <td><?php echo htmlspecialchars($client['adresse']); ?></td>
                        <td><?php echo htmlspecialchars($client['telephone']); ?></td>
                        <td><?php echo htmlspecialchars($client['email']); ?></td>
                        <td><?php echo htmlspecialchars($client['sexe'] == 'M' ? 'Masculin' : 'Féminin'); ?></td>
                        <td><?php echo htmlspecialchars($client['status'] == 'actif' ? 'Actif' : 'Inactif'); ?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?php echo $client['id']; ?>" class="button">Edit</a>
                            <form method="POST" action="index.php" style="display:inline;">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?php echo $client['id']; ?>">
                                <button type="submit" class="button">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Actions supplémentaires -->
    <a href="index.php?action=create" class="button">Ajouter un nouveau Client</a>
    <a href="index.php?action=export&format=csv" class="button">Exporter au CSV</a>
    <a href="index.php?action=export&format=pdf" class="button">Exporter au PDF</a>
    <a href="index.php?action=report" class="button">Générer un Rapport</a>
</body>
</html>
