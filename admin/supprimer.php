<?php
function supprimerProduit($id) {
    $conn = connectDB();
    if ($conn) {
        $sql = "DELETE FROM tablegapecongo WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            echo "Produit supprimé avec succès!";
        } else {
            echo "Erreur lors de la suppression du produit.";
        }
    }
}

if (isset($_POST['delete'])) {
    supprimerProduit($_POST['id']);
}
?>