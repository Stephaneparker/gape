<?php
// Connexion à la base de données
function connectDB() {
    $host = 'localhost'; 
    $dbname = 'dbgapecongo'; 
    $username = 'root'; 
    $password = ''; 

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        return null;
    }
}

// Récupérer les produits
function getProduits() {
    $conn = connectDB();
    if ($conn) {
       // $produit_libelle = 'produis'; // La valeur à rechercher
        $sql = "SELECT * FROM tableintrants";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GapeCongo - Produits</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #333;
        }

        nav a {
            color: white;
            padding: 10px 15px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .section {
            padding: 50px 20px;
            text-align: center;
        }

        .products-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .product-card {
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 30%;
            margin: 20px;
            padding: 20px;
            text-align: center;
        }

        .product-card img {
            width: 100%;
            height: auto;
        }

        .product-card h3 {
            font-size: 1.5rem;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .product-card p {
            font-size: 1rem;
            margin-bottom: 15px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        @media (max-width: 768px) {
            .products-grid {
                flex-direction: column;
                align-items: center;
            }

            .product-card {
                width: 80%;
            }
        }
		        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }
        .product-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 250px;
            margin: 15px;
            padding: 15px;
            text-align: center;
            transition: transform 0.2s;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        .product-card img {
            max-width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }
        .product-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .product-card p {
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }
        .product-card .price {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
        }
        .product-card button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        .product-card button:hover {
            background-color: #218838;
        }
		
		
    </style>
</head>
<body>

<header>
    <h1>Nos Intrants agricoles sur GapeCongo</h1>
</header>

<nav>
    <a href="index.php">Accueil</a>

	<a href="">outils et equipements</a>
   <a href="#">Nous écrire</a>
   
    <a href="contact.php">Nous contacter</a>
   
    <a href="#">Demander un devis</a>
</nav>
<div class="container">
    <?php
    // Récupérer les produits et les afficher sous forme de cartes
    $produits = getProduits();
    if (count($produits) > 0):
        foreach ($produits as $produit): ?>
            <div class="product-card">
                <img src="<?= htmlspecialchars($produit['image']) ?>" alt="Image du produit";>
                <h3><?= htmlspecialchars($produit['nom']) ?></h3>
                <p><?= htmlspecialchars($produit['description']) ?></p>
                <p class="price"><?= htmlspecialchars($produit['prix']) ?> $</p>
                <button>Commander maintenant</button>
            </div>
        <?php endforeach;
    else: ?>
        <p>Aucun produit disponible pour le moment.</p>
    <?php endif; ?>
</div>



<footer>
    <p>&copy; 2024 GapeCongo - Tous droits réservés</p>
</footer>

</body>
</html>
