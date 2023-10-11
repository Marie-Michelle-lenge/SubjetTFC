<?php
//echo "ajoutons maitenant";
require 'config.php';

if(isset($_POST["matricule"])&& isset($_POST["name"])&& isset($_POST["post_nom"])&&  isset($_POST["prenom"]) &&  isset($_POST["promotion"])&&  isset($_POST["filiere"])&&  isset($_POST["password"])){
$matricule=$_POST["matricule"];
$name=$_POST["name"];
$post_nom=$_POST["post_nom"];
$prenom=$_POST["prenom"];
$id_promotion=$_POST["promotion"];
$id_filiere=$_POST["filiere"];
$password = $_POST["password"];

$duplicate=mysqli_query($conn, "SELECT * FROM  etudiant where matricule = '$matricule' ");

if(mysqli_num_rows($duplicate) > 0){
    echo "<script> alert('cette etudiant existe deja!!');</script>";
    header("Location: ../addEtudiant.html");
    
}else{

        $query = "SELECT name FROM filiere WHERE id = $id_filiere";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $nom_filiere = $row['name'];

        $query = "SELECT name FROM promotion WHERE id = $id_promotion";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $nom_promotion = $row['name'];
        
        $query= "INSERT INTO etudiant(matricule, nom, postnom, prenom, idpromo, idfil) VALUES('$matricule', '$name', '$post_nom', '$prenom', $id_promotion, $id_filiere)";
        
        mysqli_query($conn,$query);
        $query= "INSERT INTO compte(pseudo,psw,matricule) VALUES('$matricule','$password','$matricule')";
        mysqli_query($conn,$query);
        
       
        echo "<script> alert('l'enregistrement a reussi');</script>";
        //session_start();
        $_SESSION["matricule"] = $matricule;
        header("Location: ../toutSujet.php");

}
}

?>
