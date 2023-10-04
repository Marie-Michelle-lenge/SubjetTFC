<?php
    require "config.php";
    if(isset($_GET['idSuject'])){
        $idSuject=$_GET['idSuject'];
        $query="DELETE FROM suject where idSuject=:idSuject";
        $stmt=$pdo->prepare($query);
        $stmt->execute(["idSuject"=>$idSuject]);
        header("Location:../gestion-tfc.php");
    }
?>