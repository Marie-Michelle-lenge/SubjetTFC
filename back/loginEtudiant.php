<?php

// Connexion à la base de données
require 'config.php';


// Récupérez les données de connexion
$matricule = $_POST['matricule'];
$motdepasse = $_POST['motdepasse'];

// Récupérez les données de l'étudiant
$query = "SELECT etudiant.*, promotion.name FROM etudiant JOIN promotion ON etudiant.idpromo = promotion.id WHERE matricule = '$matricule'";
$result = mysqli_query($conn, $query);
$etudiant = mysqli_fetch_assoc($result);

// Vérifiez si l'étudiant existe
if ($etudiant == null) {
    echo "<script> alert('Etudiant non trouvé !');</script>";
    header("Location: ../espaceEtudiant.html");
    exit();
}

// Vérifiez si la promotion de l'étudiant est L4
if ($etudiant['name'] != 'L4') {
    echo "<script> alert('Vous n\'êtes pas autorisé à vous connecter !');</script>";
    header("Location: ../espaceEtudiant.html");
    exit();
}

// Vérifiez si le matricule et le mot de passe correspondent au compte de l'étudiant
$query = "SELECT * FROM compte WHERE pseudo = '$matricule' AND psw = '$motdepasse'";
$result = mysqli_query($conn, $query);
$compte = mysqli_fetch_assoc($result);

// Vérifiez si le compte existe
if ($compte == null) {
    echo "<script> alert('Identifiants incorrects !');</script>";
    header("Location: ../espaceEtudiant.html");
    exit();
}

// L'étudiant est connecté
session_start();
$_SESSION['etudiant'] = $etudiant;
$_SESSION['compte'] = $compte;

// Redirection vers la page d'accueil
header("Location: ../toutSujet.php");
?>
