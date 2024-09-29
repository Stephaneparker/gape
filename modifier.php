
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

// Récupération des informations de l'utilisateur
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$utilisateur) {
        die("Utilisateur non trouvé.");
    }
} else {
    die("ID d'utilisateur manquant.");
}

// Mise à jour des informations de l'utilisateur
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = htmlspecialchars(trim($_POST['email']));

    if (empty($nom) || empty($email)) {
        echo "Tous les champs sont obligatoires.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse email invalide.";
    } else {
        $sql = "UPDATE users SET nom = :nom, email = :email WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "Les informations ont été mises à jour avec succès.";
        } else {
            echo "Erreur lors de la mise à jour.";
        }
    }
}
?>

