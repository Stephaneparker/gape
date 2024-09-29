<?php
function ajouterServices($image, $nom, $description, $libelle, $prix) {
    $conn = connectDB();
    if ($conn) {
        $sql = "INSERT INTO tableservice (image, nom, description, libelle, prix) VALUES (:image, :nom, :description, :libelle, :prix)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':libelle', $libelle);
        $stmt->bindParam(':prix', $prix);

        if ($stmt->execute()) {
            echo "OK!";
        } else {
            echo "Erreur lors de l'ajout du produit.";
        }
    }
}
?>