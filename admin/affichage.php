<?php
// Connexion à la base de données
$host = 'localhost';
$dbname = 'inscription';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Récupération des données depuis la table utilisateurs
$sql = "SELECT id, nom, email, date_inscription FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des inscrits</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 600px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #5cb85c;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Liste des utilisateurs inscrits</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Date d'inscription</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($utilisateurs) > 0): ?>
                    <?php foreach ($utilisateurs as $utilisateur): ?>
                        <tr>
                            <td><?= htmlspecialchars($utilisateur['id']) ?></td>
                            <td><?= htmlspecialchars($utilisateur['nom']) ?></td>
                            <td><?= htmlspecialchars($utilisateur['email']) ?></td>
                            <td><?= htmlspecialchars($utilisateur['date_inscription']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">Aucun utilisateur inscrit.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
