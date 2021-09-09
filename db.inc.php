<?php
    $dbname = "project";
    $user = "Daniel";
    $password = "VujpTfSi1t](Vd[u";
    $dbhost = "localhost";

    try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $user, $password, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
    }
    catch(PDOException $e) {
        die("Konnte keine Verbindung mit Datenbank aufbauen");
    }
?>