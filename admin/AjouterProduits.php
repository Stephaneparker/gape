<?php
  include 'db_connection.php';  // Connexion à la base de données
    include 'InserrerProduits.php';        // Fonction pour ajouter
    include 'affiche.php';       // Fonction pour afficher
    include 'supprimer.php';      // Fonction pour supprimer

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $libelle = $_POST['libelle'];
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
    <title>Ajouter un produit</title>
</head>
<body>
    <h2>Ajouter un produit</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="image">Image:</label><br>
        <input type="file" name="image" required><br>

        <label for="nom">Nom:</label><br>
        <input type="text" name="nom" required><br>

        <label for="description">Description:</label><br>
        <textarea name="description" rows="5" required></textarea><br>

        <label for="libelle">Libelle:</label><br>
        <input type="text" name="libelle" required><br>

        <label for="prix">Prix:</label><br>
        <input type="text" name="prix" required><br>

        <input type="submit" value="Insérer">
    </form>
</body>
</html>
