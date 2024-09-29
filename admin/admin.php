<?php
    include 'db_connection.php';  // Connexion à la base de données
    //include 'InserrerProduits.php';        // Fonction pour ajouter
    //include 'affiche.php';       // Fonction pour afficher
   // include 'supprimer.php';      // Fonction pour supprimer
   $libelle="produits";

// Récupérer les produits
function getProduits() {
    $conn = connectDB();
    if ($conn) {
        $sql = "SELECT * FROM tablegapecongo";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
}

// Fonction pour ajouter un produit

function ajouterProduit($image, $nom, $description, $libelle, $prix) {
	
    $conn = connectDB();
    if ($conn) {
        $sql = "INSERT INTO tablegapecongo (image, nom, description, libelle, prix) VALUES (:image, :nom, :description, :libelle, :prix)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':image' => $image,
            ':nom' => $nom,
            ':description' => $description,
            ':libelle' => $libelle,
            ':prix' => $prix
        ]);
    }
}

// Fonction pour supprimer un produit
function supprimerProduit($id) {
    $conn = connectDB();
    if ($conn) {
        $sql = "DELETE FROM tablegapecongo WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}

// Fonction pour modifier un produit
function modifierProduit($id, $image, $nom, $description, $libelle, $prix) {
    $conn = connectDB();
    if ($conn) {
        $sql = "UPDATE tablegapecongo SET image = :image, nom = :nom, description = :description, libelle = :libelle, prix = :prix WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':image' => $image,
            ':nom' => $nom,
            ':description' => $description,
            ':libelle' => $libelle,
            ':prix' => $prix,
            ':id' => $id
        ]);
    }
}

// Gérer les soumissions de formulaires (ajouter, supprimer, modifier)
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    //$libelle = $_POST['libelle'];
    $prix = $_POST['prix'];

    // Vérifier si le prix est un nombre valide
    if (!is_numeric($prix)) {
        echo "Veuillez entrer un prix valide.";
        exit;
    }

    // Gestion de l'image
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // Définir le répertoire de destination
        $target_dir = "uploads/";
        // Vérifier si le répertoire existe, sinon le créer
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }

        // Récupérer le nom de fichier de l'image
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        // Type de fichier (extension)
         $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Vérifier si l'image est valide (types autorisés : jpg, png, jpeg, gif)
        $extensions_autorisees = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($imageFileType, $extensions_autorisees)) {
            // Télécharger le fichier image
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                try {
                    // Appeler la fonction ajouter() avec les paramètres nécessaires
                    ajouterProduit($target_file, $nom, $description, $libelle, $prix);
                    echo "Le produit a été ajouté avec succès.";
                } catch (PDOException $e) {
                    echo "Erreur : " . $e->getMessage();
                }
            } else {
                echo "Une erreur est survenue lors du téléchargement de l'image.";
            }
        } else {
            echo "Seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.";
        }
    } else {
        echo "Veuillez télécharger une image.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration des produits</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input[type="text"], textarea, input[type="file"] {
            width: 100%;
            padding: 8px;
        }
        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .action-button {
            background-color: #dc3545;
            margin-right: 5px;
        }
        .action-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Administration des produits</h2>

    <!-- Formulaire pour ajouter un produit -->
    <h3>Ajouter un produit</h3>
    <form action="admin.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="image">Image :</label>
            <input type="file" name="image" required>
        </div>
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" required>
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <textarea name="description" rows="5" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="prix">Prix :</label>
            <input type="text" name="prix" required>
        </div>
        <button type="submit" name="ajouter">Ajouter le produit</button>
    </form>																<h2><a href="logout.php">Se déconnecter</a></h2>

</div>

<script>
function modifierProduit(id) {
    // Logique JavaScript pour charger le formulaire de modification avec les détails du produit
    alert("La fonctionnalité de modification sera implémentée ici.");
}
</script>

</body>
</html>
