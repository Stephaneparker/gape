<?php
function afficherProduits() {
    $conn = connectDB();
    if ($conn) {
        $sql = "SELECT * FROM tablegapecongo";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        echo "<div style='display: flex; flex-wrap: wrap;'>"; // Conteneur des cartes

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<div style='border: 1px solid #ddd; border-radius: 10px; padding: 20px; margin: 10px; width: 250px; text-align: center;'>";
            echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['nom']) . "' style='width:100%; height:200px; object-fit:cover;' />";
            echo "<h2>" . htmlspecialchars($row['nom']) . "</h2>";
            echo "<p>" . htmlspecialchars($row['description']) . "</p>";
            echo "<p><strong>Libellé: </strong>" . htmlspecialchars($row['libelle']) . "</p>";
            echo "<p><strong>Prix: </strong>$" . htmlspecialchars($row['prix']) . "</p>";
            echo "<p><strong>Date d'enregistrement: </strong>" . htmlspecialchars($row['date_enreg']) . "</p>";
            echo "<button style='background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;'>Buy Now</button>";
            echo "<form method='POST'><input type='hidden' name='id' value='" . $row['id'] . "'><button type='submit' name='delete' style='background-color: #f44336; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;'>Supprimer</button></form>";
            echo "</div>";
        }

        echo "</div>";
    }
}
?>