<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-color: #e0a8b4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
        }
        .button {
            background-color: rgb(241, 5, 155);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 12px;
        }
        .input {
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <form method="POST" action="login_process.php"><h1>Connexion</h1>
            <input type="text" name="email" placeholder="Email" class="input" required><br>
            <input type="password" name="mot_de_passe" placeholder="Mot de passe" class="input" required><br>
            <button type="submit" class="button">Se connecter</button>
        </form>
        <br>
        <a href="inscription.php" class="button">S'inscrire</a>
    </div>
</body>
</html>