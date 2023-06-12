<?php
$requete= "SELECT * FROM utilisateurs WHERE nom='".$_SESSION['nom']."' AND prenom='".$_SESSION['prenom']."' AND code_postal='".$_SESSION['code_postal']."'";
$result = $conn->query($requete);

// On vérifie que le résultat retourne au moins une ligne sinon il ne trouve aucun utilisateurs
if ($result->num_rows >= 1) {
    $identifiants = $result -> fetch_array(MYSQLI_ASSOC);
    // Redirection vers l'espace client
    header("Location: espace_client");
}
else {
    echo "Vous n'avez pas les bons identifiants !";
}
// ?>