<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GapeCongo - À propos</title>
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

        .about-content {
            max-width: 1000px;
            margin: 0 auto;
            text-align: left;
        }

        .about-content h2 {
            color: #4CAF50;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .about-content p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
            margin-bottom: 30px;
        }

        .about-mission {
            background-color: #f9f9f9;
            padding: 20px;
            margin-bottom: 30px;
            border-left: 5px solid #4CAF50;
        }

        .team-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .team-member {
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 30%;
            margin: 20px;
            padding: 20px;
            text-align: center;
        }

        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .team-member h3 {
            font-size: 1.5rem;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .team-member p {
            font-size: 1rem;
            color: #555;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        @media (max-width: 768px) {
            .team-grid {
                flex-direction: column;
                align-items: center;
            }

            .team-member {
                width: 80%;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>À propos de GapeCongo</h1>
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
    <div class="about-content">
        <h2>Notre Histoire</h2>
        <p>Dans un monde en constante évolution, GapeCongo est née de la passion d'un groupe d'entrepreneurs déterminés à transformer le paysage économique de la République du Congo. Fondée en 2023 à Inera KIPOPO dans le haut Katanga, notre entreprise a pour mission de faciliter l'accès aux produits et services locaux, tout en soutenant les petites et moyennes entreprises (PME) à se développer dans un marché compétitif.

Tout a commencé avec une simple idée : connecter les producteurs locaux aux consommateurs et entreprises. En parcourant les marchés, nous avons réalisé que beaucoup de talents et de ressources inexplorées étaient à portée de main. Les artisans, agriculteurs, et entrepreneurs congolais avaient des produits de qualité, mais manquaient souvent de visibilité et de soutien pour les faire connaître.

C'est ainsi qu'est né GapeCongo, un écosystème où l'innovation rencontre la tradition. Nous avons lancé une plateforme numérique permettant aux consommateurs d'accéder facilement à une gamme de produits locaux, allant des aliments frais aux créations artisanales. En parallèle, nous offrons des outils et des ressources aux PME pour les aider à se développer, à travers des formations, des conseils en marketing, et des opportunités de financement.

Chez GapeCongo, nous croyons en la force de la communauté. Chaque produit que nous mettons en avant raconte l'histoire de ceux qui le fabriquent, et chaque achat soutient des familles et des entreprises locales. Nous nous engageons à promouvoir une consommation responsable et durable, tout en valorisant le savoir-faire congolais.

Notre vision ne s'arrête pas là. Nous aspirons à être un modèle d'inclusivité, en encourageant la diversité et en créant des partenariats avec d'autres entreprises, ONG et institutions gouvernementales. Ensemble, nous pouvons bâtir un avenir où l'économie congolaise prospère, tout en préservant notre riche patrimoine culturel.

Rejoignez-nous dans cette aventure passionnante pour soutenir le développement durable de notre pays et découvrir les trésors cachés du Congo</p>

        <div class="about-mission">
            <h2>Notre Mission</h2>
            <p>La mission de GapeCongo est de favoriser l'accès aux produits et services locaux en connectant les producteurs congolais avec les consommateurs et entreprises, tout en soutenant le développement durable des petites et moyennes entreprises (PME) à travers des ressources, des formations et des opportunités de marché. Nous nous engageons à valoriser le savoir-faire congolais et à promouvoir une consommation responsable pour bâtir une économie locale prospère.</p>
            <h2>Notre vision</h2>
            <p>La vision de GapeCongo est de devenir le leader de la promotion des produits locaux en République du Congo, en créant un écosystème économique inclusif et durable. Nous aspirons à être un modèle d'innovation sociale, où chaque acteur de la chaîne de valeur — producteurs, consommateurs et entrepreneurs — collabore pour un avenir meilleur. Nous croyons en un Congo où la richesse de notre patrimoine culturel et naturel est préservée et mise en valeur, contribuant ainsi à une société dynamique et prospère.</p>
        </div>
		
        <h2>Rencontrez Notre Équipe</h2>
        <div class="team-grid">
            <div class="team-member">
                <img src="galerie/steph.jpg" alt="Membre équipe 1">
                <h3>Stéphane TSHIBINKUFUA KAYEMBE</h3>
                <p>Fondateur & PDG</p>
				<a href="galerie/CV.pdf">Consulter CV</a>
            </div>

            <div class="team-member">
                <img src="https://via.placeholder.com/100" alt="Membre équipe 2">
                <h3>Nom Membre 2</h3>
                <p>Directeur Marketing</p>
            </div>

            <div class="team-member">
                <img src="https://via.placeholder.com/100" alt="Membre équipe 3">
                <h3>Nom Membre 3</h3>
                <p>Responsable Technique</p>
            </div>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2024 GapeCongo - Tous droits réservés</p>
</footer>

</body>
</html>
