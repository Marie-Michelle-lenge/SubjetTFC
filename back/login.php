<?php
require 'config.php';
if(isset($_POST["pseudo"])&& isset($_POST["password"])){
// Vérification des informations d'authentification
$pseudo = $_POST["pseudo"];
$password = $_POST["password"];
if(filter_var($pseudo, FILTER_VALIDATE_EMAIL)){
    $query="SELECT admin.email,admin.password FROM admin WHERE email=:pseudo AND password=:password";
    $stmt=$pdo->prepare($query);
    $stmt->execute(["pseudo"=>$pseudo,"password"=>$password]);
    $user=$stmt->fetch();
    if(!$user){

        // Admin authentifié
        $email = $user[0]["email"];

        // Enregistrement de la session
        if(session_status() == PHP_SESSION_NONE) session_start();
        $_SESSION["email"] = $email;

            // Redirection vers la page d'accueil
            header("Location: ../gestion-tfc.php");

         } else {

            // Admin non authentifié
            header("Location: ../login.html");

        }
    }else{
    
        $query = "SELECT etudiant.matricule,nom,postnom,prenom FROM compte INNER JOIN etudiant ON compte.matricule=etudiant.matricule WHERE pseudo = :pseudo AND psw = :password";
        $stmt=$pdo->prepare($query);
        $stmt->execute(['pseudo'=>$pseudo,'password'=>$password]);
        $user=$stmt->fetch();

        if (!empty($user)) {

            // Étudiant authentifié
            $matricule = $user["matricule"];

            // Enregistrement de la session
            if(session_status() == PHP_SESSION_NONE) session_start();
            $_SESSION["matricule"] = $matricule;

            // Redirection vers la page d'accueil
            header("Location: ../gestion-tfc.php");

        } else {

            // Étudiant non authentifié
            header("Location: ../login.html");

        }
}

}

?>
