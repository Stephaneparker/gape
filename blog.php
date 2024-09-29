<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GapeCongo - Blog</title>
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

        .blog-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .blog-card {
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 30%;
            margin: 20px;
            padding: 20px;
            text-align: left;
        }

        .blog-card img {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .blog-card h3 {
            font-size: 1.5rem;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .blog-card p {
            font-size: 1rem;
            margin-bottom: 15px;
            color: #555;
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
            .blog-grid {
                flex-direction: column;
                align-items: center;
            }

            .blog-card {
                width: 80%;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Notre Blog GapeCongo</h1>
</header>

<nav>
  <a href="index.php">Accueil</a>
    <a href="services.php">Services</a>
    <a href="produits.php">Produits</a>
	<a href="Intrants.php">Intrants</a>
	<a href="">outils et equipements</a>
    <a href="blog.php">Blog</a>
    <a href="contact.php">Contact</a>
    
</nav>

<section class="section">
    <h2>Derniers articles</h2>
    <div class="blog-grid">
        <div class="blog-card">
            <img src="https://via.placeholder.com/300x200" alt="Article 1">
            <h3>Titre de l'article 1</h3>
            <p>Ceci est une brève description de l'article 1 pour donner un aperçu du contenu.</p>
            <a href="#" class="btn">Lire l'article</a>
        </div>

        <div class="blog-card">
            <img src="https://via.placeholder.com/300x200" alt="Article 2">
            <h3>Titre de l'article 2</h3>
            <p>Ceci est une brève description de l'article 2 pour attirer l'attention des lecteurs.</p>
            <a href="#" class="btn">Lire l'article</a>
        </div>

        <div class="blog-card">
            <img src="https://via.placeholder.com/300x200" alt="Article 3">
            <h3>Titre de l'article 3</h3>
            <p>Ceci est une brève description de l'article 3, invitant les lecteurs à découvrir plus.</p>
            <a href="#" class="btn">Lire l'article</a>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2024 GapeCongo - Tous droits réservés</p>
</footer>

</body>
</html>
