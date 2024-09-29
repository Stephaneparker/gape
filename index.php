<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur GapeCongo, votre  ue en ligne">
    <meta name="keywords" content="e-commerce, boutique, shopping, GapeCongo">
    <meta name="author" content="Stéphane, TSHIBINKUFA, KAYEMBE">
    <title>GapeCongo - Accueil</title>
    <link rel="stylesheet" href="styles.css"> <!-- Ajoute le fichier CSS -->
    <title>GapeCongo - Accueil</title>
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

        .hero {
            background: url('https://via.placeholder.com/1200x400') no-repeat center center;
            background-size: cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            font-size: 3rem;
        }

        .hero p {
            font-size: 1.5rem;
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

        .section {
            padding: 50px 20px;
            text-align: center;
        }

        .cards {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 30%;
            margin: 20px;
            padding: 20px;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        @media (max-width: 768px) {
            .cards {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 80%;
            }
        }
		/* Style pour contenir l'image et le texte */
    .image-container {
      position: relative;
      width: 100%;
      max-width: auto; /* Largeur maximale de l'image */
    }

    /* Image qui sera la base de la superposition */
    .image-container img {
      width: 100%;
      height: auto;
    }

    /* Texte superposé sur l'image */
    .image-container .overlay-text {
      position: absolute;
      top: 0%;  /* Positionne le texte au centre de l'image (verticalement) */
      left: 0%; /* Positionne le texte au centre de l'image (horizontalement) */
      transform: translate(0%, 0%); /* Centrer précisément */
      color: black;  /* Couleur du texte */
      font-size: 24px;
      font-weight: bold;
      background-color: rgba(0, 0, 0, 0); /* Fond complètement transparent */
      padding: 30px;
      border-radius: 0px;
      text-align: center;
    }
	/* Animation de clignotement */
    @keyframes clignote {
      0% { opacity: 1; }
      50% { opacity: 0; }
      100% { opacity: 1; }
    }

    /* Style pour le texte clignotant */
    .clignotant {
      color: blue;
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      animation: clignote 1s infinite; /* Animation qui se répète toutes les secondes */
    }
	/* Positionner le texte dans le coin supérieur gauche */
    .texte-haut-gauche {
      position: absolute;
      top: 10px;
      left: 50px;
    }
    </style>
</head>
<body>
<header>
    <h1>Bienvenue chez GapeCongo</h1>
</header>
<nav>
    
    <a href="services.php">Services</a>
    <a href="produits.php">Produits</a>
	<a href="Intrants.php">Intrants</a>
	<a href="">outils et equipements</a>
    <a href="blog.php">Blog</a>
    <a href="apropos.php">À propos</a>
    <a href="contact.php">Contact</a>
</nav>
 <div class="image-container">
    <img src="galerie/doc1/logo_gapecongo.png" alt="Produit 1">
   <section class="hero"> <div class="texte-haut-gauche">
	<div class="clignotant">
	     <h2>Nous sommes votre partenaire de confiance dans l'agro-business</br> <div class="service-card">
            
            </div></h2></div>
			</div>
  </div>
</section>
<section class="section" id="testimonials">
    <h2>Ce que disent nos clients</h2>
    <div class="cards">
        <div class="card">
            <p>"Service exceptionnel, je recommande fortement!"</p>
            <p>- Client 1</p>
        </div>
        <div class="card">
            <p>"Une équipe professionnelle et à l'écoute."</p>
            <p>- Client 2</p>
        </div>
        <div class="card">
            <p>"Résultats au-delà de nos attentes!"</p>
            <p>- Client 3</p>
        </div>
    </div>
</section>

<section class="section" id="services">
    <h2>Nos Services</h2>
    <div class="cards">
        <div class="card">
            <img src="https://via.placeholder.com/300x200" alt="Service 1">
            <h3>Service 1</h3>
            <p>Description du service 1.</p>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/300x200" alt="Service 2">
            <h3>Service 2</h3>
            <p>Description du service 2.</p>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/300x200" alt="Service 3">
            <h3>Service 3</h3>
            <p>Description du service 3.</p>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2024 GapeCongo - Tous droits réservés</p>
</footer>
 <a href="admin/login.php">outils admin</a>
</body>
</html>