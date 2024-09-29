<?php
session_start();

// Vérification des informations de connexion
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Identifiants admin (à remplacer par un système sécurisé)
    $adminUsername = "admin";
    $adminPassword = "password123";

    if ($username === $adminUsername && $password === $adminPassword) {
        // Si les informations sont correctes, créer une session et rediriger
        $_SESSION['loggedin'] = true;
        header("Location: admn.php");
        exit();
    } else {
        $error = "Identifiant ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
        .login-box { width: 300px; margin: 100px auto; padding: 20px; background-color: #fff; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        h2 { text-align: center; }
        input[type="text"], input[type="password"] { width: 100%; padding: 10px; margin: 10px 0; }
        button { width: 100%; padding: 10px; background-color: #5cb85c; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #4cae4c; }
        .error { color: red; text-align: center; }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Connexion Admin</h2>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>
		
    </form>
    <?php if (isset($error)): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>
</div>

</body>
</html>
