<?php

    require_once "config.php";
    if(isset($_POST['idSuject'],$_POST['intitule'],$_POST['theme'],$_POST['problematique'],$_POST['hypothese'],$_POST['etatArt'],$_POST['annAcad'])){
        $query="UPDATE suject set intitule=:intitule,theme=:theme,problematique=:problematique,hypothese=:hypothese,etatArt=:etatArt,annAcad=:annAcad where idSuject=:idSuject";
        $stmt=$pdo->prepare($query);
        $idSuject=$_POST['idSuject'];
        $intitule=$_POST['intitule'];
        $theme=$_POST['theme'];
        $problematique=$_POST['problematique'];
        $hypothese=$_POST['hypothese'];
        $etatArt=$_POST['etatArt'];
        $annAcad=$_POST['annAcad'];
        $stmt->execute(["idSuject"=> $idSuject,
                        "intitule"=>$intitule,
                        "theme"=>$theme,
                        "problematique"=>$problematique,
                        "hypothese"=>$hypothese,
                        "etatArt"=>$etatArt,
                        "annAcad"=>$annAcad]);
        header("Location: ../gestion-tfc.php");
    }
    if(isset($_GET["idSuject"])){
        $idSuject=$_GET["idSuject"];
        $query="SELECT * FROM suject WHERE idSuject=:idSuject";
        $stmt=$pdo->prepare($query);
        $stmt->execute(["idSuject"=>$idSuject]);
        $suject=$stmt->fetchAll();
        if (!empty($suject)): ?>
            <form method="post" action="modifieSuject.php">
                <div>
                    <input type="hidden" name="idSuject" class="form-control" value="<?= $idSuject ?>">
                </div>
                <div>
                    <input type="text" name="intitule" class="form-control" value="<?= $suject[0]["intitule"] ?>">
                </div>
                <div>
                    <input type="text" name="theme" class="form-control" value="<?= $suject[0]["theme"] ?>">
                </div>
                <div>
                    <input type="text" name="problematique" class="form-control" value="<?= $suject[0]["problematique"] ?>">
                </div>
                <div>
                    <input type="text" name="hypothese" class="form-control" value="<?= $suject[0]["hypothese"] ?>">
                </div>
                <div>
                    <input type="text" name="etatArt" class="form-control" value="<?= $suject[0]["etatArt"] ?>">
                </div>
                <div>
                    <input type="text" name="annAcad" class="form-control" value="<?= $suject[0]["annAcad"] ?>">
                </div>
                <button type="submit">Modifier</button>
            </form>
        <?php endif; ?>
    <?php } ?>