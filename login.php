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

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $pseudo = $_POST['pseudo'];
    $pwd = $_POST['pwd'];
    if($pseudo != "" && $pwd != ""){

        $token = bin2hex(random_bytes(32));

        $req = $bdd->query("SELECT * FROM users WHERE pseudo = '$pseudo' AND pwd= '$pwd'");
        $rep = $req->fetch();
        if($rep['id'] != false){
            
            $bdd->exec("UPDATE users SET token = '$token' WHERE email = '$email' AND pwd = '$pwd'" );
            setcookie("token", $token,time() + 3600);

            header("Location: Dashboard.php");
        }
        else {
            $error_msg = "Username ou PassWord Incorrect!";
        }
    }

}



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS/node.js"></script>
    <link rel="stylesheet" href="CSS/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    <div class="login">
        <form method="POST" action="">
            <h1>Se Connecter</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="pseudo" autocomplete="none" required>
                <i class='bx bxs-user'></i>  
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="pwd" required>
                <i class='bx bxs-lock-alt'></i> 
            </div>
            <button type="submit" class="button">Login</button>
            <div class="enregistrez-vous">
                <p>Pas de compte ?<a href="register.php">Crée un compte</a></p>
            </div>
        </form>

    </div>
    
</body>
</html>