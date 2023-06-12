<?php
$requete= "INSERT INTO utilisateurs (nom, prenom, code_postal) VALUES ('".$_SESSION["nom"]."', '".$_SESSION["prenom"]."', ".$_SESSION["code_postal"].")";
$result = $conn->query($requete);
// var_dump($identifiants);
?>