<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club et Entraînement</title>
    <!-- Inclure vos liens CSS ici -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <!-- Ajouter votre logo ici -->
        <img src="Images\Logo_VAA_CNAM.png">
        <h1>Club & Entraînement</h1>
    </header>

    <section id="club">
        <h2>Le Club</h2>
        <p>
            Bienvenue au Club de Pirogue Polynésienne. Nous sommes dédiés à la promotion du Va'a dans le respect de la tradition polynésienne.
        </p>
    </section>

    <section id="training">
        <h2>Entraînements</h2>
        <p>
            Rejoignez nos séances d'entraînement pour améliorer vos compétences en pagayage. Les places sont limitées, veuillez réserver la vôtre dès maintenant.
        </p>

        <!-- Formulaire de réservation -->
        <form action="/reserver" method="post">
            @csrf <!-- Ajoutez la protection CSRF pour Laravel -->

            <!-- Ajoutez vos champs du formulaire ici -->
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="telephone">Téléphone :</label>
            <input type="tel" id="telephone" name="telephone" required>

            <label for="nombre_places">Nombre de places (max 6) :</label>
            <input type="number" id="nombre_places" name="nombre_places" min="1" max="6" required>

            <button type="submit">Réserver</button>
        </form>
    </section>

    <footer>
        <!-- Ajouter votre pied de page ici -->
        <p>&copy; 2023 Club de Pirogue Polynésienne. Tous droits réservés.</p>
    </footer>

    <!-- Inclure vos scripts JavaScript ici -->
    <script src="scripts.js"></script>
</body>
</html>
