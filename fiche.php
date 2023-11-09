<?php 
    require 'back/config.php';
    if(session_status() == PHP_SESSION_NONE) session_start();
        $connect= isset($_SESSION["email"]);
        $suject = $_SESSION["suject"];
        $etudiant = $_SESSION["etudiant"];
        //$id_filiere=$_SESSION["id_filiere"];
        $sql = "SELECT e.idSuject,e.intitule,  e.annAcad,e.etatArt, s.nom, s.postnom, s.prenom FROM suject e
        JOIN etudiant s ON e.matricule = s.matricule";
         $stmt=$pdo->query($sql);
         $sujects=$stmt->fetchAll();
         $idSuject=$suject['idSuject'];
         //$query="SELECT * FROM filiere";
         //$filiere=$stmt->fetchAll();
         //$name=$filiere['name'];
         $connectEtudiant=isset($_SESSION['etudiant']) && isset($_SESSION['compte']);


?>

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
    <body> <!-- Barre de navigation/menu --> 
        <nav class="navbar navbar-inverse navbar-fixed-top"> 
            <div class="container"> <!-- Logo et bouton toggle --> 
                <div class="navbar-header"> 
                    <a class="navbar-brand" href="index.php"> 
                        <img src="assets/img/logo.png" alt="logo"/> 
                    </a> 
                    <span class="visible-xs titre-site" id="titre-site-xs">E.S.I.S.</span> 
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button> 
                </div> <!--/.navbar-header--> 
                <!-- Contenu menu/navigation --> 
                <div class="collapse navbar-collapse" id="collapse-1"> 
                    <p class="navbar-left visible-lg titre-site"> Ecole Supérieure d'Informatique Salama </p> 
                    <p class="navbar-left visible-sm visible-md titre-site"> E.S.I.S. </p> 
                    <ul class="nav navbar-nav navbar-right"> 
                        <li role="presentation" class=""> 
                            <a href="index.php" id="menu-accueil"><span class="glyphicon glyphicon-home"></span> Accueil</a> 
                        </li>
                        <li class="dropdown active" role="presentation"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"> 
                                <span class="glyphicon glyphicon-book"></span> Education <span class="caret"></span> 
                            </a> 
                            <ul class="dropdown-menu"> 
                                <!--<li><a href="index.php?module=calendrier">Calendrier académique</a></li>--> 
                                <li><a href="horaire.html">Horaire des cours</a></li> 
                                <li><a href="gestion-tfc.html">TFC</a></li>
                                <!--<li><a href="index.php?module=apropos&amp;onglet=cursus#filieres">Filières</a></li>--> 
                                <li><a href="centred'excellence.html">Centre d'Excellence</a></li> 
                                <li><a href="bibliotheque.html">Bibliothèque</a></li> 
                                <li><a href="https://esisalama.app" target="_blank">Résultats Académiques</a></li> 
                                <li><a href="https://script.google.com/a/macros/esisalama.org/s/AKfycbxtpNT6IbxrkHwV8fMTOQZLomGfk8fKRyob9QnChn5ex2wQ_bOpbVMEgb2dllogf8qMIg/exec" target="_blank">Recours</a></li> 
                                <li><a href="https://www.esisalama.net/elearning/" target="_blank">E-learning</a></li> 
                                <!--<li><a href="https://recours.credia.io" target="_blank">Recours</a></li>--> <!--<li><a href="https://colibris.credia.io" target="_blank">Suivi TFC</a></li>--> 
                                <!--<li><a href="https://jsesis2022.esisalama.com/js3sis2022/">Journée Scientifique 2022</a></li>--> 
                                <li><a href="https://jsesis2022.esisalama.com/jsEsis/2023/">Journée Scientifique 2023</a></li>
                                <li><a href="connexion-tfc.php">admin</a></li>
                            </ul> 
                        </li> 
                        <li role="presentation" class=""> 
                            <a href="index.php?module=actualite" id="menu-actualite"><span class="glyphicon glyphicon-list-alt"></span> Actualités</a> 
                        </li> 
                        <li role="presentation" class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"> 
                                <span class="glyphicon glyphicon-info-sign"></span> A propos d'esis 
                                <span class="caret"></span> 
                            </a> 
                            <ul class="dropdown-menu" id="menu-a-propos"> 
                                <li><a href="presentation.html">Présentation</a></li> 
                                    <li><a href="cursus.html">Cursus</a></li> 
                                    <li><a href="admin.html">Admission</a></li> 
                                    <li><a href="contact.html">Nous contacter</a></li>
                            </ul> 
                        </li> 
                    </ul> 
                </div> <!--/.collapse--> 
            </div> <!--/.container--> 
        </nav> <!-- Facebook Pixel Code --> 
         
        <!-- End Facebook Pixel Code --> <!--Titre de la page --> 
        <div class = "container-fluid titre-page titre-fixe-on"> 
            <div class = "row"> <div class = "col-xs-12 col-sm-6"> 
                <h1> <span class = "glyphicon glyphicon-list-alt"></span> DETAILS DU SUJET </h1> 
            </div> 
            <div class = "col-xs-12 col-sm-6 text-right">
                <ol class = "breadcrumb">
                    <li><a href = "espaceEtudiant.html">connexion</a></li>
                    <li>Espace Etudiant</li>
                </ol>
            </div> 
        </div> 
    </div> 
    <br><br><br><br><br>
    <?php if($connectEtudiant):?>
        <div class = "col-xs-12  text-right" style="background:none;">
                <ol class = "breadcrumb">
                    <li> 
                        <div style="padding: 10px;"> 
                            <a href="modifierSujet.php" class="btn btn-primary" role="button">modifier sujet</a> 
                        </div>
                    </li>
                    
                </ol>
            </div> 
            <?php endif?>

