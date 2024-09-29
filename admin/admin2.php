<?php
    include 'db_connection.php';  // Connexion à la base de données
    //include 'InserrerProduits.php';        // Fonction pour ajouter
    //include 'affiche.php';       // Fonction pour afficher
   // include 'supprimer.php';      // Fonction pour supprimer

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

    <!-- Tableau des produits -->
    <h3>Liste des produits</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Libellé</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $produits = getProduits();
            if (count($produits) > 0):
                foreach ($produits as $produit): ?>
                    <tr>
                        <td><?= htmlspecialchars($produit['id']) ?></td>
                        <td><img src="<?= htmlspecialchars($produit['image']) ?>" alt="Image" style="width: 100px;"></td>
                        <td><?= htmlspecialchars($produit['nom']) ?></td>
                        <td><?= htmlspecialchars($produit['description']) ?></td>
                        <td><?= htmlspecialchars($produit['libelle']) ?></td>
                        <td><?= htmlspecialchars($produit['prix']) ?> $</td>
                        <td>
                            <form action="" method="post" >
                                <input type="hidden" name="id" value="<?= htmlspecialchars($produit['id']) ?>">
                                <button type="submit" name="supprimer" class="action-button">Supprimer</button>
                            </form>
                                <button onclick="modifierProduit(<?= $produit['id'] ?>)">Modifier</button>
                        </td>
                    </tr>
                <?php endforeach;
            else: ?>
                <tr>
                    <td colspan="7">Aucun produit trouvé.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>												<h2><a href="logout.php">Se déconnecter</a></h2>
</div>

<script>
function modifierProduit(id) {
    // Logique JavaScript pour charger le formulaire de modification avec les détails du produit
    alert("La fonctionnalité de modification sera implémentée ici.");
}
</script>

</body>
</html>
