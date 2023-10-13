<?php
require 'config.php';

if(isset($_POST["matricule"])&& isset($_POST["motdepasse"])){
// Vérification des informations d'authentification
$pseudo = $_POST["matricule"];
$password = $_POST["motdepasse"];

if(filter_var($pseudo, FILTER_VALIDATE_EMAIL)){
    $query="SELECT admin.email,admin.password FROM admin WHERE email='$pseudo' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if ($result->num_rows == 1) {

        // Admin authentifié
        $row = $result->fetch_assoc();
        $email = $row["email"];

        

        // Enregistrement de la session
        if(session_status() == PHP_SESSION_NONE) session_start();
        $_SESSION["email"] = $email;

        // Redirection vers la page d'accueil
        header("Location: ../toutSujet.php");

    } else {

        // Admin non authentifié
        header("Location: ../connexion-tfc.php");

    }
}
}

?>