<?php if($connect):?>
    <div class = "col-xs-12  text-right" style="background:none;">
                <ol class = "breadcrumb">
                    <li> 
                        <div style="padding: 10px;"> 
                            <a href="choix.php?idSuject='.$idSuject.'" class="btn btn-primary" role="button">REJETER</a> 
                        </div>
                    </li>
                    <li>
                    <div style="padding: 10px;"> 
                    <a href="back/validation.php?idSuject='.$idSuject.'" class="btn btn-primary" role="button"> VALIDER</a>
                    
                        </div>
                    </li>
                </ol>
            </div> 
           
            
            <?php endif?>
            
            
    <?php

/*if($connect){
    echo '<td>'.'<a href="back/validation.php?idSuject='.$idSuject.' class="btn btn-primary" role="button""<div style="padding: 10px;"> 
    </div>valider</a>'.'</td>';
}*/
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
     
// Affichage des informations
echo "<table class='table table-bordered table-striped'>";
echo "<thead>";
echo "<tr>";
echo "<th>Information</th>";
echo "<th>Valeur</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Informations du suject
echo "<tr>";
echo "<td>Intitulé</td>";
echo "<td>" . $suject["intitule"] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Problématiques</td>";
echo "<td>" . $suject["problematique"] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Hypothèses</td>";
echo "<td>" . $suject["hypothese"] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>État de l'art</td>";
echo "<td>" . $suject["etatdeArt"] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Année académique</td>";
echo "<td>" . $suject["annAcad"] . "</td>";
echo "</tr>";

// Informations de l'étudiant

echo "<tr>";
echo "<td>Nom</td>";
echo "<td>" . $etudiant["nom"] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Postnom</td>";
echo "<td>" . $etudiant["postnom"] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Prénom</td>";
echo "<td>" . $etudiant["prenom"] . "</td>";
echo "</tr>";

echo "</tbody>";
echo "</table>";


?>
 <?php 
    $idSujet=$_SESSION['suject']['idSuject'];

?>

    
            
         <!-- Pied de page -->

    <footer> 
        <div class="container-fluid"> 
            <div class="row" id="bloc-info-plus"> 
                <div class="col-xs-12 col-md-4"> 
                    <h3 class="titre-pied">COORDONNEES</h3> 
                    <p> République Démocratique du Congo (RDC)<br /> 
                        <span class="glyphicon glyphicon-earphone"></span> +(243) 82 226 74 72<br /> 
                        <a href="mailto:info@esisalama.org"> 
                            <span class="glyphicon glyphicon-envelope"></span> info@esisalama.org 
                        </a> 
                    </p> 
                </div> 
                <div class="col-xs-12 col-md-4"> 
                    <h3 class="titre-pied">QUELQUES LIENS UTILES</h3> 
                    <p><a href="index.php?module=horaire" >Horaires des cours</a></p> 
                    <!--<p><a href="index.php?module=calendrier" >Calendrier académique</a></p>--> 
                    <p><a href="index.php?module=actualite" >Voir actualités</a></p> 
                </div> 
                <div class="col-xs-12 col-md-4"> 
                    <h3 class="titre-pied">RESTONS CONNECTES</h3> 
                    <p> 
                        <a href="https://www.google.com" target="_blank"> 
                            <img src="assets/img/autres/GooglePlus.svg" alt="logo GooglePlus" /> 
                        </a> 
                        <a href="https://www.facebook.com/EsisOfficiel" target="_blank"> 
                            <img src="assets/img/autres/Facebook.svg" alt="logo Facebook" /> 
                        </a> 
                        <a href="https://www.youtube.com/channel/UCtDV8isvHNC0fli1FjYB-Xw" target="_blank"> 
                            <img src="assets/img/autres/Youtube.svg" alt="logo Youtube" /> 
                        </a> 
                    </p> 
                </div> 
            </div> 
        </div> 
        <div class="container" id="bloc-copyright"> 
            <div class="row"> 
                <div class="col-xs-12"> Copyright &copy; ESISALAMA 2023 </div> 
            </div> 
        </div> 
    </footer> 
    <!-- Inclusion fichiers JavaScript --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    <!--<script src="assets/js/esisalama.min.js" type="text/javascript"></script>--> 
    <!-- to delete --> 
    <script src="assets/js/global.js" type="text/javascript"></script> 
    <script src="assets/js/accueil.js" type="text/javascript"></script> 
    <script src="assets/js/admin.js" type="text/javascript"></script> 
    <script src="assets/js/apropos.js" type="text/javascript"></script> 
    <script src="assets/js/calendrier.js" type="text/javascript"></script> 
    <script src="assets/js/horaire.js" type="text/javascript"></script> <!-- to delete --> <!-- Ferméture Body & html --> 
</body> 
</html>