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


if(isset($_POST['envoi'])) {
    extract($_POST);

    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :pseudo, :pwd, :email)");
    $requete->execute(
        array(
            "pseudo" => $pseudo,
            "pwd" => $pwd,
            "email" => $email,
        )
    );
    $reponse = $requete->fetchAll(PDO::FETCH_ASSOC);
     
}


?>