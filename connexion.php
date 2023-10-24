<?php 


    $dsn = 'mysql:dbname=identification;host=localhost';
    $user = 'root';
    $password = 'root' ;

    try {
        $sgdb = new PDO($dsn,$user,$password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (PDOException $e) {
        echo 'Echec de la connection :' . $e->getMessage();
    }