<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookinGroom - Réservation de Salles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        body, html {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    color: #333;
}

/* Barre de navigation */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 40px;
    background: #222;
    color: #fff;
}

.navbar .logo {
    font-size: 1.8em;
    font-weight: bold;
}

.navbar ul {
    display: flex;
    list-style: none;
}

.navbar li {
    margin: 0 20px;
}

.navbar a {
    text-decoration: none;
    color: #ddd;
    transition: color 0.3s;
}

.navbar a:hover {
    color: #fff;
}

/* Section Héros */
.hero {
    height: 80vh;
    background: url('image/hotel-employee-using-mobile-phone.jpg') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    text-align: center;
}

.hero .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
}

.hero-content {
    text-align: center;
    color: #fff;
    position: relative;
    z-index: 1;
}

.hero-content h1 {
    font-size: 3em;
}

.hero-content p {
    font-size: 1.2em;
    margin-top: 10px;
}

.search-bar {
    margin-top: 30px;
    display: flex;
    justify-content: center;
}

.search-bar input {
    width: 300px;
    padding: 10px;
    border-radius: 5px 0 0 5px;
    border: none;
    outline: none;
    font-size: 1em;
}

.search-bar button {
    padding: 10px 20px;
    border: none;
    background: #82b440;
    color: #fff;
    cursor: pointer;
    border-radius: 0 5px 5px 0;
    font-size: 1em;
    transition: background 0.3s;
}

.search-bar button:hover {
    background: #5e8f2b;
}

/* Catégories de salles */
.categories {
    padding: 50px 20px;
    background-color: #fff;
    text-align: center;
}

.categories h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.category-list {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.category-card {
    width: 200px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    transition: transform 0.3s;
}

.category-card:hover {
    transform: translateY(-5px);
}

.category-card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

.category-card h3 {
    padding: 15px;
    background-color: #222;
    color: #fff;
    margin: 0;
    text-align: center;
}

/* Avantages */
.benefits {
    padding: 50px 20px;
    background-color: #f5f5f5;
    text-align: center;
}

.benefits h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.benefits ul {
    list-style-type: none;
    padding: 0;
}

.benefits li {
    font-size: 1.2em;
    margin: 10px 0;
}

/* RESPONSIVE DESIGN */

/* Petits appareils (tablettes et smartphones) */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        padding: 15px;
    }

    .navbar ul {
        flex-direction: column;
        align-items: center;
        margin-top: 10px;
    }

    .navbar li {
        margin: 10px 0;
    }

    .hero-content h1 {
        font-size: 2.2em;
    }

    .hero-content p {
        font-size: 1em;
    }

    .search-bar {
        flex-direction: column;
    }

    .search-bar input {
        width: 80%;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .search-bar button {
        width: 80%;
        border-radius: 5px;
    }

    .category-list {
        flex-direction: column;
        align-items: center;
    }

    .category-card {
        width: 90%;
        margin-bottom: 20px;
    }
}

/* Très petits appareils (mobiles) */
@media (max-width: 480px) {
    .hero-content h1 {
        font-size: 1.8em;
    }

    .categories h2,
    .benefits h2 {
        font-size: 2em;
    }

    .benefits li {
        font-size: 1em;
    }
}

    </style>
    <!-- Barre de navigation -->
    <header class="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">BookinGroom</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inscrip_cont.php">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Salles.php">Salles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Grand bandeau avec champ de recherche -->
    <section class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Trouvez la salle idéale pour votre événement</h1>
            <p>Réservez facilement des salles de réunion, de conférence, de coworking et bien plus encore.</p>
            <div class="search-bar">
                <input type="text" placeholder="Rechercher par ville, type de salle..." />
                <a href="Salles.php"><button id="">Rechercher</button></a>
            </div>
        </div>
    </section>

    <!-- Liste des catégories de salles -->
    <section class="categories">
        <h2>Catégories de Salles</h2>
        <div class="category-list">
            <div class="category-card">
                <img src="image/room-used-official-event.jpg" alt="Salles de Réunion">
                <h3>Salles de Réunion</h3>
            </div>
            <div class="category-card">
                <img src="image/chairs-row-congress-hall-with-no-people.jpg" alt="Salles de Conférence">
                <h3>Salles de Conférence</h3>
            </div>
            <div class="category-card">
                <img src="image/graphic-designers-working-their-desk.jpg" alt="Espaces de Coworking">
                <h3>Espaces de Coworking</h3>
            </div>
            <div class="category-card">
                <img src="image/restaurant-hall-with-small-stage-monitor-red-curtains-brick-walls-white-napoleon-chairs.jpg" alt="Salles d'Événements">
                <h3>Salles d'Événements</h3>
            </div>
        </div>
    </section>

    <!-- Section Avantages de la Plateforme -->
    <section class="benefits">
        <h2>Pourquoi choisir BookinGroom ?</h2>
        <ul>
            <li>Réservation simple et rapide</li>
            <li>Des salles variées pour tous vos besoins</li>
            <li>Paiement sécurisé en ligne</li>
            <li>Des avis authentiques pour vous guider</li>
        </ul>
        <div id="contenu" class="container">
        
        </div>
    </section>
    

    
    <script>
                    // App.js
            import React from 'react';
            import './App.css';

            function App() {
                return (
                    <div className="App">
                        <Header />
                        <Hero />
                        <Categories />
                        <Benefits />
                    </div>
                );
            }

            // Composant Header
            const Header = () => (
                <header className="navbar">
                    <div className="logo">BookinGroom</div>
                    <nav>
                        <ul>
                            <li><a href="index.php">Accueil</a></li>
                            <li><a href="inscrip_cont.php">Rechercher des Salles</a></li>
                            <li><a href="Salles.php">Connexion</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </header>
            );

            // Composant Hero
            const Hero = () => (
                <section className="hero">
                    <div className="overlay"></div>
                    <div className="hero-content">
                        <h1>Trouvez la salle idéale pour votre événement</h1>
                        <p>Réservez facilement des salles de réunion, de conférence, de coworking et bien plus encore.</p>
                        <div className="search-bar">
                            <input type="text" placeholder="Rechercher par ville, type de salle..." />
                            <button id = "connexion" >Rechercher</button>
                        </div>
                    

                    </div>
                </section>
                
            
                
            );

            // Ajoutez les autres composants de la même manière.

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/my-script.js"></script>

</body>
</html>
