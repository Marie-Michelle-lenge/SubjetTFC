<!DOCTYPE html> 
<html> 
    <head> 
        <title>Esisalama</title> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
        <link href="assets/css/esisalama.min.css" rel="stylesheet" type="text/css" /> 
        <link href="assets/img/favicon.png" rel="icon" type="image/png" /> 
        <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" /><![endif]--> 
    </head> 
    <body>
    
<?php
require 'config.php';
if(isset($_POST["name"]) && isset($_POST["post_nom"]) && isset($_POST["prenom"]) && isset($_POST["matricule"]) && isset($_POST["promotion"]) && isset($_POST["password"]) && isset($_POST["confirmpassword"])){
    $name=$_POST["name"];
    $post_nom=$_POST["post_nom"];
    $prenom=$_POST["prenom"];
    $matricule=$_POST["matricule"];
    $promotion=$_POST["promotion"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    $duplicate=mysqli_query($conn, "SELECT * FROM  etudiant where matricule = '$matricule' ");

    if(mysqli_num_rows($duplicate) > 0){
        echo "<script> alert('Vous avez déjà un compte');</script>";
        header("Location: ../login.html");
        
    }else{
        if($password==$confirmpassword){
            $query= "INSERT INTO etudiant(matricule,nom,postnom,prenom,promotion) VALUES('$matricule','$name','$post_nom','$prenom','$promotion')";
            mysqli_query($conn,$query);
            $query= "INSERT INTO compte(pseudo,psw,matricule) VALUES('$matricule','$password','$matricule')";
            mysqli_query($conn,$query);
            $query= "INSERT INTO suject(matricule) VALUES('$matricule')";
            mysqli_query($conn,$query);
            echo "<script> alert('l'enregistrement a reussi');</script>";
            //session_start();
            $_SESSION["matricule"] = $matricule;
            header("Location: ../gestion-tfc.html");
        }else{
            echo "<script> alert('incorrect password');</script>";
        }

}}


?>
</body> 
</html>