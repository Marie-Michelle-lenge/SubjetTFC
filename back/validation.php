<?php
require_once 'config.php';
$idSuject= $_GET['idSuject'];
if($idSuject){
    $query="UPDATE suject set etatArt='VALIDE' where idSuject=:idSuject";
    $stmt=$pdo->prepare($query);
    $stmt->execute(['idSuject'=>$idSuject]);
    header("Location:../toutSujet.php");
}
