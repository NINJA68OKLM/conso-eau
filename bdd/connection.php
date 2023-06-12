<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moukadem_eau";
$conn = new mysqli($servername, $username, $password, $dbname);
// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $requete= "SELECT * FROM utilisateurs";
// $result = $conn->query($requete);
// $identifiants = $result -> fetch_array(MYSQLI_ASSOC);


// var_dump($identifiants);
// setcookie("id", $identifiants["id"], time()+3600);
// setcookie("nom", $identifiants["nom"], time()+3600);
// setcookie("prenom", $identifiants["prenom"], time()+3600);
// setcookie("code_postal", $identifiants["code_postal"], time()+3600);
?>