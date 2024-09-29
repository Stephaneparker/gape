<?php
    include 'db_connection.php';  // Connexion à la base de données
    //include 'InserrerProduits.php';        // Fonction pour ajouter
    //include 'affiche.php';       // Fonction pour afficher
   // include 'supprimer.php';      // Fonction pour supprimer

// Récupérer les produits
function getProduits() {
    $conn = connectDB();
    if ($conn) {
        $sql = "SELECT * FROM tablemessage";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
}

// Fonction pour ajouter un produit
function ajouterProduit($nom, $boite_mail, $objet, $message) {
    $conn = connectDB();
    if ($conn) {
        $sql = "INSERT INTO tablemessage (nom, boite_mail, objet, message) VALUES (:nom, :boite_mail, :objet, :message)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':boite_mail' => $boite_mail,
            ':objet' => $objet,
            ':message' => $message
        ]);
    }
}

// Fonction pour supprimer un produit
function supprimerProduit($id) {
    $conn = connectDB();
    if ($conn) {
        $sql = "DELETE FROM tablemessage WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}

// Gérer les soumissions de formulaires (ajouter, supprimer, modifier)
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $boite_mail = $_POST['boite_mail'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];
	try {
                    // Appeler la fonction ajouter() avec les paramètres nécessaires
                    ajouterProduit($nom, $boite_mail, $objet, $message);
                    echo "Le produit a été ajouté avec succès.";
                } catch (PDOException $e) {
                    echo "Erreur : " . $e->getMessage();
                }
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
	<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
}

header {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    text-align: center;
}

.contact-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 20px;
}

.contact-form, .contact-info {
    background: white;
    padding: 20px;
    border-radius: 8px;
    margin: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 45%;
}

.contact-form h2, .contact-info h2 {
    margin-bottom: 20px;
}

.contact-form label {
    display: block;
    margin-bottom: 8px;
}

.contact-form input, .contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.contact-form button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.contact-form button:hover {
    background-color: #45a049;
}

footer {
    background-color: #4CAF50;
    color: white;
    text-align: center;
    padding: 10px 0;
    margin-top: 20px;
    position: relative;
    bottom: 0;
    width: 100%;
}

@media (max-width: 768px) {
    .contact-form, .contact-info {
        width: 100%;
    }
}
</style>
</head>
<body>
    <header>
        <h1>Contactez-nous</h1>
    </header>
<nav>
    <a href="index.php">Accueil</a>
    <a href="services.php">Services</a>
    <a href="produits.php">Produits</a>
	<a href="Intrants.php">Intrants</a>
	<a href="">outils et equipements</a>
    <a href="blog.php">Blog</a>
    <a href="apropos.php">À propos</a>
    
</nav>
    <section class="contact-container">
        <div class="contact-form">
            <h2>Envoyez-nous un message</h2>
            <form action="#" method="POST">
                <label for="name">Nom</label>
                <input type="text" id="nom" name="nom" required>

                <label for="email">Email</label>
                <input type="email" id="boite_mail" name="boite_mail" required>

                <label for="subject">Objet</label>
                <input type="text" id="objet" name="objet" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Envoyer</button>
            </form>
        </div>

        <div class="contact-info">
            <h2>Nos informations</h2>
            <p>Adresse : 12 LEPYRA, KINKOLE, N'SELE, République Démocratique du Congo</p>
            <p>Téléphone : +243 81 805 73 93</p>
            <p>Email : info@gapecongo.com</p>
			<script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
			<div style='display: flex; flex-wrap: wrap;'
        </div>
    </section>

    <footer>
        <p>&copy; 2024 GapeCongo. Tous droits réservés.</p>
    </footer>
</body>
</html>
