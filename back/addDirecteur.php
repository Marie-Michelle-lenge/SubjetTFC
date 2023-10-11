<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'config.php';
if(isset($_POST["nom"])&& isset($_POST["postnom"])&& isset($_POST["prenom"])&& isset($_POST["specialite"])){
    $nom=$_POST["nom"];
    $postnom=$_POST["postnom"];
    $prenom=$_POST["prenom"];
    $specialite=$_POST["specialite"];
    
    
    $duplicate=mysqli_query($conn, "SELECT * FROM  directeur where nom = '$nom' ");
    
    if(mysqli_num_rows($duplicate) > 0){
        echo "<script> alert('ce directeur existe deja!!');</script>";
        header("Location: ../addDirecteur.html");
        
    }else{
    
            
        $query = "INSERT INTO directeur (nom, postnom, prenom, specialite) VALUES ('$nom', '$postnom', '$prenom', '$specialite')";
        
        $result = mysqli_query($conn, $query);
    
        // Obtenez le nombre de lignes affectées par la requête
        $rows_affected = mysqli_affected_rows($conn);
    
        // Si le directeur a été ajouté avec succès
        if($rows_affected > 0){
            echo "<script> alert('l'enregistrement a reussi');</script>";
            header("Location: ../toutSujet.php");
        }
    
    }
}
?>
