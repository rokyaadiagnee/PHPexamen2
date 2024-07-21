<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: rgb(241, 5, 155);
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }
        p {
            margin-bottom: 30px;
            font-size: 16px;
            color: #666;
        }
        .button {
            display: inline-block;
            padding: 12px 24px;
            font-size: 16px;
            color: #fff;
            background-color: rgb(241, 5, 155);
            border: none;
            border-radius: 6px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }
        .button:hover {
            background-color: rgb(241, 5, 155);
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur Mon Site Web Gestion Client.</h1>
        <p>Veuillez vous connecter pour accéder à l'application L'Iceberg.</p>
        <a href="login.php" class="button">Se connecter</a>
    </div>
</body>
</html>
