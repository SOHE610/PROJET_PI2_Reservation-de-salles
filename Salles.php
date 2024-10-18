<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de Salle</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: url('image/hotel-employee-using-mobile-phone.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }

        /* Barre de navigation à gauche */
        .navbar {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            padding: 20px;
            background: #222;
            color: #fff;
            width: 200px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
        }

        .navbar .logo {
            font-size: 1.8em;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .navbar ul {
            list-style: none;
            padding: 0;
        }

        .navbar li {
            margin: 15px 0;
        }

        .navbar a {
            text-decoration: none;
            color: #ddd;
            transition: color 0.3s;
        }

        .navbar a:hover {
            color: #fff;
        }

        /* Contenu principal */
        .main-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 40px;
            padding: 40px;
            padding-left: 240px; /* Espace pour la barre de navigation */
            min-height: 100vh;
        }

        /* Bouton principal de réservation */
        .main-reserve-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 20px auto;
            display: block;
            font-size: 1.2em;
            transition: background 0.3s;
            width: 200px;
        }

        .main-reserve-btn:hover {
            background-color: #45a049;
        }

        /* Carte de salle */
        .category-row {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            width: 90%;
        }

        .category-title {
            text-align: left;
            width: 100%;
            font-size: 1.5em;
            color: #fff;
            margin-bottom: 10px;
        }

        .salle-card {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            width: 220px;
            padding: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .salle-card img {
            width: 100%;
            height: 120px;
            border-radius: 8px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        /* Boîte de sélection en bas à gauche */
        .selection-box {
            position: fixed;
            bottom: 20px;
            left: 220px; /* Ajuster pour la barre de navigation */
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 15px;
            border-radius: 10px;
            display: none;
            width: 200px;
        }

        .ok-btn {
            background-color: #f39c12;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: none;
        }

        /* Footer */
        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            font-size: 0.9em;
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <a class="logo" href="#">BookinGroom</a>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="inscrip_cont.php">Connexion</a></li>
            <li><a href="#">Salles</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </header>

    <!-- Bouton de Réservation principal -->
    <button id="mainReserveBtn" class="main-reserve-btn">Réserver</button>

    <!-- Contenu principal -->
    <div class="main-container">
        <!-- Réunion -->
        <div class="category-row">
            <div class="category-title">Réunion</div>
            <div class="salle-card">
                <img src="image/Table de réunion avec pieds métal et bois Erika.jfif" alt="Salle Réunion 1">
                <p class="salle-description">La table de réunion Erika allie élégance et fonctionnalité, conçue pour répondre aux besoins des environnements de travail modernes. </p>
                <p class="salle-price">€100/h</p>
            </div>
            <div class="salle-card">
                <img src="image/télécharger (2).jfif" alt="Salle Réunion 2">
                <p class="salle-description">Pour les grande classique , d'affaire </p>
                <p class="salle-price">€120/h</p>
            </div>
            <div class="salle-card">
                <img src="image/télécharger (1).jfif" alt="Salle Réunion 3">
                <p class="salle-description">Réunion diverse / Bourgoise </p>
                <p class="salle-price">€150/h</p>
            </div>
            <div class="salle-card">
                <img src="image/Orion tensionné - Mairie d'Erstein.jfif" alt="Salle Réunion 4">
                <p class="salle-description">Grande classique / Réunion d'entreprise 😎</p>
                <p class="salle-price">€180/h</p>
            </div>
        </div>

        <!-- Conférence -->
        <div class="category-row">
            <div class="category-title">Conférence</div>
            <div class="salle-card">
                <img src="image5.jpg" alt="Salle Conférence 1">
                <p class="salle-description">Salle Conférence A</p>
                <p class="salle-price">€200/h</p>
            </div>
            <div class="salle-card">
                <img src="image6.jpg" alt="Salle Conférence 2">
                <p class="salle-description">Salle Conférence B</p>
                <p class="salle-price">€250/h</p>
            </div>
            <div class="salle-card">
                <img src="image7.jpg" alt="Salle Conférence 3">
                <p class="salle-description">Salle Conférence C</p>
                <p class="salle-price">€300/h</p>
            </div>
            <div class="salle-card">
                <img src="image8.jpg" alt="Salle Conférence 4">
                <p class="salle-description">Salle Conférence D</p>
                <p class="salle-price">€350/h</p>
            </div>
        </div>

        <!-- Événement -->
        <div class="category-row">
            <div class="category-title">Événement</div>
            <div class="salle-card">
                <img src="image9.jpg" alt="Salle Evènement 1">
                <p class="salle-description">Salle Evènement A</p>
                <p class="salle-price">€300/h</p>
            </div>
            <div class="salle-card">
                <img src="image10.jpg" alt="Salle Evènement 2">
                <p class="salle-description">Salle Evènement B</p>
                <p class="salle-price">€350/h</p>
            </div>
            <div class="salle-card">
                <img src="image11.jpg" alt="Salle Evènement 3">
                <p class="salle-description">Salle Evènement C</p>
                <p class="salle-price">€400/h</p>
            </div>
            <div class="salle-card">
                <img src="image12.jpg" alt="Salle Evènement 4">
                <p class="salle-description">Salle Evènement D</p>
                <p class="salle-price">€450/h</p>
            </div>
        </div>

        <!-- Espace de coworking -->
        <div class="category-row">
            <div class="category-title">Espace de coworking</div>
            <div class="salle-card">
                <img src="image13.jpg" alt="Espace Coworking 1">
                <p class="salle-description">Espace Coworking A</p>
                <p class="salle-price">€20/h</p>
            </div>
            <div class="salle-card">
                <img src="image14.jpg" alt="Espace Coworking 2">
                <p class="salle-description">Espace Coworking B</p>
                <p class="salle-price">€25/h</p>
            </div>
            <div class="salle-card">
                <img src="image15.jpg" alt="Espace Coworking 3">
                <p class="salle-description">Espace Coworking C</p>
                <p class="salle-price">€30/h</p>
            </div>
            <div class="salle-card">
                <img src="image16.jpg" alt="Espace Coworking 4">
                <p class="salle-description">Espace Coworking D</p>
                <p class="salle-price">€35/h</p>
            </div>
        </div>
    </div>

    <!-- Boîte de sélection -->
    <div class="selection-box" id="selectionBox">
        <h4>Salles sélectionnées :</h4>
        <ul id="selectedRooms"></ul>
        <button class="ok-btn" id="okButton">OK</button>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 PassBoutique. Tous droits réservés.</p>
    </footer>

    <script>
        const mainReserveBtn = document.getElementById('mainReserveBtn');
        const selectionBox = document.getElementById('selectionBox');
        const selectedRoomsList = document.getElementById('selectedRooms');
        const okButton = document.getElementById('okButton');
        const salleCards = document.querySelectorAll('.salle-card');

        let selecting = false;

        mainReserveBtn.addEventListener('click', () => {
            if (!selecting) {
                selecting = true;
                selectionBox.style.display = 'block';
                salleCards.forEach((card) => {
                    const checkbox = document.createElement('input');
                    checkbox.type = 'checkbox';
                    checkbox.value = card.querySelector('.salle-description').innerText;
                    checkbox.addEventListener('change', (e) => handleSelection(e));
                    card.insertAdjacentElement('afterbegin', checkbox);
                });
            }
        });

        function handleSelection(e) {
            const roomName = e.target.value;
            if (e.target.checked) {
                const listItem = document.createElement('li');
                listItem.innerText = roomName;
                listItem.setAttribute('data-room', roomName);
                selectedRoomsList.appendChild(listItem);
                okButton.style.display = 'block';
            } else {
                const listItem = document.querySelector(`[data-room="${roomName}"]`);
                if (listItem) listItem.remove();
                if (selectedRoomsList.children.length === 0) okButton.style.display = 'none';
            }
        }

        okButton.addEventListener('click', () => {
            alert('Réservation éffectus.');
            selectionBox.style.display = 'none';
            selectedRoomsList.innerHTML = '';
            selecting = false;
            okButton.style.display = 'none';
            document.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.remove());
        });
    </script>
</body>
</html>
