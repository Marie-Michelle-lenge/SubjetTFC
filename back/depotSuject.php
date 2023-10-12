<?php
if(session_status()== PHP_SESSION_NONE) session_start();
$matricule=$_SESSION['etudiant']['matricule'];

//Connexion à la base de données
require 'config.php';



// Récupérez les données du sujet
$intitule = $_POST['intitule'];
$theme = $_POST['theme'];
$problematique = $_POST['problematique'];
$hypothese = $_POST['hypothese'];
$etatArt = "NON VALIDE";
$annAcad = $_POST['annAcad'];


// Vérifiez si le thème existe
$query = "SELECT * FROM theme WHERE designation = '$theme'";
$result = mysqli_query($conn, $query);
$theme_existe = mysqli_num_rows($result) > 0;

$duplicate=mysqli_query($conn, 'SELECT * FROM  suject where intitule = "$intitule" ');

$duplicate = mysqli_query( $conn,"SELECT *FROM suject  where matricule='$matricule'");

if(mysqli_num_rows($duplicate) > 0){
    header("Location: ../toutSujet.php");
    echo "<script> alert('vous avez un suject!!');</script>";
}else{
// Enregistrez le thème si nécessaire
if (!$theme_existe) {
    $query = "INSERT INTO theme (designation) VALUES ('$theme')";
    mysqli_query($conn, $query);
}

// Obtenez l'ID du thème
$query = "SELECT id FROM theme WHERE designation = '$theme'";
$result = mysqli_query($conn, $query);
$id_theme = mysqli_fetch_assoc($result)['id'];
// Enregistrez le sujet
$query = "INSERT INTO suject (intitule, idTheme, problematique, hypothese, etatArt, annAcad,matricule) VALUES ('$intitule', '$id_theme', '$problematique', '$hypothese', '$etatArt', '$annAcad','$matricule')";
mysqli_query($conn, $query);

// Redirection vers la page d'accueil
header("Location: ../toutSujet.php");
}
?>