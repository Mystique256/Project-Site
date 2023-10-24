
<?php
$serveur = 'localhost';
$login = 'root';
$mdp =  '';

try {
$bdd = new PDO("mysql:host=$serveur;dbname=identification", $login, $mdp);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Erreur :" .$e->getMessage();
}
?>



<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/register.css">
        <script src="JS/node.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Crée un compte</title>
    </head>
    <body>
        <div class="register">
            <form method="POST" action="traitement.php">
                <h1>Crée un compte</h1>
                <div class="input-box">
                        <input type="text" placeholder="Nom">
                        <i class='bx bxs-edit-alt'></i>
                </div>
                <div class="input-box">
                        <input type="text" placeholder="Prenom">
                        <i class='bx bxs-edit-alt'></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Username" id="pseudo"  name="pseudo" autocomplete="none" require>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" id="pwd" name="pwd" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Adresse Numerique" id="email" name="email" autocomplete="none" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <button type="submit" class="button" name="envoi">Register</button>
                <div class="connectez-vous">
                    <p>Vous avez un compte ? <a href="login.php">connectez-vous</a></p>
                </div>
            </form>
        </div>
    </body>
</html>