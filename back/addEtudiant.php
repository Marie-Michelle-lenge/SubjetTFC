<?php
//echo "ajoutons maitenant";
require 'config.php';

if(isset($_POST["matricule"])&& isset($_POST["name"])&& isset($_POST["post_nom"])&&  isset($_POST["prenom"]) &&  isset($_POST["promotion"])&&  isset($_POST["filiere"])&&  isset($_POST["password"])){
$matricule=$_POST["matricule"];
$name=$_POST["name"];
$post_nom=$_POST["post_nom"];
$prenom=$_POST["prenom"];
$promotion=$_POST["promotion"];
$filiere=$_POST["filiere"];
$password = $_POST["password"];

$duplicate=mysqli_query($conn, "SELECT * FROM  etudiant where matricule = '$matricule' ");

if(mysqli_num_rows($duplicate) > 0){
    echo "<script> alert('cette etudiant existe deja!!');</script>";
    header("Location: ../addEtudaint.html");
    
}else{
        $query= "INSERT INTO filiere(name) VALUES('$filiere')";
        mysqli_query($conn,$query);
        $query= "INSERT INTO etudiant(matricule,nom,postnom,prenom) VALUES('$matricule','$name','$post_nom','$prenom')";
        mysqli_query($conn,$query);
        $query= "INSERT INTO compte(pseudo,psw,matricule) VALUES('$matricule','$password','$matricule')";
        mysqli_query($conn,$query);
        $query= "INSERT INTO promotion(name) VALUES('$promotion')";
        mysqli_query($conn,$query);
       
        echo "<script> alert('l'enregistrement a reussi');</script>";
        //session_start();
        $_SESSION["matricule"] = $matricule;
        header("Location: ../gestion-tfc.html");

}
}

?>