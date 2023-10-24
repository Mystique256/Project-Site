<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/dashboard.css" />
    <meta http-equiv="refresh" content="30">
    <script src="JS/node.js"></script>
    <title>Bienvenue</title>
</head>
<body>
    <div class="menu">
        <div class="submenu"><p>Nos Produits</p></div>
        <div class="submenu" onclick="equipe()"><p>Notre Equipe</p></div>
        <div class="submenu"><p>Electricité</p></div>
        <div class="submenu"><p>Informatique</p></div>
        <div class="submenu"><p>Espace Client</p></div>
    </div>
    <div class="container">
        <h1>Vos Projets,Nos Defis</h1>
        <br>
        <br>
        <p>
            Depuis 2027 , Inf'Elec vous accompagne sur l'ammenagement de votre maison. <br>
            Vous voulez un systeme de maison connecter facile et simple a utilise <br> nous somme la pour vous 
            avec notre abonnement maintenance a -25% si l'appareils viennent de <br> 
            chez nous un probleme sur votre ordinateur ?,Inf'Elec vous aide a le remettre en etat. <br>
            <br>
            Professionel,<br>
            Nous vous accompagnons sur tous la maintenance, quelle soit electique ou informatique
        </p>
        <h1>Nos Forfaits</h1>
        <div class="card">
            <div class="content">
            <div class="title">Edition Particulier</div>
            <div class="price">39.99€</div>
            <div class="description">Service telephonique Lundi et Jeudi de 8h a 16h <br> RDV sous 2 semaine <br> <br></div>
        </div>
        <button>
            Acheter Maintenant
        </button>
        </div>
        <div class="card">
            <div class="content">
            <div class="title">Edition Premium</div>
            <div class="price">49.99€</div>
            <div class="description">Service telephonique h24 <br> RDV sous 1 semaine <br> Main d'oeuvre offert <br> </div>
        </div>
        <button>
            Acheter Maintenant
        </button>
        </div>
        <div class="card">
            <div class="content">
            <div class="title">Edition Professionel</div>
            <div class="price">99.99€</div>
            <div class="description">Service telephonique h24 <br> RDV sous 4 jour<br> Main d'oeuvre offert <br> Maintenance Electrique <br> Maintenance Informatique </div>
        </div>
        <button>
            Acheter Maintenant
        </button>
        </div>
        <div class="card">
            <div class="content">
                <div class="title">Nous Contacter</div>
                <div class="price">+33 01 84 26 32 85</div>
                <div class="description">Un renseignenement, une question appelle le service commercial sur ce numero</div>
            </div>
        </div>
  </div>
  </div>
    </div>
</body>
</html>


<?php  

$dsn = 'mysql:dbname=identification;host=localhost';
$user = 'root';
$password = 'root' ;

try {
    $sgdb = new PDO($dsn,$user,$password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
}


$tkt = $bdd->query("SELECT * FROM users WHERE token = $token");
$repo = $tkt->fetch();

if($repo['token'] == '') {
    header("Location : login.php");
}








?>
