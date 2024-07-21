<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <h1>Filter Clients</h1>
    <form method="GET" action="index.php">
        <input type="hidden" name="action" value="filter">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="address">Adresse:</label>
        <input type="text" id="address" name="address">
        <br>
        <label for="telephone">telephone:</label>
        <input type="text" id="telephone" name="telephone">
        <br>
        <button type="submit">Filter</button>
    </form>
    <a href="index.php">Retour a la liste des clients </a>
</body>
</html>
