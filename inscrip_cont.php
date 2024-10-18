<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inscription et Connexion</title>
    <style>
        /* Structure de base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Image de fond avec opacité */
     /* Image de fond avec opacité noire */
body, html {
    height: 100%;
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
}

body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('image/hotel-employee-using-mobile-phone.jpg') center center / cover no-repeat fixed;
    background-color: rgba(0, 0, 0, 0.5); /* Couche noire semi-transparente */
    z-index: -1;
}



        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: rgba(34, 34, 34, 0.9); /* Fond semi-transparent */
            color: #fff;
            z-index: 1;
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

        /* Conteneur principal */
        main {
            display: flex;
            flex: 1;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        /* Formulaire avec effet verre */
        .form-section {
            background: rgba(255, 255, 255, 0.2); /* Fond transparent */
            backdrop-filter: blur(10px); /* Effet flou */
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
            margin: 0 auto;
            color: #fff;
        }

        /* Titles */
        .form-section h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        /* Labels and Inputs */
        .form-section label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }
        
        .form-section input {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        /* Buttons */
        .form-section button {
            background-color: rgba(76, 175, 80, 0.7);
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
            transition: background 0.3s;
        }

        .form-section button:hover {
            background-color: rgba(76, 175, 80, 1);
        }

        .form-section .reset-password, .create-account-btn {
            display: inline-block;
            color: rgba(76, 175, 80, 0.8);
            cursor: pointer;
            margin-top: 10px;
            font-size: 14px;
        }

        /* Footer */
        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            font-size: 0.9em;
        }

        /* Responsivité */
        @media (max-width: 768px) {
            .form-section h2 {
                font-size: 2em;
            }

            .form-section input,
            .form-section button {
                font-size: 0.9em;
            }
        }

        /* Cacher les sections */
        .hidden {
            display: none;
        }

        /* Style pour le bouton Créer un compte */
        .create-account-btn {
            margin-top: 10px;
            width: 50%;
            padding: 10px;
            background: rgba(130, 180, 64, 0.7);
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.3s;
        }

        .create-account-btn:hover {
            background: rgba(94, 143, 43, 1);
        }

        /* Champs de saisie pour le formulaire d'inscription */
#inscription input {
    background-color: #fff; /* Couleur de fond blanche */
    color: #000; /* Couleur du texte noir */
}

    </style>
</head>
<body>
    <!-- Navbar -->
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

    <!-- Contenu principal -->
    <main>
        <section id="inscription" class="form-section hidden">
            <h2>Créer un Compte</h2>
            <form id="registration-form" action="#" method="POST">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Nom" required>

                <label for="email-inscription">Email</label>
                <input type="email" id="email-inscription" name="email" placeholder="Email" required>

                <label for="motdepasse">Mot de passe</label>
                <input type="password" id="motdepasse" name="motdepasse" placeholder="Mot de passe" required>

                <label for="confirmer_motdepasse">Confirmer le mot de passe</label>
                <input type="password" id="confirmer_motdepasse" name="confirmer_motdepasse" placeholder="Confirmer le mot de passe" required>

                <button type="submit">S'inscrire</button>
            </form>
        </section>

        <!-- Section Connexion -->
        <section id="connexion" class="form-section">
            <h2>Connexion</h2>
            <form id="login-form" action="#" method="POST">
                <label for="email-connexion">Email</label>
                <input type="email" id="email-connexion" name="email" placeholder="Email" required>

                <label for="motdepasse-connexion">Mot de passe</label>
                <input type="password" id="motdepasse-connexion" name="motdepasse" placeholder="Mot de passe" required>

                <button type="submit">Se connecter</button>
            </form>

            <!-- Lien pour réinitialiser le mot de passe -->
            <a href="#" class="reset-password">Mot de passe oublié ?</a>

            <!-- Bouton pour ouvrir la section Inscription -->
            <button id="create-account-btn" class="create-account-btn">Créer un compte</button>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 PassBoutique. Tous droits réservés.</p>
    </footer>

    <script>
        // Ciblage des éléments
        const inscriptionSection = document.getElementById('inscription');
        const connexionSection = document.getElementById('connexion');
        const createAccountBtn = document.getElementById('create-account-btn');

        // Écouteur d'événement pour le bouton "Créer un compte"
        createAccountBtn.addEventListener('click', function() {
            // Masquer la section Connexion
            connexionSection.classList.add('hidden');
            // Afficher la section Inscription
            inscriptionSection.classList.remove('hidden');
        });
    </script>
</body>
</html>
