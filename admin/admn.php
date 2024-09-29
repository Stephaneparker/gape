<?php
session_start();

// Vérification de la connexion
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Admin</title>
</head>
<body>
    <h1>Bienvenue dans l'interface d'administration</h1>
    <h2><p>Ceci est une page d'administration réservée aux administrateurs connectés.</p></h2>
	<nav>
	<h3><a href="admin.php">Insersion des nouveaux produits</a>______________________<a href="admin2.php">Modification produits</a></br></h3>
	
	<h3><a href="admin3.php">Insersion des nouveaux services</a>______________________<a href="admin4.php">Modification services</a></br></h3>
	
	<h3><a href="admin5.php">Insersion des nouveaux intrants</a>______________________<a href="admin6.php">Modification des intrants</a></br></h3>
	
	<h3><a href="admin7.php">Insersion des informations blog</a>______________________<a href="admin8.php">Modification des informations blog</a></br></h3>
	
    <h3><a href="logout.php">Se déconnecter</a>
	</nav>
</body>
</html>
